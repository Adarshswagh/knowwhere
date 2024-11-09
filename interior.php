<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="css/knowabout.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/interiorcss.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>

<style>
    /* amenities */
/* Background color and text alignment */
.services-section {
    background-color: #050f17;
    color: white;
    text-align: center;
    padding-top: 100px;
    padding: 100px;
}

.services-section h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.services-section p {
    font-size: 16px;
    margin-bottom: 30px;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.service-item {
    background-color: #050f17;
    color: white;
    border-radius: 8px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: transform 0.3s, box-shadow 0.3s;
    border: 1px solid #A8894D;
}

.service-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.service-item img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
    /* filter: invert(46%) sepia(30%) saturate(431%) hue-rotate(315deg) brightness(95%) contrast(83%); */
}

.service-item p {
    margin: 0;
    font-weight: 500;
    color: white;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .services-section h2 {
        font-size: 20px;
    }

    .services-section p {
        font-size: 14px;
    }
}
/* services end */

/* turnkey services */

/* General Styling */
.turnkey-services-section {
    background-color: #050f17;
    color: white;
    padding: 40px 20px;
    text-align: center;
}

.turnkey-services-intro {
    background-color: #fce8e8;
    color: #050f17;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
}

.turnkey-services-intro h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.turnkey-services-intro p {
    font-size: 16px;
    margin-bottom: 15px;
}

.know-more {
    color: #e74c3c;
    font-weight: bold;
    text-decoration: none;
    font-size: 14px;
}

