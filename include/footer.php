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
                <img src="images/logo/logomain.png" alt="Mantsion Logo">
                <!-- <h2>Connect360</h2> -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nibh vehicula.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-contact">
                <h3>Get In Touch</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt "></i> &nbsp 918 Abner Road, Hudson</li>
                    <li><i class="fas fa-envelope"></i> &nbsp example@mail.com</li>
                    <li><i class="fas fa-phone"></i>&nbsp +1 234 567 890</li>
                    <li><i class="fas fa-clock"></i>&nbsp 07.00 AM – 23.00 PM</li>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509774!2d144.95543131556883!3d-37.81720997975148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43c0509aef%3A0xf4c2931ba1f06c7c!2sVictoria!5e0!3m2!1sen!2sau!4v1617011319310!5m2!1sen!2sau" 
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