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







<!-- SwiperJS CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">








</head>
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->

 <!-- banner -->
<section id="hero-main">
    <section class="hero-section1" data-animate="fadeInUp">
        <div class="content1">
            <h1 class="banner-heading">The Keys to Your Home</h1>
            <p class="banner-para">Welcome to Knowhere, your trusted property consultant.</p>
            <form id="propertySearchForm" action="prolist1.php" method="GET" class="property-search-bar">
                <div class="property-input-group">
                    <input type="text" name="city" id="city" placeholder="Enter city" class="property-input">
                </div>

                <div class="property-input-group ">
                    <input type="text" name="location" id="location" placeholder="Enter location" class="property-input">
                </div>

                <div class="property-select-group " >
                    <select name="project_type" id="projectType" class="property-select" onchange="updateSubtypeOptions()" style="padding:11px;">
                        <option value="">Select Project Type</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="plotting">Plotting</option>
                    </select>
                </div>

                <div class="property-select-group ">
                    <select name="project_subtype" id="projectSubtype" class="property-select" style="padding:11px;">
                        <option value="">Select Project Subtype</option>
                    </select>
                </div>

                <div class="property-input-group ">
                    <input type="number" name="budget" id="budget" placeholder="Enter maximum budget" class="property-input">
                </div>

                <div class="property-submit-group">
                    <button type="submit" class="property-search-btn">
                        
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </form>




                <script>
                    function updateSubtypeOptions() {
                        const projectType = document.getElementById('projectType').value;
                        const subtypeDropdown = document.getElementById('projectSubtype');
                        subtypeDropdown.innerHTML = ''; // Clear previous options

                        const residentialOptions = [
                            { value: 'Select  Subtype', text: 'Select  Subtype' },
                            { value: '1 BHK', text: '1 BHK' },
                            { value: '2 BHK', text: '2 BHK' },
                            { value: '3 BHK', text: '3 BHK' },
                            { value: '4 BHK', text: '4 BHK' },
                            { value: '5 BHK', text: '5 BHK' },
                            { value: '2.5 BHK', text: '2.5 BHK' }
                        ];

                        const commercialOptions = [
                            { value: 'Select  Subtype', text: 'Select  Subtype' },
                            { value: 'Shop', text: 'Shop' },
                            { value: 'Office', text: 'Office' },
                            { value: 'Restaurant', text: 'Restaurant' },
                            { value: 'Studio', text: 'Studio' }
                        ];

                        const plottingOptions = [
                            { value: 'Select  Subtype', text: 'Select  Subtype' },
                            { value: 'N/A Non Agriculturer', text: 'Non Agriculture' },
                            { value: 'Commercial', text: 'Commercial' },
                            { value: 'R Zone Residential', text: 'R Zone Residential' },
                            { value: 'Farm Land', text: 'Farm Land' },
                            { value: 'Industrial', text: 'Industrial' }
                        ];

                        let options = [];
                        if (projectType === 'residential') options = residentialOptions;
                        else if (projectType === 'commercial') options = commercialOptions;
                        else if (projectType === 'plotting') options = plottingOptions;

                        options.forEach(option => {
                            const opt = document.createElement('option');
                            opt.value = option.value;
                            opt.textContent = option.text;
                            subtypeDropdown.appendChild(opt);
                        });
                    }
                </script>


            <!-- Navigation Buttons -->
            <button class="slider-btn prev" onclick="prevSlide()">&#10094;</button>
            <button class="slider-btn next" onclick="nextSlide()">&#10095;</button>

            <script>
                let slideIndex = 0;
                const images = [
                    "./images/banner/knowhere_banner-01.jpg",
                    "./images/banner/knowhere_banner-02.jpg",
                    "./images/banner/knowhere_banner-03.jpg"
                ];

                function showSlide(index) {
                    const heroSection = document.querySelector('.hero-section1');
                    heroSection.style.backgroundImage = `url('${images[index]}')`;
                }

                function nextSlide() {
                    slideIndex = (slideIndex + 1) % images.length;
                    showSlide(slideIndex);
                }

                function prevSlide() {
                    slideIndex = (slideIndex - 1 + images.length) % images.length;
                    showSlide(slideIndex);
                }

                // Automatic slide every 5 seconds
                setInterval(nextSlide, 5000);

                // Initialize first image
                showSlide(slideIndex);
            </script>

                
        </div>
    </section>
