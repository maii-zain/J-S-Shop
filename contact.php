<?php include('layouts/header.php'); ?>
<!-- Map Begin -->
<!-- <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9292210590997!2d107.63751111459267!3d-6.899068695014868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e79619932267%3A0x7b0db64c18423167!2sJl.%20Phh.%20Mustofa%2C%20Cikutra%2C%20Kec.%20Cibeunying%20Kidul%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1666383278199!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> -->
<!-- Map End -->
<link href="assets/css/contact.css" rel="stylesheet">

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <span>Information</span>
                        <h2>MF Binary</h2>
                        <p>
                        At J’S, we strive to offer high-quality products and innovative designs that reflect your unique taste. We are dedicated to providing the best experience through attention to every detail.
                        </p>
                        <ul class="socail">
                            <li><a class="facebook" href="https://www.facebook.com/profile.php?id=61572266194845&mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="tiktok" href="https://www.tiktok.com/@js852932?_t=ZS-8tnundWbLhS&_r=1" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                            <li><a class="whatsapp" href="https://wa.me/+201055620649" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/jijies2025?igsh=ZGV6ZmZvMnR2d2lm " target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form id="contactForm" action="./server/process_contact.php" method="POST" onsubmit="return validateForm()">
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name" name="contact_name" id="contact_name" required />
                                <small id="nameError" class="error-message"></small>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email" name="contact_email" id="contact_email" required />
                                <small id="emailError" class="error-message"></small>
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Message" name="contact_message" id="contact_message" required></textarea>
                                <small id="messageError" class="error-message"></small>
                                <button type="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->


<!-- End Conatct Section -->

<?php include('layouts/footer.php'); ?>
<script>
    function validateForm() {
        // الحصول على القيم المدخلة
        let name = document.getElementById("contact_name").value.trim();
        let email = document.getElementById("contact_email").value.trim();
        let message = document.getElementById("contact_message").value.trim();

        // الحصول على عناصر الخطأ
        let nameError = document.getElementById("nameError");
        let emailError = document.getElementById("emailError");
        let messageError = document.getElementById("messageError");

        // إعادة تعيين الرسائل السابقة
        nameError.innerText = "";
        emailError.innerText = "";
        messageError.innerText = "";

        let isValid = true;

        // التحقق من الحقول الفارغة
        if (name === "") {
            nameError.innerText = "يرجى إدخال الاسم.";
            isValid = false;
        }
        if (email === "") {
            emailError.innerText = "يرجى إدخال البريد الإلكتروني.";
            isValid = false;
        }
        if (message === "") {
            messageError.innerText = "يرجى إدخال الرسالة.";
            isValid = false;
        }

        // التحقق من صحة البريد الإلكتروني
        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (email !== "" && !emailPattern.test(email)) {
            emailError.innerText = "يرجى إدخال بريد إلكتروني صالح.";
            isValid = false;
        }

        return isValid; // إذا كان `false`، لن يتم إرسال الفورم
    }
</script>