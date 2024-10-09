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

        <link rel="stylesheet" href="css/knowpropertydetail.css">
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
        <div class="banner" >
            <div class="banner-content">
                <h2>Property List</h2>
                <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Services</a></p>
            </div>
        </div>
    </section>

    <!--end banner  -->


    <!-- property -->
    <section class="property-container">

        <?php
		    $id=$_REQUEST['pid']; 
		    $query=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
		    while($row=mysqli_fetch_array($query))
		    {
		 ?>

    
            <div class="row" style="width: 700px;">

                <!-- Left-side Image Gallery -->
                <div class="col-md-4 col-sm-12 image-gallery">
                    <div class="gallery-image"><img src="admin/property/<?php echo $row['18'];?>" alt="Property Image 1"></div>
                    <div class="gallery-image"><img src="admin/property/<?php echo $row['19'];?>" alt="Property Image 2"></div>
                    <div class="gallery-image"><img src="admin/property/<?php echo $row['20'];?>" alt="Property Image 3"></div>
                    <div class="gallery-image"><img src="admin/property/<?php echo $row['21'];?>" alt="Property Image 4"></div>
                </div>

                <!-- Right-side Main Image -->
                <div class="col-md-8 col-sm-12 main-image">
                    <img src="admin/property/<?php echo $row['22'];?>" alt="Main Property Image">
                    <!-- <div class="play-button">▶</div> -->
                </div>
            </div>

            <!-- Right-side Property Details -->
            <div class="property-details" style="width: 500px;">
                <div class="details">
                    <h1><?php echo $row['1'];?></h1>
                    <p><?php echo $row['2'];?></p>

                    <!-- Specifications Section -->
                    <!-- Specifications Section -->
                    <div class="specifications">
                        <h3 class="fontspecification">Specification</h3>
                        <ul class="specification-list">
                            <li>📍 <?php echo $row['14'];?></li>
                            <li>🏠 <?php echo $row['12'];?> sq ft</li>
                            <li>🛏️ <?php echo $row['6'];?> Bedrooms</li>
                            <li>🛁 <?php echo $row['7'];?> Bathrooms</li>
                        </ul>
                    </div>

                    <!-- Facilities Section -->
                    <div class="specifications">
                        <h3 class="fontspecification">Facility</h3>
                        <ul class="specification-list">
                            <li>🌐 Full WiFi</li>
                            <li>🏀 Basket Court</li>
                            <li>🏊 Swimming Pool</li>
                            <li>🚗 Garage</li>
                        </ul>
                    </div>

                    <!-- Price Section -->
                    <div class="price">
                    <h3>Price</h3>
                    <p class="price-value">$500,000</p>
                    </div>
                    <button class="book-tour">Book Tour</button>
                        </div>
            </div>
        <?php } ?>


    </section>

    <!-- end property -->

    <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->

    </body>
    </html>