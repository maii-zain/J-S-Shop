<?php
session_start();
 include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["contact_name"]);
    $email = trim($_POST["contact_email"]);
    $message = trim($_POST["contact_message"]);

    // التحقق من أن جميع الحقول غير فارغة
    if (empty($name) || empty($email) || empty($message)) {
        die("يرجى ملء جميع الحقول.");
    }

    // التحقق من صحة البريد الإلكتروني
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("بريد إلكتروني غير صالح.");
    }
    // التحقق من الاتصال
    if ($conn->connect_error) {
        die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
    }

    // استخدام استعلام مُجهَّز لحماية البيانات من SQL Injection
    $stmt = $conn->prepare("INSERT INTO contact (contact_name, contact_email, contact_message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "حدث خطأ أثناء الإرسال.";
    }

    $stmt->close();
    $conn->close();
}
?>
