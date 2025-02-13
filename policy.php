<?php include('layouts/header.php'); ?>
<!-- Breadcrumb Section Begin -->
<style>
    .testimonial {
        width: 100%;
        padding: 40px 0;
    }

    .testimonial__text {
        width: 100%;
        padding: 40px;
        border-radius: 10px;
        background-color: #f8f9fa; /* لون خلفية خفيف */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .testimonial__text h2 {
        font-size: 26px;
        font-weight: 700;
        color: #222;
        margin-bottom: 15px;
        text-align: center;
    }

    .testimonial__text p {
        font-size: 18px;
        line-height: 1.6;
        color: #555;
        text-align: justify;
    }

    .testimonial__text p::before {
        content: "“";
        font-size: 30px;
        color: #007bff;
        margin-right: 5px;
    }

    .testimonial__text p::after {
        content: "”";
        font-size: 30px;
        color: #007bff;
        margin-left: 5px;
    }

    .testimonial__text p b {
        color: #222;
        font-weight: 700;
    }
</style>
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Our Policy</h4>
                    <div class="breadcrumb__links">
                        <a href="index.php">Home <i class="fas fa-chevron-right"></i> Our Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial">
    <div class="container-fluid">
        <div class="testimonial__text w-100 text-center">
            <h2>Return and Exchange Policy:</h2>
            <p>
                <b>• Exchange:</b> You can exchange products within 14 days from the date of receiving the order.<br/><br/>
                <b>• Return:</b> Returns are available while the courier is waiting outside. Once the courier leaves, you will not be able to return the package.<br/><br/>
                <b>• Shipping Costs:</b> Shipping fees will be covered by you for both returns or exchanges.
            </p>
        </div>
    </div>
</section>


<?php include('layouts/footer.php'); ?>