<?php include('layouts/header.php'); ?>
<!-- Breadcrumb Section Begin -->
<style>
   .testimonial {
    width:90%;
    padding: 60px 0;
    background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}

/* Background Particles */
.testimonial::before {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.2);
    top: -100px;
    left: -100px;
    border-radius: 50%;
    filter: blur(100px);
    animation: float 6s infinite ease-in-out;
}

.testimonial::after {
    content: "";
    position: absolute;
    width: 200px;
    height: 200px;
    background: rgba(0, 123, 255, 0.2);
    bottom: -50px;
    right: -50px;
    border-radius: 50%;
    filter: blur(100px);
    animation: float 8s infinite ease-in-out;
}
    .testimonial__text {
        width: 100%;
        padding: 40px;
        border-radius: 10px;
        background-color: #f8f9fa; 
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