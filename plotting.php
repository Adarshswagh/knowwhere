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
    <title>Property List</title>

    <link rel="stylesheet" href="css/knowproperties.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>'
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>
<body>

<!-- navbar -->
<?php include("include/header.php");?>
<!-- end navbar -->

<!-- banner -->
<section id="banner-main">
    <div class="banner">
        <div class="banner-content">
            <h2>Plotting Project</h2>
            <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Plotting</a></p>
        </div>
    </div>
</section>
<!--end banner -->

<!-- properties -->
<section id="properties">
    <div class="container">
        <!-- Left Section (Property Listings) -->
        <div class="left-section">
            <div class="row">

               

                <!-- Plotting Properties -->
                <!-- <h3>Plotting Properties</h3> -->
                <?php 
                    // Fetching plotting properties from the database
                    $plotting_query = mysqli_query($con, "SELECT * FROM `plotting_projects`");
                    while ($row = mysqli_fetch_array($plotting_query)) {
                ?>
                <div class="col-md-6 col-sm-10">
                    <div class="property-card">
                        <div class="overlay-black">
                            <img src="admin/property/<?php echo $row['13']; ?>" alt="Plotting Property Image">
                            <div class="promo-badge">Plotting Project</div>
                        </div>
                        <div class="property-info">
                            <h3 class="property-title">
                                <a href="propertydetail.php?pid=<?php echo $row['0']; ?>">
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
                                    <a href="Propertdetail.php?pid=<?php echo $row['0']; ?>" class="view-more-btn">Know More</a>

                                    <!-- WhatsApp Button -->
                                    <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>

                                    <!-- Call Button -->
                                    <a href="tel:+1234567890" class="btn-icon call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>
                                                    </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Right Section (Sticky Installment Calculator) -->
        <div class="right-section">
            <div class="sticky">
                <h3>Installment Calculator</h3>
                <form>
                    <label for="price">Property Price</label>
                    <input type="number" id="price" name="price" placeholder="$500,000">
                    
                    <label for="duration">Duration (Years)</label>
                    <input type="number" id="duration" name="duration" placeholder="30">
                    
                    <label for="interest">Interest Rate</label>
                    <input type="number" id="interest" name="interest" placeholder="3.5%">
                    
                    <button type="submit">Calculate Installment</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end properties -->

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
<?php include("include/footer.php");?>
<!-- end footer -->

</body>
</html>
