    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo  logo-container">
                            <a href="#"><img src="assets/img/logo_black.jpg" alt=""></a>
                        </div>
                        <p>We are truly delighted to have you as a customer, and we appreciate the trust you’ve placed in us. If you need anything, feel free to reach out to us via this email.</p>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Product</h6>
                        <ul>
                            <li><a href="#">Ramadan Qaftan collection </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Service</h6>
                        <ul>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivery Service</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-12 text-center">
                        <div class="footer__copyright__text">
                             Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                            <p>Copyright ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                | Sistem Informasi Itenas Bandung | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/kurniaramadhan" target="_blank">Kurnia Ramadhan Putra</a>
                            </p>
                            Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
                        </div>
                    </div> -->
                </div>
            </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/js/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
    <script>
        function toggleMenu() {
            var menu = document.getElementById("mobileMenu");
            var icon = document.getElementById("menu-icon");
            if (menu.classList.contains("active")) {
                menu.classList.remove("active");
                icon.classList.remove("fa-times");
                icon.classList.add("fa-bars");
            } else {
                menu.classList.add("active");
                icon.classList.remove("fa-bars");
                icon.classList.add("fa-times");
            }
        }

        $(".mobile-menu .close-btn").click(function() {

            $(".mobile-menu").toggleClass("open");

        });

        $(".mobile-nav-toggler").click(function() {

            $(".mobile-menu").addClass("open");

        });

        $(".drop-down-btn").click(function() {
            $(this).toggleClass("open");
            $(this).prev().slideToggle(500);
        })
        
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '604748758968035');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=604748758968035&ev=PageView&noscript=1" /></noscript>
    </body>

    </html>