</section>

<!--end banner  -->


<!-- services -->
<section id="service-home">
    <div class="wrapper">
        <div class="container-service">
            
            <div class="logo">
                <img src="./images/service/s1.png" alt="Building Logo 1">
                <p>Home Loan</p>
            </div>
            <div class="logo">
                <img src="./images/service/s2.png" alt="Building Logo 2">
                <p>Interior</p>
            </div>
            <div class="logo">
                <img src="./images/service/s4.png" alt="Building Logo 3">
                <p>Rent Agreement</p>
            </div>
            <div class="logo">
                <img src="./images/service/s5.png" alt="Building Logo 4">
                <p>Sale Or Rent</p>
            </div>
            <div class="logo">
                <img src="./images/service/s6.png" alt="Building Logo 5">
                <p>Construction</p>
            </div>
            <div class="logo">
                <img src="./images/service/s7.png" alt="Building Logo 6">
                <p>Home Service</p>
            </div>
            <div class="logo">
                <img src="./images/service/s8.png" alt="Building Logo 7">
                <p>Digital Marketing</p>
            </div>
            <div class="logo">
                <img src="./images/service/s9.png" alt="Building Logo 8">
                <p>Bamboo Products</p>
            </div>
        </div>
    </div>
</section>


<script>
    const container = document.querySelector('.container-service');
    let isHovered = false;

    // Function to scroll the icons one by one
    function scrollIcons() {
        if (!isHovered) {
            const firstIcon = container.firstElementChild; // Get the first icon
            container.appendChild(firstIcon); // Move the first icon to the end
        }
    }

    // Set interval to scroll every 10 seconds
    const scrollInterval = setInterval(scrollIcons, 4000);

    // Stop scrolling on hover
    container.addEventListener('mouseenter', () => {
        isHovered = true;
    });

    // Resume scrolling when hover ends
    container.addEventListener('mouseleave', () => {
        isHovered = false;
    });
</script>




 <!--end  services -->


<!-- explore cities -->


<section class="project-section">
    <div class="content-wrapper" id="contentWrapper">
        <h2 class="section-title animate-up">Find Projects In Our City</h2>
        <p class="section-description animate-up" style="max-width:1100px;">
        Find the perfect residential and commercial projects in your favorite city. 
        </p>
    </div>


</section>
<section>
    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="pune.php" class="city-link">
                    <div class="cities">
                        <img src="./images/cities/pune.png" alt="Ready to Move">
                        <div class="cities-overlay">Pune</div>
                    </div>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="mumbai.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/mumbai1.jpg" alt="Under Construction">
                        <div class="cities-overlay">Mumbai</div>
                    </div>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="bangalore.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/banglore.png" alt="New Launch">
                        <div class="cities-overlay">Bangalore</div>
                    </div>
                </a>
            </div>
            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="nagpur.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/nagpur.jpeg" alt="Affordable Housing">
                        <div class="cities-overlay">Nagpur</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="hyderabad.php" class="city-link">
                    <div class="cities">
                        <img src="./images/cities/hyderabad.png" alt="Ready to Move">
                        <div class="cities-overlay">Hyderabad</div>
                    </div>
                </a>
            </div>
            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="goa.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/goa.png" alt="Under Construction">
                        <div class="cities-overlay">Goa</div>
                    </div>
                </a>
            </div>
            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="delhi-ncr.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/delhi.pn.avif" alt="New Launch">
                        <div class="cities-overlay">Delhi-NCR</div>
                    </div>
                </a>
            </div>
            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-md-3">
                <a href="ahmedabad.php" class="city-link">
                    <div class="cities">
                        <img src="images/cities/ahmedabad.jpg" alt="Affordable Housing">
                        <div class="cities-overlay">Ahmedabad</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- end explore cities  -->










 <!-- property type  -->

