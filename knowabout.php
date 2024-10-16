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

    <link rel="stylesheet" href="css/knowabout.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

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
            <h2>About Us </h2>
            <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">About Us</a></p>
        </div>
    </div>
</section>

<!--end banner  -->

<!-- details -->
<section class="about-section">
        <div class="content">
            <div class="text">
                <h1>About Mansion</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante sit amet tellus. Quisque faucibus iaculis quam a aliquet.</p>
                <ul class="checklist">
                    <div class="list-left">
                        <li><span>✔</span> Phasellus rutrum</li>
                        <li><span>✔</span> Donec at quam</li>
                        <li><span>✔</span> Phasellus tristique</li>
                        <li><span>✔</span> Quisque rhoncus</li>
                    </div>
                    <div class="list-right">
                        <li><span>✔</span> Phasellus rutrum</li>
                        <li><span>✔</span> Donec at quam</li>
                        <li><span>✔</span> Phasellus tristique</li>
                        <li><span>✔</span> Quisque rhoncus</li>
                    </div>
                </ul>
                <button class="cta-btn">Get Started</button>
            </div>
            <div class="images">
                <div class="image">
                    <img src="./images/ab1.jpg" alt="Mansion Interior 1">
                </div>
                <div class="image" style="margin-top:-50px;">
                    <img src="./images/ab2.jpg" alt="Mansion Interior 2">
                    
                </div>
            </div>
        </div>
</section>
 <!-- end details -->


 <!-- counter -->
<section class="stats-section">
    <!-- <div class="stat-fullbox"> -->
        <div class="stat-box">
            <h1>25 K<span>+</span></h1>
            <p>Happy Client</p>
        </div>
        <div class="stat-box">
            <h1>560<span>+</span></h1>
            <p>Complete Projects</p>
        </div>
        <div class="stat-box">
            <h1>100 K<span>+</span></h1>
            <p>Property Sales</p>
        </div>
        <div class="stat-box">
            <h1>15<span>+</span></h1>
            <p>Years Experience</p>
        </div>
    <!-- </div> -->
</section>
  <!-- end counter -->

  <!-- vision & mission -->
    <section class="vision-mission">
        <div class="container1">
            <div class="section-header">
                <div class="section-title">
                    <h2>Vision & Mission</h2>
                </div>
                <div class="button-container">
                    <a href="#" class="btn1">Discover More</a>
                </div>
            </div>
            <div class="content">
                <div class="image-box"></div>

                <div class="text-boxes">
                    <div class="text-box">
                        <h3>Vision</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus.</p>
                        <ul>
                            <li><span>&#10003;</span> Phasellus rutrum</li>
                            <li><span>&#10003;</span> Donec at quam</li>
                            <li><span>&#10003;</span> Phasellus tristique</li>
                            <li><span>&#10003;</span> Quisque rhoncus</li>
                        </ul>
                    </div>
                    <div class="text-box">
                        <h3>Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum.</p>
                        <ul>
                            <li><span>&#10003;</span> Phasellus rutrum</li>
                            <li><span>&#10003;</span> Donec at quam</li>
                            <li><span>&#10003;</span> Phasellus tristique</li>
                            <li><span>&#10003;</span> Quisque rhoncus</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



   <!-- end vision & mission -->


   <!-- why chose us -->
    <section class="why-choose-us">
        <div class="container-whychoose">
            
            <div class="features">
                <div class="feature-box reliable">
                    <i class="icon building"></i>
                    <h3>Reliable</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="feature-box comfortable">
                    <i class="icon cloud"></i>
                    <h3>Comfortable</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="feature-box guarantee">
                    <i class="icon thumbs-up"></i>
                    <h3>Guarantee</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="feature-box affordable">
                    <i class="icon tag"></i>
                    <h3>Affordable</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="title">
                <h2>Why Choose Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullam corper luctus, lacus ex consequat ipsum, ultricies interdum ex ante sit amet tellus.</p>
                <a href="#" class="discover-more">Discover More</a>
            </div>
        </div>
    </section>
    <!-- why choose us -->

 <!-- call to action -->
 <section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullam corper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
  <!-- end call to action -->

  <!-- footer -->

   <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>