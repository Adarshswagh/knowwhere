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
    <title>Knowhere</title>

    <link rel="stylesheet" href="css/knowhome1.css">
    <link rel="stylesheet" href="js/knowscript.js">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">




</head>
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->

 <!-- banner -->
 <section id="hero-main">
    <section class="hero-section1">
        <div class="content1">
            <h1 class="banner-heading">The Keys to Your Home</h1>
            <p class="banner-para">Welcome to Knowhere, your trusted property consultant.</p>

            <!-- Search Bar -->
            <form action="prolist.php" method="GET" class="property-search-bar">
                <div class="property-input-group">
                    <input type="text" name="location" class="property-input" placeholder="Search by City (e.g., Hinjewadi)" required>
                </div>

                <div class="property-select-group">
                    <select name="project_type" class="property-select" required>
                        <option value="" disabled selected>Property Type</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="plotting">Plotting</option>
                    </select>
                </div>

                <button type="submit" class="property-search-btn">
                    <i class="fas fa-search"></i> Search
                </button>
            </form>



            <!-- <a href="#" class="btn-home">View Our Projects</a>
            <a id="headerCompareButton" onclick="window.location.href='compare.php'" style="display: none;">
                Compare Properties
            </a> -->
        </div>
    </section>
</section>

<!--end banner  -->


<!-- services -->
<section id="service-home">
    <div class="container-service">
        <div class="logo">
            <img src="./images/service/s1.png" alt="Building Logo 1">
            <p>Real Property<br>Living Solutions</p>
        </div>
        <div class="logo">
            <img src="./images/service/s2.png" alt="Building Logo 2">
            <p>Real Property<br>Living Solutions</p>
        </div>
        <div class="logo">
            <img src="./images/service/s3.png" alt="Building Logo 3">
            <p>Real Property<br>Living Solutions</p>
        </div>
        <div class="logo">
            <img src="./images/service/s4.png" alt="Building Logo 4">
            <p>Real Property<br>Living Solutions</p>
        </div>
        <div class="logo">
            <img src="./images/service/s5.png" alt="Building Logo 5">
            <p>Real Property<br>Living Solutions</p>
        </div>
        <div class="logo">
            <img src="./images/service/s6.png" alt="Building Logo 5">
            <p>Real Property<br>Living Solutions</p>
        </div>
    </div>
</section>
 <!--end  services -->
 <!-- property type  -->

<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Explore Properties</h2>
        <p class="section-description">
        At Knowhere, we offer a comprehensive range of real estate services to cater to the
        diverse needs of our clients. Our services include
        </p>
    </div>

</section>
    <section class="property-section">
        <div class="property-container">
        
            <div class="property-card1 property-card-small property-info1">
                <img src="./images/commercial_property.png" alt="Property 1">
                <div class="property-overlay">
                    <div class="property-details1">
                    <a href="residential.php"  style="text-decoration:none;">  <h2 class="property-type-detail">Residential Projects</h2></a>
                    </div>
                </div>
            </div>
            <div class="property-card1 property-card-large property-info1">
                <img src="./images/residential_property.png" alt="Property 2">
                <div class="property-overlay">
                    <div class="property-details1">
                    <a href="commercial.php"  style="text-decoration:none;"> <h2 class="property-type-detail">Commercial Projects</h2></a>
                    </div>
                </div>
            </div>
            <div class="property-card1 property-card-small property-info1">
                <img src="./images/plotting_property.png" alt="Property 3">
                <div class="property-overlay">
                    <div class="property-details1">
                    <a href="plotting.php"  style="text-decoration:none;">   <h2 class="property-type-detail">Plots/ Vills Projects</h2></a>
                    </div>
                </div>
            </div>
        </div>
    </section>  
<!-- end property type -->




<!-- real estate  -->
<section id="real-estate">
    <div class="container-real">
        <div class="featured-project">
            <div class="project-details">
                <h3>Featured Project</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="see-more-btn">See More</a>
            </div>
        </div>
        <div class="main-content">
            <h1>Real Estate Without the Knowhere</h1>
            <p>At Knowhere, we understand that buying or selling a property can be a daunting task. That&#39;s why
                we strive to make the process as smooth and stress-free as possible. We have a team of highly
                experienced professionals who are dedicated to providing you with personalized solutions that
                cater to your unique needs.</p>
                            <p>Our expertise lies in providing end-to-end real estate services, including property search, legal
                documentation, property valuation, and much more. We work closely with our clients to
                understand their requirements and offer them customized solutions that are tailored to their
                needs.</p>
            <a href="#" class="view-projects-btn">View All Projects</a>
        </div>
    </div>
</section>

