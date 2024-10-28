<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/knowproperties.css">

    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">

</head>
<body>
<style>
    /* Default styles for larger screens */
.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 20px;
}

.footer-logo, .footer-contact, .footer-links, .footer-location {
    width: 24%;
    padding: 10px;
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    padding: 10px 20px;
}

/* Tablet view (600px to 1024px) */
@media screen and (max-width: 1024px) {
    .footer-logo, .footer-contact, .footer-links, .footer-location {
        width: 48%;
        margin-bottom: 20px;
    }

    .footer-bottom {
        flex-direction: column;
        text-align: center;
    }

    .footer-bottom-left, .footer-bottom-right {
        width: 100%;
        margin-bottom: 10px;
    }
}

/* Mobile view (up to 600px) */
@media screen and (max-width: 600px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }

    .footer-logo, .footer-contact, .footer-links, .footer-location {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }

    .footer-bottom {
        flex-direction: column;
        align-items: center;
    }

    .footer-bottom-left, .footer-bottom-right {
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
    }

    .footer-bottom-right ul {
        padding: 0;
    }

    .footer-bottom-right ul li {
        display: inline-block;
        margin: 0 10px;
    }
}

</style>
<!-- footer -->

<footer><hr>
        <div class="footer-container">
            <div class="footer-logo">
                <a href="knowhome.php"><img src="images/logo/logomain.png" alt="Mantsion Logo"></a>
                <!-- <h2>Connect360</h2> -->
                <p>Welcome to Knowhere, your trusted partner in finding your dream home with exceptional, stress-free service.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-contact">
                <h3>Get In Touch</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt "></i> Wakad, Pimpri-Chinchwad, Pune 411057</li>
                    <li><i class="fas fa-envelope"></i> &nbsp example@mail.com</li>
                    <li><i class="fas fa-phone"></i>&nbsp +91 91122 11291</li>
                    <!-- <li><i class="fas fa-clock"></i>&nbsp 07.00 AM – 23.00 PM</li> -->
                </ul>
            </div>
            <div class="footer-links">
                <h3>Quicklinks</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-location">
                <h3>Location</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.85175304397!2d73.69835373134883!3d18.52346201558182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9c942ac6da1%3A0xaf0c3b2d5db3b890!2sKnowhere%20Real%20Estate%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1729160471039!5m2!1sen!2sin" 
                        width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <div class="footer-bottom">
            <!-- <div class=""> -->
                <div class="footer-bottom-left">
                    <p>Copyright &copy; 2024 ASK Project</p>
                </div>
                <div class="footer-bottom-right">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Services</a></li>
                    </ul>
                </div>
            <!-- </div> -->
        </div>

    </footer>
    
   <!-- end footer -->
</body>
</html>