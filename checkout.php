<?php
session_start();
if (!empty($_SESSION['cart'])) {
    // Let user in
} else {
    // Send user to hompe page
    // Kalau mau dihilangkan tinggal diberi comment
    //header('location: index.php');
}

$kurs_dollar = 15722;

function setRupiah($price)
{
    $result = "Rp".number_format($price, 0, ',', '.');
    return $result;
}
?>

<?php include('layouts/header.php'); ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Check Out</h4>
                    <div class="breadcrumb__links">
                        <a href="index.php">Home</a>
                        <a href="shop.php">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <p style="font-size: 18PX; color: #000; font-weight: bold;" >Hey everyone! There’s an InstaPay option now, you’ll get free shipping! All other details and procedures will be handled via WhatsApp.”</p>
            <form id="checkout-form" method="POST" action="server/place.php">
                <div class="alert alert-danger" role="alert">
                    <?php if (isset($_GET['message'])) {
                        echo $_GET['message'];
                    } ?>
                    <?php if (isset($_GET['message'])) { ?>
                        <a href="login.php" class="btn btn-primary">Login</a>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <h6 class="checkout__title">Billing Details</h6>
                        <div class="checkout__input">
                            <p>Name<span>*</span></p>
                            <input type="text" name="name">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Town/City<span>*</span></p>
                            <input type="text" name="city">
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" name="address" placeholder="Street Address" class="checkout__input__add">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4 class="order__title">Your order</h4>
                            <div class="checkout__order__products">Product <span>Price</span></div>
                            <ul class="checkout__total__products">
                                <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
                                    <li><?php echo $value['product_quantity']; ?> <?php echo $value['product_name']; ?> <span> <?php echo setRupiah(($value['product_price'] * $kurs_dollar)); ?></span></li>
                                <?php } ?>
                            </ul>
                            <ul class="checkout__total__all">
                                <li>Total <span><?php echo setRupiah(($_SESSION['total'] * $kurs_dollar)); ?></span></li>
                            </ul>

                            <input type="submit" class="site-btn" id="checkout-btn" name="place_order" value="PLACE ORDER" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?php include('layouts/footer.php'); ?>
<script>
document.getElementById("checkout-form").addEventListener("submit", function(event) {
    let errors = [];

    let name = document.querySelector("input[name='name']").value.trim();
    let email = document.querySelector("input[name='email']").value.trim();
    let phone = document.querySelector("input[name='phone']").value.trim();
    let city = document.querySelector("input[name='city']").value.trim();
    let address = document.querySelector("input[name='address']").value.trim();
    if (!name) errors.push("Name is required.");
    if (!email) errors.push("Email is required.");
    if (!/\S+@\S+\.\S+/.test(email)) errors.push("Invalid email format.");
    if (!phone) errors.push("Phone number is required.");
    if (!city) errors.push("City is required.");
    if (!address) errors.push("Address is required.");

    if (errors.length > 0) {
        alert(errors.join("\n")); // عرض الأخطاء للمستخدم
        event.preventDefault(); // إيقاف إرسال النموذج
    }
});
</script>