<!--end real esatte  -->




 <!-- property crad carousel -->
 <section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Projects by Knowhere</h2>
        <p class="section-description">
            Welcome to Knowhere, your trusted property consultant. We are committed to providing you with
exceptional services and helping you find your dream home.
        </p>
    </div>

</section>

<section id="project-card">
    <div class="card-container">
        <div class="card-items">
        <?php 
        // Query for fetching featured data from all three tables
        $queryResidential = mysqli_query($con, "SELECT * FROM residential_projects ");
        $queryCommercial = mysqli_query($con, "SELECT * FROM commercial_projects ");
        $queryPlotting = mysqli_query($con, "SELECT * FROM plotting_projects ");

        // Fetch and display residential featured projects
        while($row = mysqli_fetch_array($queryResidential)) {
        ?>
            <div class="card-entry">
                            <div class="overlay-black">
                                <img src="admin/property/<?php echo $row['9'];?>" alt="Residential Property Image">
                                <div class="promo-badge">Residential Projects</div>
                                </div>
                            <div class="property-info">
                                <h3 class="property-title">
                                    <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="property-meta">
                                    <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>
                                    <span class="land-area card-location"><i class="fa-solid fa-building" style="color: #a8894d;"></i> <?php echo $row['5']; ?>Towers</span>

                                    
                                </div>
                                <div class="property-meta">
                                    <span class="total-units card-location1">Total Units: <?php echo $row['total_units']; ?></span>
                                    
                                </div>
                                <div class="button-container">
                                    <!-- "Know More" button -->
                                    <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                    <!-- WhatsApp Button -->
                                    <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>

                                    <!-- Call Button -->
                                    <a href="tel:+1234567890" class="btn-icon call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>


                                
                                <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                
                            </div>
            </div>
            <?php } ?>

            <?php 
            // Fetch and display commercial featured projects
            while($row = mysqli_fetch_array($queryCommercial)) {
            ?>

            <div class="card-entry">
                            <div class="overlay-black">
                                <img src="admin/property/<?php echo $row['17'];?>" alt="Residential Property Image">
                                <div class="promo-badge">Commercial Projects</div>
                                </div>
                            <div class="property-info">
                                <h3 class="property-title">
                                    <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="property-meta">
                                    <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['8'];?></span>
                                    <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>

                                    
                                </div>
                                <div class="property-meta">
                                    <span class="total-units card-location1">Typology : <?php echo $row['5']; ?></span>
                                    
                                </div>  
                                <div class="button-container">
                                    <!-- "Know More" button -->
                                    <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                    <!-- WhatsApp Button -->
                                    <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>

                                    <!-- Call Button -->
                                    <a href="tel:+1234567890" class="btn-icon call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>


                                
                                <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                
                            </div>
            </div>
            <?php } ?>

            <?php 
            // Fetch and display plotting featured projects
            while($row = mysqli_fetch_array($queryPlotting)) {
            ?>

            <div class="card-entry">
                        <div class="overlay-black">
                            <img src="admin/property/<?php echo $row['13']; ?>" alt="Plotting Property Image">
                            <div class="promo-badge">Plotting Project</div>
                        </div>
                            <div class="property-info">
                                <h3 class="property-title">
                                    <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="property-meta">
                                    <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['6'];?></span>
                                    <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $row['5']; ?></span>
                                </div>
                                <div class="property-meta">
                                    <span class="total-units card-location1">Land Area : <?php echo $row['4']; ?></span>
                                    
                                </div> 
                                <div class="button-container">
                                    <!-- "Know More" button -->
                                    <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                    <!-- WhatsApp Button -->
                                    <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>

                                    <!-- Call Button -->
                                    <a href="tel:+1234567890" class="btn-icon call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>


                                
                                <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                
                            </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end property cad acrousel -->





 <!-- property crad carousel -->
 <section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Best Sellers</h2>
        <p class="section-description">
        Explore our Best Sellers – the top choices trusted by customers for quality and value. Find your perfect fit among our most popular picks, crafted to meet every need!
        </p>
    </div>

</section>

<section id="project-card">
    <div class="card-container">
        <div class="card-items">
        <?php 
        // Query for fetching featured data from all three tables
        $queryResidential = mysqli_query($con, "SELECT * FROM residential_projects WHERE featured = 1");
        $queryCommercial = mysqli_query($con, "SELECT * FROM commercial_projects WHERE featured = 1");
        $queryPlotting = mysqli_query($con, "SELECT * FROM plotting_projects WHERE featured = 1");

        // Fetch and display residential featured projects
        while($row = mysqli_fetch_array($queryResidential)) {
        ?>
            <div class="card-entry">
                            <div class="overlay-black">
                                <img src="admin/property/<?php echo $row['9'];?>" alt="Residential Property Image">
                                <div class="promo-badge">Residential Projects</div>
                                </div>
                            <div class="property-info">
                                <h3 class="property-title">
                                    <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="property-meta">
                                    <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>
                                    <span class="land-area card-location"><i class="fa-solid fa-building" style="color: #a8894d;"></i> <?php echo $row['5']; ?>Towers</span>

                                    
                                </div>
                                <div class="property-meta">
                                    <span class="total-units card-location1">Total Units: <?php echo $row['total_units']; ?></span>
                                    
                                </div>
                                <div class="button-container">
                                    <!-- "Know More" button -->
                                    <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                    <!-- WhatsApp Button -->
                                    <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>

                                    <!-- Call Button -->
                                    <a href="tel:+1234567890" class="btn-icon call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>


                                
                                <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                
                            </div>
            </div>
            <?php } ?>

            <?php 
            // Fetch and display commercial featured projects
            while($row = mysqli_fetch_array($queryCommercial)) {
            ?>

            <div class="card-entry">
                            <div class="overlay-black">
                                <img src="admin/property/<?php echo $row['17'];?>" alt="Residential Property Image">
                                <div class="promo-badge">Commercial Projects</div>
                                </div>
                            <div class="property-info">
                                <h3 class="property-title">
                                    <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="property-meta">
                                    <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['8'];?></span>
                                    <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>

                                    
                                </div>
                                <div class="property-meta">
                                    <span class="total-units card-location1">Typology : <?php echo $row['5']; ?></span>
                                    
                                </div>  
                                <div class="button-container">
                                    <!-- "Know More" button -->
                                    <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                    <!-- WhatsApp Button -->
                                    <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>

                                    <!-- Call Button -->
                                    <a href="tel:+1234567890" class="btn-icon call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>


                                
                                <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                
                            </div>
            </div>
            <?php } ?>

            <?php 
            // Fetch and display plotting featured projects
            while($row = mysqli_fetch_array($queryPlotting)) {
            ?>

            <div class="card-entry">
                        <div class="overlay-black">
                            <img src="admin/property/<?php echo $row['13']; ?>" alt="Plotting Property Image">
                            <div class="promo-badge">Plotting Project</div>
                        </div>
                            <div class="property-info">
                                <h3 class="property-title">
                                    <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="property-meta">
                                    <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['6'];?></span>
                                    <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $row['5']; ?></span>
                                </div>
                                <div class="property-meta">
                                    <span class="total-units card-location1">Land Area : <?php echo $row['4']; ?></span>
                                    
                                </div> 
                                <div class="button-container">
                                    <!-- "Know More" button -->
                                    <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                    <!-- WhatsApp Button -->
                                    <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>

                                    <!-- Call Button -->
                                    <a href="tel:+1234567890" class="btn-icon call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>


                                
                                <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                
                            </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end property cad acrousel -->

 <!-- call to action -->
 <section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p style ="text-align:center;">Knowhere: Your Trusted Path to Dream Homes</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
  <!-- end call to action -->

 <!-- property crad carousel -->
 <section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Best ROI Investment</h2>
        <p class="section-description">
        Unlock top-performing investments with our Best ROI picks, designed to maximize returns and secure your financial future. Discover smart opportunities tailored for growth and stability!
        </p>
    </div>

</section>

<section id="project-card">
    <div class="card-container">
        <div class="card-items">
        <?php 
        // Query for fetching featured data from all three tables
        $queryCommercial = mysqli_query($con, "SELECT * FROM commercial_projects");
        $queryPlotting = mysqli_query($con, "SELECT * FROM plotting_projects");

        
            // Fetch and displ ay commercial featured projects
            while($row = mysqli_fetch_array($queryCommercial)) {
            ?>

            <div class="card-entry">
                            <div class="overlay-black">
                                <img src="admin/property/<?php echo $row['17'];?>" alt="Residential Property Image">
                                <div class="promo-badge">Commercial Projects</div>
                                </div>
                            <div class="property-info">
                                <h3 class="property-title">
                                    <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="property-meta">
                                    <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['8'];?></span>
                                    <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>

                                    
                                </div>
                                <div class="property-meta">
                                    <span class="total-units card-location1">Typology : <?php echo $row['5']; ?></span>
                                    
                                </div>  
                                <div class="button-container">
                                    <!-- "Know More" button -->
                                    <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                    <!-- WhatsApp Button -->
                                    <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>

                                    <!-- Call Button -->
                                    <a href="tel:+1234567890" class="btn-icon call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>


                                
                                <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                
                            </div>
            </div>
            <?php } ?>

            <?php 
            // Fetch and display plotting featured projects
            while($row = mysqli_fetch_array($queryPlotting)) {
            ?>

            <div class="card-entry">
                        <div class="overlay-black">
                            <img src="admin/property/<?php echo $row['13']; ?>" alt="Plotting Property Image">
                            <div class="promo-badge">Plotting Project</div>
                        </div>
                            <div class="property-info">
                                <h3 class="property-title">
                                    <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="property-meta">
                                    <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['6'];?></span>
                                    <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $row['5']; ?></span>
                                </div>
                                <div class="property-meta">
                                    <span class="total-units card-location1">Land Area : <?php echo $row['4']; ?></span>
                                    
                                </div> 
                                <div class="button-container">
                                    <!-- "Know More" button -->
                                    <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                    <!-- WhatsApp Button -->
                                    <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>

                                    <!-- Call Button -->
                                    <a href="tel:+1234567890" class="btn-icon call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>


                                
                                <!-- <a href="propertydetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">VIEW MORE</a> -->
                                
                            </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- end property cad acrousel -->



 <!-- blog -->

 
<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title">Blog & News</h2>
        <p class="section-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.
        </p>
    </div>

</section>
<section id="blogs">
    <section class="blog-carousel">
        <div class="carousel-container">
            <div class="carousel-track">
                <div class="blog-card">
                    <img src="./images/blog1.jpg" alt="Blog Image 1">
                    <h3>‘Best beach in Australia’ to shake QLD coastal records</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <a href="#" class="read-link">Read More →</a>
                </div>
                <div class="blog-card">
                    <img src="./images/blog2.jpg" alt="Blog Image 2">
                    <h3>Burnt house in shocking condition gets the top price</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <a href="#" class="read-link">Read More →</a>
                </div>
                <div class="blog-card">
                    <img src="./images/blog3.jpg" alt="Blog Image 3">
                    <h3>QLD’s hoarder house attracts 39 registered bidders</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <a href="#" class="read-link">Read More →</a>
                </div>
            </div>
        </div>
    </section>
</section>


    
 <!-- end blog -->

 <!-- get in touch -->


 <section class="contact-section">
    <div class="contact-container">
        <div class="form-container">
            <form style="text-align:center">
                <div class="input-group" style="width:102%">
                    <input type="text" name="first-name" placeholder="First Name" required>
                    <input type="text" name="last-name" placeholder="Last Name" required>
                </div>
                <input type="email" name="email" placeholder="Email" required class="email-group">
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit" style="margin-top:30px">SEND MESSAGE</button>
            </form>
        </div>
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>Ready to make your real estate dreams a reality? Get in touch with Knowhere for trusted guidance, tailored solutions, and a seamless property experience.</p>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> Wakad, Pimpri-Chinchwad, Maharashtra 411057</li>
                <li><i class="fas fa-envelope"></i> example@mail.com</li>
                <li><i class="fas fa-phone-alt"></i>+91 91122 11291</li>
                <!-- <li><i class="fas fa-clock"></i> 07.00 AM - 23.00 PM</li> -->
            </ul>
        </div>
    </div>
</section>


 <!-- end get iin touch -->




 <!-- Enquire Button -->
<div id="enquireButtonContainer">
    <button id="enquireButton">
        Book A Demo
    </button>
</div>

<!-- Enquiry Modal -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "T0yb7stlayE2PO5Hv",
      });
   })();
