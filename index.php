<?php
include('server/products.php');
include('server/limit_blog.php');
include('layouts/header.php');

$exchange_rate = 48; // سعر التحويل من الدولار إلى الجنيه المصري

function setLE($price)
{
    $result = number_format($price * 48, 0, ',', '.') . " LE";
    return $result;
}
?>
<style>
    .shipping-tape {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: black;
        color: white;
        padding: 10px 0;
        text-align: center;
        font-weight: bold;
        font-size: 16px;
        z-index: 1050;
        overflow: hidden;
    }

    .shipping-text {
        display: inline-block;
        white-space: nowrap;
        animation: moveText 10s linear infinite;
    }

    @keyframes moveText {
        from { transform: translateX(100%); }
        to { transform: translateX(-100%); }
    }
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        left: 20px;
        width: 60px;
        height: 60px;
        z-index: 1000;
        transition: transform 0.3s ease-in-out;
    }

    .whatsapp-button img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .whatsapp-button:hover {
        transform: scale(1.1);
    }
</style>

<!-- Moving Tape for First Order Shipping -->
<div class="shipping-tape">
    <div class="shipping-text">
        🚚 Free Shipping for Your First Order! 🎉 &nbsp; 🚀 Limited Time Offer! &nbsp; 🎁 Shop Now & Save! &nbsp;
    </div>
</div>

<!-- Hero Section Begin -->
<section class="hero">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/hero/IMG_4023.JPG" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="assets/img/hero/IMG_4152.PNG" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="assets/img/hero/IMG_4027.jpg" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>

<section class="product spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="col-white">Our Featured</h2>
                    <span>Here you can check out our featured products</span>
                </div>
            </div>
        </div>
        <div class="row product__filter m-30">
            <?php while ($row = $featured_products->fetch_assoc()) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix all-products">
                    <div class="product__item sale ">
                        <div class="product__item__pic set-bg" data-hover="assets/img/product/<?php echo $row['product_image2']; ?>" data-setbg="assets/img/product/<?php echo $row['product_image']; ?>">
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/icon/compare.png" alt="">
                                        <span>Compare</span>
                                    </a>
                                </li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><?php echo $row['product_name']; ?></h6>
                            <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>" class="add-cart">
                                Quick view
                            </a>

                            <?php if ($row['product_special_offer'] > 0): ?>
                                <h5 style="text-decoration: line-through; color: gray;">
                                    <?php echo setLE(max($row['product_price'], $row['product_special_offer'])); ?>
                                </h5>
                                <h5 style="color: red; font-weight: bold;">
                                    <?php echo setLE(min($row['product_price'], $row['product_special_offer'])); ?>
                                </h5>
                            <?php else: ?>
                                <h5><?php echo setLE($row['product_price']); ?></h5>
                            <?php endif; ?>

                            <div class="product__color__select">
                                <label for="pc-<?php echo $row['product_id']; ?>-1">
                                    <input type="radio" id="pc-<?php echo $row['product_id']; ?>-1">
                                </label>
                                <label class="active black" for="pc-<?php echo $row['product_id']; ?>-2">
                                    <input type="radio" id="pc-<?php echo $row['product_id']; ?>-2">
                                </label>
                                <label class="grey" for="pc-<?php echo $row['product_id']; ?>-3">
                                    <input type="radio" id="pc-<?php echo $row['product_id']; ?>-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- WhatsApp Button -->
<a href="https://wa.me/201234567890" class="whatsapp-button" target="_blank">
    <img src="assets/img/wdefault.svg" alt="WhatsApp">
</a>

<?php include('layouts/footer.php'); ?>