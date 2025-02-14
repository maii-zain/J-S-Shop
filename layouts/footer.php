<style>
     .luminous-line {
        width: 100%;
        height: 0.25px; 
        background: white;
        position: absolute;
        top: 100;
        left: 0;
        box-shadow: 0px 0px 4px 2px rgba(255, 255, 255, 0.25);
    }

    /* Footer Styling */
    .footer {
        background: #000; /* Black background */
        color: #fff; /* White text */
        padding: 50px 0;
        font-size: 16px;
    }

    .footer a {
        color: #f8f9fa;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    .footer a:hover {
        color: #007bff;
    }

    /* Footer Logo */
    .footer__logo img {
        max-width: 150px;
    }

    /* Footer Sections */
    .footer__widget h6 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
        text-transform: uppercase;
    }

    .footer__widget ul {
        list-style: none;
        padding: 0;
    }

    .footer__widget ul li {
        margin-bottom: 10px;
    }

    .footer__widget ul li a {
        font-size: 16px;
        display: block;
        transition: transform 0.3s ease-in-out;
    }

    .footer__widget ul li a:hover {
        transform: translateX(5px);
    }

    /* Footer Bottom (Copyright) */
    .footer__copyright {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        margin-top: 30px;
        font-size: 14px;
    }

    /* Flexbox for Footer Widgets */
    .footer__widgets {
        display: flex;
        flex-wrap: nowrap; /* Prevent wrapping */
        gap: 50px; /* Adjust spacing between columns */
    }

    /* Ensure columns stay side by side */
    .footer__widget {
        flex: 1; /* Makes both columns take equal space */
        min-width: 150px; /* Ensures they don’t shrink too much */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .footer {
            text-align: center;
        }

        .footer__widgets {
            gap: 20px; /* Reduce spacing between columns */
        }

        .footer__widget {
            flex: 1; /* Ensure both columns take equal space */
            min-width: auto; /* Allow columns to shrink slightly */
        }
    }

    @media (max-width: 480px) {
        .footer__widgets {
            gap: 10px; /* Further reduce spacing for very small screens */
        }

        .footer__widget {
            flex: 1; /* Ensure both columns take equal space */
        }
    }
</style>

<!-- Footer Section Begin -->
<div class="luminous-line"></div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo logo-container">
                        <a href="#"><img src="assets/img/logo_black.jpg" alt=""></a>
                    </div>
                    <p>We are truly delighted to have you as a customer, and we appreciate the trust you’ve placed in us. If you need anything, feel free to reach out to us via this email.</p>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widgets">
                    <div class="footer__widget">
                        <h6>Product</h6>
                        <ul>
                            <li><a href="#">Ramadan Qaftan collection</a></li>
                        </ul>
                    </div>
                    <div class="footer__widget">
                        <h6>Service</h6>
                        <ul>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivery Service</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">
                    <p>Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        | Sistem Informasi Itenas Bandung | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/kurniaramadhan" target="_blank">Kurnia Ramadhan Putra</a>
                    </p>
                </div>
            </div> -->
        </div>
    </div>
</footer>
<!-- Footer Section End -->