</script>

<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: 8px;">
        <span id="closeModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Enquiry Form</h3>
        
        <!-- Feedback Message -->
        <div id="feedbackMessage" style="color: #007bff; font-size: 14px; margin-bottom: 10px; display: none;"></div>
        
        <form id="enquiryForm" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="contact" placeholder="Your Contact Number" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<script>
// Show modal
document.getElementById("enquireButton").onclick = function() {
    document.getElementById("enquiryModal").style.display = "block";
};

// Hide modal
document.getElementById("closeModal").onclick = function() {
    document.getElementById("enquiryModal").style.display = "none";
    document.getElementById("feedbackMessage").style.display = "none"; // Hide feedback on close
};

// Form submission
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('enquiryForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const name = this.name.value;
            const email = this.email.value;
            const phone = this.contact.value;
            const message = this.message.value;

            const templateParams = {
                to_name: 'attendancedigitalizetheglobe@gmail.com', // Replace with the recipient's email
                from_name: name,
                user_email: email,
                user_number: phone,
                message: message
            };

            emailjs.send("service_whdabtl", "template_fufrp06", templateParams)
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);
                    alert('Email sent successfully!');
                    document.getElementById("enquiryModal").style.display = "none"; // Close modal on success
                }, function(error) {
                    console.log('FAILED...', error);
                    alert('Error sending email. Please try again.');
                });
        });
    } else {
        console.warn("enquiryForm element not found.");
    }
});
</script>
<!-- end enquirty -->


 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
