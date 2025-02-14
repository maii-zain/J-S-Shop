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
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&display=swap');
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
    .shipping-tape {
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        background: black;
        color: white;
        padding: 10px 0;
        text-align: center;
        font-weight: bold;
        font-size: 16px;
        z-index: 9999; 
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

    .carousel {
        width: 100%;
        max-width: 8; /* Reduce max width */
        height: 1200px; /* Adjust height without cutting */
        margin: auto;
        overflow: hidden;
        position: relative;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        background: black; /* Prevent gaps around images */
    }   

    .carousel img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure full image is visible */
        display: none;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .carousel img.active {
        display: block;
        opacity: 1;
    }

    .carousel .prev,
    .carousel .next {
        position: absolute;
        top: 50%;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 15px 20px;
        cursor: pointer;
        border: none;
        font-size: 24px;
        z-index: 100;
        border-radius: 50%;
    }

    .carousel .prev:hover,
    .carousel .next:hover {
        background: rgba(0, 0, 0, 0.8);
        transform: scale(1.1);
    }

    .carousel .prev {
        left: 20px;
    }

    .carousel .next {
        right: 20px;
    }

    .carousel-text {
        position: absolute;
        bottom: 20%;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        background: rgba(0, 0, 0, 0.5);
        padding: 10px 20px;
        border-radius: 8px;
        font-family: 'Playfair Display', serif;
        width: 80%;
    }

    .hero-btn {
        display: inline-block;
        background: white;
        color: black;
        padding: 12px 25px;
        font-size: 18px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s, color 0.3s;
    }

    .hero-btn:hover {
        background: #ff4500;
        color: white;
    }

    .luminous-line {
        width: 100%;
        height: 0.25px; 
        background: white;
        position: absolute;
        top: 100;
        left: 0;
        box-shadow: 0px 0px 4px 2px rgba(255, 255, 255, 0.25);
    }

    .product__row {
        display: flex;
        flex-wrap: nowrap; /* Keep products in a single line */
        overflow-x: auto; /* Enable horizontal scrolling */
        gap: 20px; /* Space between products */
        padding-bottom: 10px; /* Avoid scrollbar overlapping */
        margin-bottom: 30px; /* Space between rows */
    }

    .product__item {
        flex: 0 0 calc(20% - 20px); /* 5 items per row (20% each) */
        min-width: 250px; /* Minimum card width */
        max-width: 300px; /* Prevent stretching */
    }

    /* Mobile adjustments */
    @media (max-width: 1024px) {
        .product__item {
            flex: 0 0 calc(33.33% - 20px); /* 3 items per row on medium screens */
        }
    }

    @media (max-width: 768px) {
        .product__item {
            flex: 0 0 calc(50% - 20px); /* 2 items per row on tablets */
        }
    }

    @media (max-width: 480px) {
        .product__item {
            flex: 0 0 calc(100% - 20px); /* 1 item per row on small screens */
        }
    }    

</style>

<!-- Moving Tape for First Order Shipping -->
<div class="shipping-tape">
    <div class="shipping-text">
        🚚 Free Shipping for Your First Order! 🎉 &nbsp; 🚀 Limited Time Offer! &nbsp; 🎁 Shop Now & Save! &nbsp;
    </div>
    <div class="luminous-line"></div>
</div>

<!-- Hero Section Begin -->
<div class="carousel">
    <button class="prev" onclick="prevImage()">&#10094;</button>
    <img src="assets/img/hero/IMG_4023.JPG" class="active">
    <img src="assets/img/hero/IMG_4057.JPG">
    <img src="assets/img/hero/IMG_4152.PNG">
    <button class="next" onclick="nextImage()">&#10095;</button>
</div>

<div class="luminous-line"></div>
<section class="product spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <br/><br/>
                    <h2 class="col-white">Our Featured</h2>
                    <span>Here you can check out our featured products</span>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <?php
            $count = 0;
            while ($row = $featured_products->fetch_assoc()) {
                if ($count % 5 == 0) {
                    if ($count > 0) {
                        echo '</div>'; // Close previous row
                    }
                    echo '<div class="product__row">'; // Start new row
                }
                ?>
                <div class="product__item">
                    <div class="product__item__pic set-bg"
                         data-hover="assets/img/product/<?php echo $row['product_image2']; ?>"
                         data-setbg="assets/img/product/<?php echo $row['product_image']; ?>">
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
                    </div>
                </div>
                <?php
                $count++;
            }
            if ($count > 0) {
                echo '</div>'; // Close last row
            }
            ?>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>