<section class="project-section">
    <div class="content-wrapper" id="contentWrapper">
        <h2 class="section-title animate-up">Explore Properties</h2>
        <p class="section-description animate-up">
            At Knowhere, we offer a comprehensive range of real estate services to cater to the
            diverse needs of our clients. Our services include. 
        </p>
    </div>


</section>
<section class="property-section">
    <div class="property-container">
        <div class="property-card1 property-card-small property-info1 animate-up">
            <img src="./images/residential_property.png" alt="Property 1">
            <div class="property-overlay">
                <div class="property-details1">
                    <a href="residential.php" style="text-decoration:none;">
                        <h2 class="property-type-detail">Residential Projects</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="property-card2 property-card-small property-info1 animate-up">
            <img src="./images/commercial_property.png" alt="Property 2">
            <div class="property-overlay">
                <div class="property-details1">
                    <a href="commercial.php" style="text-decoration:none;">
                        <h2 class="property-type-detail">Commercial Projects</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="property-card3 property-card-small property-info1 animate-up">
            <img src="./images/plotting_property.png" alt="Property 3">
            <div class="property-overlay">
                <div class="property-details1">
                    <a href="plotting.php" style="text-decoration:none;">
                        <h2 class="property-type-detail">Plots/ Villas Projects</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- end property type -->




<!-- real estate  -->
<section id="real-estate">
    <div class="container-real">
        <div class="featured-project animate-left">
            <div class="project-details animate-left">
                <h3>Featured Project</h3>
                <p>Discover Your Dream Property, Tailored to Your Lifestyle!.</p>
                <a href="properties.php" class="see-more-btn">View Projects</a>
            </div>
        </div>
        <div class="main-content animate-right">
            <h1>Your Dream project Starts  with Knowhere</h1>
            <p>At Knowhere, we understand that buying or selling a property can be a daunting task. That&#39;s why we strive to make the process as smooth and stress-free as possible. We have a team of highly experienced professionals who are dedicated to providing you with personalized solutions that cater to your unique needs.</p>
            <p>Our expertise lies in providing end-to-end real estate services, including property search, legal documentation, property valuation, and much more. We work closely with our clients to understand their requirements and offer them customized solutions that are tailored to their needs.</p>
            <a href="about.php" class="view-projects-btn">Read More</a>
        </div>
    </div>
</section>



<!--end real esatte  -->




 <!-- property crad carousel -->
 <section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title animate-up">Our Projects</h2>
        <p class="section-description animate-up">
            Welcome to Knowhere, your trusted property consultant. We are committed to providing you with
            exceptional services and helping you find your dream home.
        </p>
    </div>

</section>