.turnkey-services-grid {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.service-box {
    background-color: white;
    color: #050f17;
    border-radius: 10px;
    padding: 20px;
    width: 250px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.service-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.service-box img {
    width: 80px;
    height: 80px;
    margin-bottom: 15px;
}

.service-box h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.service-box p {
    font-size: 14px;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .turnkey-services-intro h2 {
        font-size: 20px;
    }
    
    .turnkey-services-intro p {
        font-size: 14px;
    }

    .turnkey-services-grid {
        flex-direction: column;
        align-items: center;
    }

    .service-box {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .turnkey-services-intro h2 {
        font-size: 18px;
    }

    .turnkey-services-intro p {
        font-size: 13px;
    }

    .service-box h3 {
        font-size: 16px;
    }

    .service-box p {
        font-size: 12px;
    }
}

/* turnkey serives end */

.about-content button {
    background-color: #A8894D    ;
    color: #140f0f;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 0.9rem;
    cursor: pointer;
}

.about-content button:hover {
    background-color: #ffffff;
    color: #1d1f27;
}

/* gallery end */

 /* get in touch */
 .contact-section {
    padding: 115px 0;
    background-color: #050F17;
}

.contact-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.form-container {
    flex: 1;
    padding: 40px;
    border: 1px solid #6c6c6c;
    max-width: 550px;
}

.input-group {
    display: flex;
    gap: 20px; /* Adjust the gap between first and last name fields */
    margin-bottom: 20px;
    
}

.email-group{
    margin-bottom: 20px;
}

.input-group input {
    width: 47%; /* Make both input fields take up equal space */
    font-size: 14px;
    font-family: 'Lexend', sans-serif;
    font-weight: 300;
    line-height: 1.7em;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    color: #fff;
    font-family: 'Lexend', sans-serif;
    font-size: 14px;
}

input::placeholder, textarea::placeholder {
    color: #fff;
}

textarea {
    height: 120px; /* Adjust the height of the message box */
    resize: vertical; /* Make the textarea resizable */
}

button {
    padding: 15px 30px; /* Increase the padding for a larger button */
    background-color: #a38755;
    color: #050F17;
    border: none;
    cursor: pointer;
    margin-top: 20px; /* Adjust margin for space between form elements */
    font-family: 'Lexend', sans-serif;
}

button:hover {
    background-color: #fff;
}

.contact-info {
    flex: 1;
    padding: 20px;
    max-width: 555px;
}

.contact-info h2 {
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;
    margin-bottom: 20px;
    color: #e8e8e8;
    font-family: "Italiana", Sans-serif;
}

.contact-info p {
    margin-bottom: 20px;
    font-size: 14px;
    line-height: 1.7em;
    font-weight: 300;
    font-family: "Lexend", Sans-serif;
    text-align: left;
}

.contact-info ul {
    list-style: none;
    padding-left: 0;

}

.contact-info ul li {
    color: #e8e8e8  ;
    margin-bottom: 10px;
    font-size: 14px;
    font-family: "Lexend", Sans-serif;
    font-weight: 300;
    line-height: 1.7em;
}

.contact-info ul li i {
    margin-right: 10px;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .contact-container {
        flex-direction: column;
    }

    .form-container, .contact-info {
        width: 100%;
    }

    .input-group {
        flex-direction: column; /* Make first and last name stack on top of each other on mobile */
    }

    .contact-info h2 {
        font-size: 28px;
    }
}



</style>
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->


  <!-- banner -->
  <section id="banner-main">
    <div class="banner1" >
        <div class="banner-content">
            <h2>Interior Design</h2>
            <p style = "text-align:center;"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Interior Design</a></p>
        </div>
    </div>
</section>


<!-- about section -->

<div class="about-section">
    <div class="experience">
        <div class="experience-years">
            <span style= " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em; ">25</span>
            <p>Years<br>experience<br>working</p>
        </div>
    </div>
    <div class="about-content">
        <h3 style= " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 35px;
    font-weight: 400;
    line-height: 1.3em;">ABOUT US</h3>
        <h1>Creative solutions by professional designers</h1>
        <p>Your kitchen is an expression of who you are, and its design should match your lifestyle. Whether you have traditional tastes or desire a modern feel, we can design your dream kitchen to suit any purpose.</p>
        <button style="border-radius:0;">CONTINUE READING →</button>
    </div>
</div>

<!-- about section end -->


<!-- why choose us -->
<div class="why-choose-us">
    <h2 style= " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 35px;
    font-weight: 400;
    line-height: 1.3em; text-align:center;">Why Choose Us</h2>
    <p style = "text-align:center;">We work to an extremely high standard of customer satisfaction</p>
    <div class="features">
        <div class="feature">
            <div class="icon">💡</div>
            <h3>Full Service</h3>
            <p style = "text-align:center;">Not sure where to start? Let us help. We can handle all aspects of your real estate needs.</p>
        </div>
        <div class="feature">
            <div class="icon">💲</div>
            <h3>Deliver Value</h3>
            <p style = "text-align:center;">We pledge to always provide optimal value for each and every client.</p>
        </div>
        <div class="feature">
            <div class="icon">🤝</div>
            <h3>Partners</h3>
            <p style = "text-align:center;">We view our stakeholders as partners in our mission to make real estate seamless.</p>
        </div>
        <div class="feature">
            <div class="icon">🛡️</div>
            <h3>Integrity</h3>
            <p style = "text-align:center;">Our integrity forms the bedrock of our relationships and business success.</p>
        </div>
    </div>
</div>


<!-- gallery -->

<h2 style= " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 35px;
    font-weight: 400;
    line-height: 1.3em; text-align:center; padding-top:100px;">Discover Your Dream Home: Dive into Our Decor & Furniture Collection!</h2>
<div class="section-container">
  <div class="item" style="border-raius:0px;">
    <img src="images/sofa.png" alt="Sofas">
    <p class="interior-box-p" >Sofas</p>
  </div>
  <div class="item" style="border-raius:0px;">
    <img src="images/coffee table.png" alt="Coffee Tables">
    <p class="interior-box-p" >Coffee Tables</p>
  </div>
  <div class="item" style="border-raius:0px;">
    <img src="images/bed.png" alt="Beds">
    <p class="interior-box-p" >Beds</p>
  </div>
  <div class="item" style="border-raius:0px;">
    <img src="images/tv unit.png" alt="Beds">
    <p class="interior-box-p" >Tv Units</p>
  </div>
</div>

<div class="section-container">
<div class="item" style="border-raius:0px;">
    <img src="images/kids.png" alt="Beds">
    <p class="interior-box-p">Kids Storage</p>
  </div>
  <div class="item" style="border-raius:0px;">
    <img src="images/chair.png" alt="Coffee Tables">
    <p class="interior-box-p">Lounges Chairs</p>
  </div>
  <div class="item" style="border-raius:0px;">
    <img src="images/kids2.png" alt="Beds">
    <p class="interior-box-p">Kids Beds</p>
  </div>
  <div class="item" style="border-raius:0;">
    <img src="images/wall.png" alt="Beds">
    <p class="interior-box-p">Wall Scones</p>
  </div>
  
</div>


<!-- gallery end -->




    <section class="contact-section">
    <div class="contact-container">
        <div class="form-container">
            <form style="text-align:center">
                <div class="input-group" style="width:100%">
                    <input type="text" name="first-name" placeholder="First Name" required>
                    <input type="text" name="last-name" placeholder="Last Name" required>
                </div>
                <input type="email" name="email" placeholder="Email" required class="email-group">
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit" style="margin-top:30px">SEND MESSAGE</button>
            </form>
        </div>
        <div class="contact-info">
            <h2 style= " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 40px;
    font-weight: 400;
    line-height: 1.3em;">Get In Touch</h2>
            <p style = "color:white; font-size:15px;">Ready to make your real estate dreams a reality? Get in touch with Knowhere for trusted guidance, tailored solutions, and a seamless property experience.</p>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> Wakad, Pimpri-Chinchwad, Maharashtra 411057</li>
                <li><i class="fas fa-envelope"></i> example@mail.com</li>
                <li><i class="fas fa-phone-alt"></i>+91 91122 11291</li>
                
            </ul>
        </div>
    </div>
</section>


<!-- call to action -->
<section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p>Thank you for choosing Knowhere. Let us turn your real estate dreams into reality.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<section>
<!-- <h2 class="test-tag">Your Dream Home Awaits</h2> -->
</section>

<!-- end call to action -->

    
 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
