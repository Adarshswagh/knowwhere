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

    <link rel="stylesheet" href="css/knowhome.css">
    <link rel="stylesheet" href="js/script.js">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</head>
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->

 <!-- banner -->
 <section class="hero-section">
        <div class="content">
            <h1>The Keys to Your Home</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante sit amet tellus. Quisque faucibus iaculis quam a aliquet.</p>
            <a href="#projects" class="btn">View Our Projects</a>
        </div>
    </section>
<!--end banner  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics Section with Counters</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-box">
                <h2><span class="counter" data-target="25000">0</span><span>+</span></h2>
                <p>Happy Clients</p>
            </div>
            <div class="stat-box">
                <h2><span class="counter" data-target="560">0</span><span>+</span></h2>
                <p>Completed Projects</p>
            </div>
            <div class="stat-box">
                <h2><span class="counter" data-target="100000">0</span><span>+</span></h2>
                <p>Property Sales</p>
            </div>
            <div class="stat-box">
                <h2><span class="counter" data-target="15">0</span><span>+</span></h2>
                <p>Years Experience</p>
            </div>
        </div>
    </section>

    <section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <!-- <h2>Services</h2> -->
      <h3>Services</h3>
    </div>

    <div class="row">
      <div class="service">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-snowman"></i></div>
          <h4 class="title"><a href="">Home Loan</a></h4>
          
        </div>
      </div>

      <div class="service">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-music"></i></div>
          <h4 class="title"><a href="">Interior</a></h4>  
        </div>
      </div>

      <div class="service">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-video"></i></div>
          <h4 class="title"><a href="">Legal Assistance</a></h4> 
        </div>
      </div>

      <div class="service">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-walking"></i></div>
          <h4 class="title"><a href="">Rent Agreement</a></h4>
        </div>
      </div>
    
      <div class="service">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-video"></i></div>
          <h4 class="title"><a href="">Sell Or Rent</a></h4>
        </div>
      </div>

      <div class="service">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-walking"></i></div>
          <h4 class="title"><a href="">Construction</a></h4>
        </div>
      </div>
    </div>
</section>

<div style="margin: auto 120px" >
    <section class="real-estate-section">
        <div class="image-section">
            <img src="images/01.jpg" alt="Featured Property">
            <div class="featured-project">
                <h3>Featured Project</h3>
                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit.</p>
                <a href="#" class="btn">See More</a>
            </div>
        </div>
        
        <div class="text-section">
            <h1>Real Estate Without the Hassle</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante sit amet tellus. Quisque faucibus iaculis quam a aliquet.</p>
            <p>Etiam a justo lectus. Donec eu nisl vel nibh vehicula tincidunt nec ut mi. Morbi porta felis sit amet quam efficitur condimentum. Donec porta.</p>
            <br>
            <br>
            <a href="#" class="btn-view-all">View All Projects</a>
        </div>
    </section>
</div>


<div style="margin: auto 120px">
<div style="font-family: Arial, sans-serif; background-color: #0e141b; color: #f5f5f5; margin: 60px 0px; padding: 0;">
    <div style="display: flex; justify-content: space-around; align-items: center; padding: 40px;">
        <div style="max-width: 45%;">
            <h2 style="font-size: 36px; font-weight: 300; color: #e4e2d8; margin-bottom: 20px;">Story About Mansion</h2>
            <p style="font-size: 16px; color: #cfcfcf; line-height: 1.6;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante sit amet tellus. Quisque faucibus iaculis quam a aliquet.
            </p>
            <ul style="list-style: none; padding: 0; margin: 20px 0; display: flex; flex-wrap: wrap;">
                <li style="flex: 1 1 50%; font-size: 16px; margin-bottom: 10px; color: #d0b378;">✔ Phasellus rutrum</li>
                <li style="flex: 1 1 50%; font-size: 16px; margin-bottom: 10px; color: #d0b378;">✔ Donec at quam</li>
                <li style="flex: 1 1 50%; font-size: 16px; margin-bottom: 10px; color: #d0b378;">✔ Phasellus tristique</li>
                <li style="flex: 1 1 50%; font-size: 16px; margin-bottom: 10px; color: #d0b378;">✔ Quisque rhoncus</li>
                <li style="flex: 1 1 50%; font-size: 16px; margin-bottom: 10px; color: #d0b378;">✔ Quisque rhoncus</li>
                <li style="flex: 1 1 50%; font-size: 16px; margin-bottom: 10px; color: #d0b378;">✔ Quisque rhoncus</li>
            </ul>
            <button style="background-color: #b89056; color: #0e141b; border: none; padding: 10px 20px; font-size: 14px; cursor: pointer; margin-top: 20px;">Discover More</button>
        </div>
        <div style="position: relative; display: flex;">
    <img src="images/01.jpg" alt="" style="width: 250px; height: 400px; object-fit: cover; margin: 0 10px; transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
    <img src="images/home image.png" alt="Image 2" style="width: 250px; height: 400px; object-fit: cover; margin: 0 10px; transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
</div>
</div>

    </div>
</div>