<section id="project-card">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php 
                // Query for fetching residential, commercial, and plotting data
                $queryResidential = mysqli_query($con, "SELECT * FROM residential_projects");
                $queryCommercial = mysqli_query($con, "SELECT * FROM commercial_projects");
                $queryPlotting = mysqli_query($con, "SELECT * FROM plotting_projects");

                // Fetch and display residential projects
                while($row = mysqli_fetch_array($queryResidential)) {
                ?>
                    <div class="swiper-slide">
                        <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                            <div class="card-entry">
                                    <div class="overlay-black">
                                        <img src="admin/property/<?php echo $row['9'];?>" alt="Residential Property Image">
                                        <div class="promo-badge">Residential Projects</div>
                                    </div>
                                    <div class="property-info">
                                        <h3 class="property-title">
                                            <a href="Prodetail.php?pid=<?php echo $row['0']; ?>">
                                                <?php echo $row['1']; ?>
                                            </a>
                                        </h3>
                                        <div class="property-meta">
                                            <span class="location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                            <span class="land-area location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?> </span>
                                            <span class="towers location"><i class="fa-solid fa-building"></i> <?php echo $row['5']; ?> Towers</span>
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units location">Total Units: <?php echo $row['total_units']; ?></span>
                                        </div>
                                        <div class="button-container">
                                            <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>
                                            <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:+1234567890" class="btn-icon call-btn">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>


                <?php
                while($row = mysqli_fetch_array($queryCommercial)) {
                ?>
                        <div class="swiper-slide">
                            <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                                <div class="card-entry">
                                                <div class="overlay-black">
                                                    <img src="admin/property/<?php echo $row['15'];?>" alt="Residential Property Image">
                                                    <div class="promo-badge">Commercial Projects</div>
                                                    </div>
                                                <div class="property-info">
                                                    <h3 class="property-title">
                                                        <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                                            <?php echo $row['1']; ?>
                                                        </a>
                                                    </h3>
                                                    <div class="property-meta">
                                                        <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['8'];?></span>
                                                        <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                                        <span class="land-area location card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>

                                                        
                                                    </div>
                                                    <div class="property-meta">
                                                        <span class="total-units location card-location1">Typology : <?php echo $row['5']; ?></span>
                                                        
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
                            </a>
                        </div>
                <?php } ?>


                <?php
                while($row = mysqli_fetch_array($queryPlotting)) {
                ?>
                        <div class="swiper-slide">
                            <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                                <div class="card-entry">
                                            <div class="overlay-black">
                                                <img src="admin/property/<?php echo $row['13']; ?>" alt="Plotting Property Image">
                                                <div class="promo-badge">Plotting Project</div>
                                            </div>
                                                <div class="property-info">
                                                    <h3 class="property-title">
                                                        <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                                            <?php echo $row['1']; ?>
                                                        </a>
                                                    </h3>
                                                    <div class="property-meta">
                                                        <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['6'];?></span>
                                                        <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                                        <span class="land-area location card-location"><i class="fas fa-vector-square"></i> <?php echo $row['5']; ?></span>
                                                    </div>
                                                    <div class="property-meta">
                                                        <span class="total-units location card-location1">Land Area : <?php echo $row['4']; ?></span>
                                                        
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
                            </a>
                        </div>
                <?php } ?>
            </div>
        </div>
</section>

<!-- SwiperJS Script -->

<!-- <script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,          
    autoplay: {
      delay: 1000,       
      disableOnInteraction: false, 
    },
    slidesPerView: 3,    
    spaceBetween: 20,    
    centeredSlides: true, 
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Pause slider on hover
  document.querySelector(".swiper").addEventListener("mouseenter", function () {
    swiper.autoplay.stop();
  });

  // Resume slider on mouse leave
  document.querySelector(".swiper").addEventListener("mouseleave", function () {
    swiper.autoplay.start();
  });
</script> -->


<!-- end property cad acrousel -->





 <!-- property crad carousel -->
 <section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title animate-up">Best Sellers</h2>
        <p class="section-description animate-up">
        Explore our Best Sellers – the top choices trusted by customers for quality and value. Find your perfect fit among our most popular picks, crafted to meet every need!
        </p>
    </div>

</section>

<section id="project-card">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php 
                // Query for fetching residential, commercial, and plotting data
                $queryResidential = mysqli_query($con, "SELECT * FROM residential_projects WHERE featured = 1");
                $queryCommercial = mysqli_query($con, "SELECT * FROM commercial_projects WHERE featured = 1");
                $queryPlotting = mysqli_query($con, "SELECT * FROM plotting_projects WHERE featured = 1");

                // Fetch and display residential projects
                while($row = mysqli_fetch_array($queryResidential)) {
                ?>
                    <div class="swiper-slide">
                        <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                            <div class="card-entry">
                                    <div class="overlay-black">
                                        <img src="admin/property/<?php echo $row['9'];?>" alt="Residential Property Image">
                                        <div class="promo-badge">Residential Projects</div>
                                    </div>
                                    <div class="property-info">
                                        <h3 class="property-title">
                                            <a href="Prodetail.php?pid=<?php echo $row['0']; ?>">
                                                <?php echo $row['1']; ?>
                                            </a>
                                        </h3>
                                        <div class="property-meta">
                                            <span class="location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                            <span class="land-area location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?> </span>
                                            <span class="towers location"><i class="fa-solid fa-building"></i> <?php echo $row['5']; ?> Towers</span>
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units location">Total Units: <?php echo $row['total_units']; ?></span>
                                        </div>
                                        <div class="button-container">
                                            <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>
                                            <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:+1234567890" class="btn-icon call-btn">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>


                <?php
                while($row = mysqli_fetch_array($queryCommercial)) {
                ?>
                        <div class="swiper-slide">
                            <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                                <div class="card-entry">
                                                <div class="overlay-black">
                                                    <img src="admin/property/<?php echo $row['15'];?>" alt="Residential Property Image">
                                                    <div class="promo-badge">Commercial Projects</div>
                                                    </div>
                                                <div class="property-info">
                                                    <h3 class="property-title">
                                                        <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                                            <?php echo $row['1']; ?>
                                                        </a>
                                                    </h3>
                                                    <div class="property-meta">
                                                        <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['8'];?></span>
                                                        <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                                        <span class="land-area location card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>

                                                        
                                                    </div>
                                                    <div class="property-meta">
                                                        <span class="total-units location card-location1">Typology : <?php echo $row['5']; ?></span>
                                                        
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
                            </a>
                        </div>
                <?php } ?>


                <?php
                while($row = mysqli_fetch_array($queryPlotting)) {
                ?>
                        <div class="swiper-slide">
                            <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="card-link">
                                <div class="card-entry">
                                            <div class="overlay-black">
                                                <img src="admin/property/<?php echo $row['13']; ?>" alt="Plotting Property Image">
                                                <div class="promo-badge">Plotting Project</div>
                                            </div>
                                                <div class="property-info">
                                                    <h3 class="property-title">
                                                        <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="property-title">
                                                            <?php echo $row['1']; ?>
                                                        </a>
                                                    </h3>
                                                    <div class="property-meta">
                                                        <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['6'];?></span>
                                                        <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                                        <span class="land-area location card-location"><i class="fas fa-vector-square"></i> <?php echo $row['5']; ?></span>
                                                    </div>
                                                    <div class="property-meta">
                                                        <span class="total-units location card-location1">Land Area : <?php echo $row['4']; ?></span>
                                                        
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
                            </a>
                        </div>
                <?php } ?>
            </div>
        </div>
</section>

<!-- SwiperJS Script -->


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,          
    autoplay: {
        delay: 2000,       
        disableOnInteraction: false, 
    },
    slidesPerView: 3,    
    spaceBetween: 20,    
    centeredSlides: true, 
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    });

    // Pause autoplay when hovering over a slide
    document.querySelectorAll(".swiper-slide").forEach((slide) => {
        slide.addEventListener("mouseenter", function () {
            swiper.autoplay.stop();
        });

        slide.addEventListener("mouseleave", function () {
            swiper.autoplay.start();
        });
    });
