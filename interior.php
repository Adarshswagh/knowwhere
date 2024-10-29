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
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->


  <!-- banner -->
  <section id="banner-main">
    <div class="banner1" >
        <div class="banner-content">
            <h2>Interior Design</h2>
            <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Interior Design</a></p>
        </div>
    </div>
</section>


<!-- about section -->

<div class="about-section">
    <div class="experience">
        <div class="experience-years">
            <span>25</span>
            <p>Years<br>experience<br>working</p>
        </div>
    </div>
    <div class="about-content">
        <h3>ABOUT US</h3>
        <h1>Creative solutions by professional designers</h1>
        <p>Your kitchen is an expression of who you are, and its design should match your lifestyle. Whether you have traditional tastes or desire a modern feel, we can design your dream kitchen to suit any purpose.</p>
        <button>CONTINUE READING →</button>
    </div>
</div>

<!-- about section end -->


<!-- card section -->

<div class="collection-section">
    <div class="collection-card">
        <img src="images/blog1.jpg" alt="Country Collection">
        <div class="card-content">
            <h3>Country Collection</h3>
            <p>READ MORE</p>
        </div>
    </div>
    <div class="collection-card">
        <img src="images/blog1.jpg" alt="Concord Collection">
        <div class="card-content">
            <h3>Concord Collection</h3>
            <p>READ MORE</p>
        </div>
    </div>
    <div class="collection-card">
        <img src="images/blog1.jpg" alt="Classic Collection">
        <div class="card-content">
            <h3>Classic Collection</h3>
            <p>READ MORE</p>
        </div>
    </div>
    <div class="collection-card">
        <img src="images/blog1.jpg" alt="Luxor Collection">
        <div class="card-content">
            <h3>Luxor Collection</h3>
            <p>READ MORE</p>
        </div>
    </div>
    <div class="collection-card">
        <img src="images/blog1.jpg" alt="Luxor Collection">
        <div class="card-content">
            <h3>Luxor Collection</h3>
            <p>READ MORE</p>
        </div>
    </div>
    <div class="collection-card">
        <img src="images/blog1.jpg" alt="Luxor Collection">
        <div class="card-content">
            <h3>Luxor Collection</h3>
            <p>READ MORE</p>
        </div>
    </div>
    <div class="collection-card">
        <img src="images/blog1.jpg" alt="Luxor Collection">
        <div class="card-content">
            <h3>Luxor Collection</h3>
            <p>READ MORE</p>
        </div>
    </div>
    <div class="collection-card">
        <img src="images/blog1.jpg" alt="Luxor Collection">
        <div class="card-content">
            <h3>Luxor Collection</h3>
            <p>READ MORE</p>
        </div>
    </div>
</div>


<!-- why choose us -->
<div class="why-choose-us">
    <h2>Why Choose Us</h2>
    <p>We work to an extremely high standard of customer satisfaction</p>
    <div class="features">
        <div class="feature">
            <div class="icon">💡</div>
            <h3>Full Service</h3>
            <p>Not sure where to start? Let us help. We can handle all aspects of your real estate needs.</p>
        </div>
        <div class="feature">
            <div class="icon">💲</div>
            <h3>Deliver Value</h3>
            <p>We pledge to always provide optimal value for each and every client.</p>
        </div>
        <div class="feature">
            <div class="icon">🤝</div>
            <h3>Partners</h3>
            <p>We view our stakeholders as partners in our mission to make real estate seamless.</p>
        </div>
        <div class="feature">
            <div class="icon">🛡️</div>
            <h3>Integrity</h3>
            <p>Our integrity forms the bedrock of our relationships and business success.</p>
        </div>
    </div>
</div>

<!-- amenities -->
<section class="room-facilities">
        <h1>Room Facilities</h1>
        <p>Services of the Double Deluxe Spa View Room</p>
        <div class="facilities-grid">
            <div class="facility-item">
                <span>👤</span>
                <p>Daily VIP treatment</p>
            </div>
            <div class="facility-item">
                <span>🛁</span>
                <p>Bathrooms with shower</p>
            </div>
            <div class="facility-item">
                <span>📺</span>
                <p>49" Smart-TV</p>
            </div>
            <div class="facility-item">
                <span>💆‍♀️</span>
                <p>Daily access to the Spa's</p>
            </div>
            <div class="facility-item">
                <span>🛏️</span>
                <p>Evening turndown service</p>
            </div>
            <div class="facility-item">
                <span>☕</span>
                <p>Coffee and tea service</p>
            </div>
            <div class="facility-item">
                <span>❄️</span>
                <p>Air conditioning</p>
            </div>
            <div class="facility-item">
                <span>🔒</span>
                <p>Safety deposit box</p>
            </div>
            <div class="facility-item">
                <span>🍸</span>
                <p>Minibar drinks</p>
            </div>
            <div class="facility-item">
                <span>🍽️</span>
                <p>24h room service</p>
            </div>
            <div class="facility-item">
                <span>🧺</span>
                <p>Laundry service</p>
            </div>
            <div class="facility-item">
                <span>📶</span>
                <p>Free wifi</p>
            </div>
        </div>
    </section>
 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
