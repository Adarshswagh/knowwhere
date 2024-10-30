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
    <link rel="stylesheet" href="css/construction.css">

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
            <h2>Construction</h2>
            <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Construction</a></p>
        </div>
    </div>
</section>


<!-- about section -->
<section class="interior-section">
        <div class="text-content">
            <h1>We construct your dream home</h1>
            <p>Track house construction project progress, raise queries, view inspection reports and more.</p>
            <div class="features">
                <ul>
                    <li>✔ View packages, floor plans, design recommendations</li>
                    <li>✔ Capture house construction progress in 3D</li>
                    <li>✔ Realtime tracking until project completion</li>
                </ul>
                <!-- <ul>
                    <li>✔ Faucibus mattis aptent ac</li>
                    <li>✔ Mauris cursus dapibus dictumst</li>
                    <li>✔ Non nisl amet dolor</li>
                </ul> -->
            </div>
        </div>
        <div class="image-content">
            <div class="image-wrapper">
                <!-- <div class="play-button">▶</div> -->
                <img src="images/blog1.jpg" alt="Interior design">
            </div>
        </div>
    </section>

    <!-- how we work -->

    <section class="how-we-work">
        <h2>How We Work</h2>
        <p>We ensure peace of mind, trust, and transparent house construction services.</p>
        <div class="work-steps">
            <div class="step">
                <span class="number">01</span>
                <h3>Safe Money Transaction</h3>
                <p>No Advance. Contractor is paid only once the work is complete.</p>
            </div>
            <div class="step">
                <span class="number">02</span>
                <h3>Absolute Transparency</h3>
                <p>Clear and Detailed Quotation. Online tracking of projects</p>
            </div>
            <div class="step">
                <span class="number">03</span>
                <h3>Assured Quality Controls</h3>
                <p>470+ Quality (QASCON) Checks performed by team of experts</p>
            </div>
            <div class="step">
                <span class="number">04</span>
                <h3>Zero Delays</h3>
                <p>Zero tolerance for delays</p>
            </div>
        </div>
    </section>

    <!-- service -->

    <div class="service-section">
    <div class="service-container">
        <div class="service-text">
            <h5>Our Service</h5>
            <h2>Solutions for every corner</h2>
            <p>Dapibus fames vitae interdum nascetur facilisi rhoncus felis libero. Placerat leo conubia dapibus tristique integer auctor eget ac.</p>
            <button class="discover-btn">Discover More</button>
        </div>
        <div class="service-cards">
            <div class="service-card">
                <div class="icon">🏛️</div>
                <h3>Architecture</h3>
                <p>Sollicitudin lobortis luctus semper accumsan ultrices risus eros parturient. Tristique proin interdum purus in dapibus dui.</p>
            </div>
            <div class="service-card">
                <div class="icon">🛋️</div>
                <h3>Interior</h3>
                <p>Sollicitudin lobortis luctus semper accumsan ultrices risus eros parturient. Tristique proin interdum purus in dapibus dui.</p>
            </div>
            <div class="service-card">
                <div class="icon">🪑</div>
                <h3>Furniture</h3>
                <p>Sollicitudin lobortis luctus semper accumsan ultrices risus eros parturient. Tristique proin interdum purus in dapibus dui.</p>
            </div>
            <div class="service-card">
                <div class="icon">📐</div>
                <h3>3D Modelling</h3>
                <p>Sollicitudin lobortis luctus semper accumsan ultrices risus eros parturient. Tristique proin interdum purus in dapibus dui.</p>
            </div>
        </div>
    </div>
</div>




<!--	Footer   start-->
<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