</script>




<!-- end property cad acrousel -->



 <!-- property crad carousel roi investment -->



<!-- end property cad acrousel -->



 <!-- blog -->

 
<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title animate-up">Blog & News</h2>
        <p class="section-description animate-up">
        Explore our Blog & News section for the latest updates, trends, and expert insights in real estate. Stay informed to make the best decisions for your property journey.       </p>
    </div>

</section>





<?php
// Include the database connection file
include('config.php');

// Initialize the $result variable
$result = null;

// Query to fetch the latest 3 blogs from the database
$query = "SELECT * FROM blogs ORDER BY created_at DESC LIMIT 3";
$result = mysqli_query($con, $query);

// Check if the query executed successfully
if (!$result) {
    echo "<p>Error: " . mysqli_error($con) . "</p>";
}
?>

<section id="blogs">
        <section class="blog-carousel">
            <div class="carousel-container">
                <div class="carousel-track">
                    <?php
                    // Check if there are any blog posts fetched from the database
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Display each blog as a card
                            ?>
                            <div class="blog-card" >
                            <a href="blog_detail.php?id=<?php echo $row['id']; ?>" class="read-link"><img src="./admin/property/<?php echo $row['image']; ?>" alt="Blog Image" /></a>
                            <a href="blog_detail.php?id=<?php echo $row['id']; ?>" class="read-link"><h3><?php echo $row['title']; ?></h3></a       >
                                <!-- <p><?php echo substr($row['content'], 0, 100); ?>...</p> -->
                                <a href="blog_detail.php?id=<?php echo $row['id']; ?>" class="read-link">Read More →</a>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p>No blogs found.</p>";
                    }
                    ?>
                </div>
            </div>
        </section>
