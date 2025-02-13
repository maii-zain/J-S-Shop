<?php 
session_start();
include('connection.php');

// التحقق من إرسال الطلب عبر الفورم
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // جلب البيانات المدخلة
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $city = trim($_POST['city']);
    $address = trim($_POST['address']);
    
    // التحقق من إدخال جميع الحقول المطلوبة
    if (empty($name) || empty($email) || empty($phone) || empty($city) || empty($address)) {
        header("location: checkout.php?message=Please fill in all required fields.");
        exit;
    }

    // التحقق مما إذا كان المستخدم مسجلاً
    if (!isset($_SESSION['logged_in'])) {
        // التحقق مما إذا كان البريد الإلكتروني موجودًا بالفعل في قاعدة البيانات
        $check_user_query = "SELECT user_id FROM users WHERE user_email = ?";
        $stmt_check = $conn->prepare($check_user_query);
        $stmt_check->bind_param("s", $email);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            // إذا كان البريد موجودًا، سجل دخول المستخدم
            $stmt_check->bind_result($user_id);
            $stmt_check->fetch();
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $user_id;
        } else {
            // إذا لم يكن المستخدم مسجلاً، يتم إنشاء حساب جديد
            $default_password = password_hash("123456", PASSWORD_DEFAULT); // كلمة مرور افتراضية
            $create_user_query = "INSERT INTO users (user_name, user_email, user_phone, user_city, user_password) VALUES (?, ?, ?, ?, ?)";
            $stmt_create_user = $conn->prepare($create_user_query);
            $stmt_create_user->bind_param("sssss", $name, $email, $phone, $city, $default_password);
            $stmt_create_user->execute();

            if ($stmt_create_user->affected_rows > 0) {
                // تسجيل دخول المستخدم بعد إنشاء الحساب
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $stmt_create_user->insert_id;
            } else {
                header("location: checkout.php?message=Error creating account. Please try again.");
                exit;
            }
        }
    }

    // التحقق مما إذا كان المستخدم مسجلاً الآن
    if (!isset($_SESSION['logged_in']) || !isset($_SESSION['user_id'])) {
        header("location: checkout.php?message=Login failed. Please try again.");
        exit;
    }

    // متابعة عملية إنشاء الطلب
    $order_cost = $_SESSION['total'];
    $order_status = "not paid";
    $user_id = $_SESSION['user_id'];
    $order_date = date('Y-m-d h:i:s');

    $query_orders = "INSERT INTO orders (order_cost, order_status, user_id, user_phone, user_city, user_address, order_date) 
                     VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt_orders = $conn->prepare($query_orders);
    $stmt_orders->bind_param('ssissss', $order_cost, $order_status, $user_id, $phone, $city, $address, $order_date);
    $stmt_status = $stmt_orders->execute();

    if (!$stmt_status) {
        header('location: index.php');
        exit;
    }

    $order_id = $stmt_orders->insert_id;
    $_SESSION['order_id'] = $order_id;

    foreach ($_SESSION['cart'] as $key => $value) {
        $product = $_SESSION['cart'][$key];
        $product_id = $product['product_id'];
        $product_name = $product['product_name'];
        $product_image = $product['product_image'];
        $product_price = $product['product_price'];
        $product_quantity = $product['product_quantity'];

        $query_order_items = "INSERT INTO order_items (order_id, product_id, product_name, product_image, product_price, product_quantity, user_id, order_date) 
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt_order_items = $conn->prepare($query_order_items);
        $stmt_order_items->bind_param('iissssis', $order_id, $product_id, $product_name, $product_image, $product_price, $product_quantity, $user_id, $order_date);
        $stmt_order_items->execute();
    }

    // إرسال رسالة واتساب بعد الطلب
    $whatsapp_message = urlencode("Your order #$order_id has been placed successfully! Total amount: $order_cost.");
    $whatsapp_number = "+201055620649"; // استخدم كود الدولة المناسب

    // إعادة توجيه العميل إلى واتساب
    header("location: https://wa.me/$whatsapp_number?text=$whatsapp_message");
    exit();
}