<div style="margin: auto 120px">
        <div style="font-family: Arial, sans-serif; background-color: #0b0d16; color: #fff; margin: 0; padding: 0;">
            <section style="text-align: center; padding: 50px 0;">
                <h2 style="font-size: 2rem; margin-bottom: 40px; font-weight: 400;">Our Trusted Partner</h2>
                <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px;">
                    <img src="partner1.png" alt="Partner 1" style="filter: grayscale(100%); transition: filter 0.3s ease, transform 0.3s ease; width: 150px;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.1)';" onmouseout="this.style.filter='grayscale(100%)'; this.style.transform='scale(1)';">
                    <img src="partner2.png" alt="Partner 2" style="filter: grayscale(100%); transition: filter 0.3s ease, transform 0.3s ease; width: 150px;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.1)';" onmouseout="this.style.filter='grayscale(100%)'; this.style.transform='scale(1)';">
                    <img src="partner3.png" alt="Partner 3" style="filter: grayscale(100%); transition: filter 0.3s ease, transform 0.3s ease; width: 150px;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.1)';" onmouseout="this.style.filter='grayscale(100%)'; this.style.transform='scale(1)';">
                    <img src="partner4.png" alt="Partner 4" style="filter: grayscale(100%); transition: filter 0.3s ease, transform 0.3s ease; width: 150px;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.1)';" onmouseout="this.style.filter='grayscale(100%)'; this.style.transform='scale(1)';">
                    <img src="partner5.png" alt="Partner 5" style="filter: grayscale(100%); transition: filter 0.3s ease, transform 0.3s ease; width: 150px;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.1)';" onmouseout="this.style.filter='grayscale(100%)'; this.style.transform='scale(1)';">
                </div>
                <br><br>
                <br><br>
                <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px;">
                    <img src="partner1.png" alt="Partner 1" style="filter: grayscale(100%); transition: filter 0.3s ease, transform 0.3s ease; width: 150px;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.1)';" onmouseout="this.style.filter='grayscale(100%)'; this.style.transform='scale(1)';">
                    <img src="partner2.png" alt="Partner 2" style="filter: grayscale(100%); transition: filter 0.3s ease, transform 0.3s ease; width: 150px;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.1)';" onmouseout="this.style.filter='grayscale(100%)'; this.style.transform='scale(1)';">
                    <img src="partner3.png" alt="Partner 3" style="filter: grayscale(100%); transition: filter 0.3s ease, transform 0.3s ease; width: 150px;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.1)';" onmouseout="this.style.filter='grayscale(100%)'; this.style.transform='scale(1)';">
                    <img src="partner4.png" alt="Partner 4" style="filter: grayscale(100%); transition: filter 0.3s ease, transform 0.3s ease; width: 150px;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.1)';" onmouseout="this.style.filter='grayscale(100%)'; this.style.transform='scale(1)';">
                    <img src="partner5.png" alt="Partner 5" style="filter: grayscale(100%); transition: filter 0.3s ease, transform 0.3s ease; width: 150px;" onmouseover="this.style.filter='grayscale(0%)'; this.style.transform='scale(1.1)';" onmouseout="this.style.filter='grayscale(100%)'; this.style.transform='scale(1)';">
                </div>
            </section>
        </div>
</div>


<section class="blog-news">
    <div class="container">
        <h2>Blog & News</h2>
        <p class="intro-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.</p>
        
        <div class="blog-row">
            <div class="blog-card">
                <img src="images/01.jpg" alt="Best beach in Australia">
                <h3>‘Best beach in Australia’ to shake QLD coastal records</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus...</p>
                <a href="#">READ MORE →</a>
            </div>
            
            <div class="blog-card">
                <img src="images/01.jpg" alt="Burnt house in shocking condition">
                <h3>Burnt house in shocking condition gets the top price</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus...</p>
                <a href="#">READ MORE →</a>
            </div>
            
            <div class="blog-card">
                <img src="images/01.jpg" alt="QLD’s hoarder house attracts">
                <h3>QLD’s hoarder house attracts 39 registered bidders</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus...</p>
                <a href="#">READ MORE →</a>
            </div>
        </div>
    </div>
</section>


<div class="row">
                <?php 
                    // Fetching properties from the database
                    $query = mysqli_query($con, "SELECT property.*, user.uname, user.utype, user.uimage FROM property, user WHERE property.uid=user.uid");
                    while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="col-md-6 col-sm-10">
                    <div class="property-card">
                        <div class="overlay-black">
                            <img src="admin/property/<?php echo $row['18']; ?>" alt="Property Image">
                            <div class="promo-badge">END YEAR PROMO</div>
                        </div>
                        <div class="property-info">
                            <h3 class="property-title">
                                <a href="propertydetail.php?pid=<?php echo $row['0']; ?>">
                                    <?php echo $row['1']; ?>
                                </a>
                            </h3>
                            <p class="price">$<?php echo $row['13']; ?></p>
                            <p class="property-details"><?php echo $row['14']; ?>, <?php echo $row['12']; ?> Sq ft</p>
                            <div class="property-meta">
                                <span><i class="fas fa-bed"></i> 4 Bedrooms</span>
                                <span><i class="fas fa-bath"></i> 2 Bathrooms</span>
                            </div>
                            <a href="knowpropertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>


<br/>
<br/>


    <script src="script.js"></script>

</body>
</html>