</section>







    
 <!-- end blog -->

 <!-- get in touch -->


 <section class="contact-section">
    <div class="contact-container">
        <div class="form-container">
            <form id="contactForm" style="text-align:center">
                <input type="text" name="name" placeholder="Name *" required>
                <input type="text" name="contact" placeholder="Phone Number *" required>
                <input type="email" name="email" placeholder="Email *" required class="email-group">
                <textarea name="message" placeholder="Message *" required></textarea>
                <button type="submit" style="margin-top:30px">SEND MESSAGE</button>
            </form>
        </div>

    <!-- Thank You Modal -->
    <div id="thankYouModal" style="display:none; position:fixed; top:20%; left:50%; transform:translate(-50%, -50%); background:#d4edda; padding:20px; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.2); z-index:1000;">
        <span id="closeThankYouModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Thank You!</h3>
        <p style="text-align: left; color: #050f17; font-size: 14px; font-family: 'Lexend', Sans-serif; max-width: 700px;">
            Thank you for your interest. We will get back to you soon.
        </p>
    </div>

            <script>
                        document.getElementById("contactForm").onsubmit = function(event) {
                    event.preventDefault(); // Prevent default form submission

                    const formData = new FormData(this);

                    fetch("submit_form.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        console.log("Response from server:", data); // Debugging response

                        // Handle success response
                        if (data.includes("Form submitted successfully!")) {
                            // Close the form and show the Thank You modal
                            document.getElementById("contactForm").reset();  // Reset the form fields
                            document.getElementById("thankYouModal").style.display = "block";
                        } else {
                            alert("Failed to submit the form. Please try again.");
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        alert("An error occurred while submitting the form.");
                    });
                };

                // Close Thank You modal and reset the form
                document.getElementById("closeThankYouModal").onclick = function() {
                    document.getElementById("thankYouModal").style.display = "none";
                    document.getElementById("contactForm").reset(); // Reset the form when closing the modal
                };

        </script>
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>Ready to make your real estate dreams a reality? Get in touch with Knowhere for trusted guidance, tailored solutions, and a seamless property experience.</p>
            <ul>
            <li style="color:#fff;">
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://maps.app.goo.gl/2Sxk7Gus97hJMNT7A" target="_blank" style="color:#fff; text-decoration:none;">
                &nbsp; Wakad, Pimpri-Chinchwad, Pune 411057
                </a>
            </li>
                <li><a href="mailto:info@knowhere.in" style="color:#fff; text-decoration:none;"><i class="fas fa-envelope"></i>&nbsp;&nbsp; info@knowhere.in </a></li>
                <li> <a href="tel:+919112211291" style="color:#fff; text-decoration:none;"><i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;+91 91122 11291</a></li>
                <!-- <li><i class="fas fa-clock"></i> 07.00 AM - 23.00 PM</li> -->
            </ul>
        </div>
    </div>
</section>


 <!-- end get iin touch -->






<!-- Enquire Button -->
<div id="enquireButtonContainer">
    <button id="enquireButton">Book A Demo</button>
</div>

<!-- Enquiry Modal -->
<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: px;">
        <span id="closeModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Enquiry Form</h3>
        <form id="enquiryForm">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <input type="text" name="contact" id="contact" placeholder="Your Contact Number" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number">
            <textarea name="message" id="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<!-- Thank You Modal -->
<div id="thankYouModal" style="display:none; position:fixed; top:25%; left:50%; transform:translate(-50%, -50%); background:#d4edda; padding:20px; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.2); z-index:1000;">
    <span id="closeThankYouModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
    <h3>Thank You!</h3>
    <p style="     text-align: left;
    color: #050f17;
    font-size: 14px;
    font-family: "Lexend", Sans-serif;
    max-width: 700px;">Thank you for your interest. We will get back to you soon.</p>
    <!-- <button type="button" id="closeThankYouModal">Close</button> -->
</div>

<script>
    // Show enquiry modal
    document.getElementById("enquireButton").onclick = function() {
        document.getElementById("enquiryModal").style.display = "block";
    };
    // Hide enquiry modal
    document.getElementById("closeModal").onclick = function() {
        document.getElementById("enquiryModal").style.display = "none";
    };

    // Hide thank you modal and reload page
    document.getElementById("closeThankYouModal").onclick = function() {
        document.getElementById("thankYouModal").style.display = "none";
        location.reload(); // Reload the page
    };

    // Form submission using AJAX
    document.getElementById("enquiryForm").onsubmit = function(event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);

        fetch("submit_form.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                console.log("Response from server:", data); // Debugging response

                // Handle success response
                if (data.includes("Form submitted successfully!")) {
                    // Close enquiry modal
                    document.getElementById("enquiryModal").style.display = "none";
                    // Show thank you modal
                    document.getElementById("thankYouModal").style.display = "block";
                } else {
                    alert("Failed to submit the form. Please try again.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred while submitting the form.");
            });
    };

</script>

<!-- end enquiry -->

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const section = document.querySelector("#hero-main");
        const heading = document.querySelector(".banner-heading");
        const paragraph = document.querySelector(".banner-para");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    heading.classList.add("animate");
                    paragraph.classList.add("animate");
                }
            });
        }, {
            threshold: 0.5 // Trigger when 50% of the section is visible
        });

        observer.observe(section);
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.animate-up');

        function handleScroll() {
            elements.forEach((el) => {
                const rect = el.getBoundingClientRect();
                const windowHeight = window.innerHeight;

                // Check if the element is in view
                if (rect.top <= windowHeight - 100 && rect.bottom >= 0) {
                    el.classList.add('visible');
                }
            });
        }

        // Add event listener for scroll
        window.addEventListener('scroll', handleScroll);

        // Trigger the check on page load
        handleScroll();
    });

</script>

<script>
   document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.animate-up');
    let delay = 0;

    function animateCardsSequentially() {
        cards.forEach((card, index) => {
            // Add visible class with a delay for each card
            setTimeout(() => {
                card.classList.add('visible');
            }, delay);
            delay += 500; // Increase delay by 4 seconds for the next card
        });
    }

    // Trigger animation once the section is visible
    function handleScroll() {
        const section = document.querySelector('.property-section');
        const rect = section.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top <= windowHeight && rect.bottom >= 0) {
            animateCardsSequentially();
            window.removeEventListener('scroll', handleScroll); // Remove listener after triggering
        }
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
});


</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select the elements to animate
        const featuredProject = document.querySelector(".featured-project");
        const projectDetails = document.querySelector(".project-details");
        const mainContent = document.querySelector(".main-content");
        const mainContentH1 = document.querySelector(".main-content h1");
        const mainContentP = document.querySelector(".main-content p");
        const mainContentBtn = document.querySelector(".view-projects-btn");

        // Function to add animation classes
        function addAnimation(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target === featuredProject) {
                        featuredProject.classList.add("fade-in-left");
                    }
                    if (entry.target === projectDetails) {
                        projectDetails.classList.add("fade-in-left");
                    }
                    if (entry.target === mainContent) {
                        mainContentH1.classList.add("fade-in-right");
                        setTimeout(() => {
                            mainContentP.classList.add("fade-in-right");
                        }, 300); // Adjust delay
                        setTimeout(() => {
                            mainContentBtn.classList.add("fade-in-right");
                        }, 600); // Adjust delay
                    }
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        }

        // Create Intersection Observer
        const observer = new IntersectionObserver(addAnimation, {
            threshold: 0.1 // Adjust visibility threshold
        });

        // Observe the elements
        observer.observe(featuredProject);
        observer.observe(projectDetails);
        observer.observe(mainContent);
    });
</script>




 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
