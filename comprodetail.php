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

    <link rel="stylesheet" href="css/comprodetail.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>'
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>
<body>

<!-- navbar -->
<?php include("include/header.php");?>
<!-- end navbar -->


<?php
         // Get the pid from the request
    $id = $_REQUEST['pid'];

    // Fetch from the residential_projects table
    $query = mysqli_query($con, "SELECT * FROM commercial_projects WHERE pid='$id'");

    // Check if any data is found
    if(mysqli_num_rows($query) > 0) {
        // Data found, fetch the row
        $row = mysqli_fetch_array($query);
        
       
        // You can now use $row and $unit_details as needed
    } else {
        // No data found in residential_projects
        echo "No project found with the given pid.";
        exit;
    }

        

        ?>
<!-- banner -->
<section id="banner-main">
    <div class="banner">
        <div class="banner-content">
            <h2> <?php echo $row['1']; ?></h2>
            <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Services</a></p>
        </div>
    </div>
</section>
<!--end banner -->


<!-- property detail -->
<section id="prodetail">


    
    <div class="container">
        <!-- Left Side: Property Content -->
        <div class="left-content">

       



        <div class="w3-content w3-section" style="max-width:100%; height :50p%;">
            <?php if (!empty($row['17'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['17']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['18'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['18']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['19'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['19']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['20'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['20']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['21'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['21']; ?>" style="width:100%">
            <?php endif; ?>
        </div>




            <!-- <div class="property-header">
                <button class="badge featured">Featured</button>
                <button class="badge for-sale">For Sale</button>
            </div> -->

            <h1 class="prodetail-heading">
                <?php echo htmlspecialchars($row['1']); ?>
                <span class="action-buttons">
                    <button id="compareButton" onclick="addToCompare()" class="icon-btn">
                        <i class="fa fa-heart"></i> Shortlist
                    </button>
                    <button id="shareButton" onclick="copyShareUrl()" class="icon-btn">
                        <i class="fa fa-share"></i> Share
                    </button>
                </span>
            </h1>            

                <div class="detail-item1">
                <h3 class="prodetail-heading3">Description :</h3>
                <p><?php echo $row['2']; ?></p>
                </div>
            
            <div class="property-details">
                <div class="detail-item">
                    <i class="fa-solid fa-map-pin" style="color: #a8894d; height:30px;"></i>
                    <p class="project-detail"><?php echo $row['3'];?></p>
                </div>
                <div class="divider"></div> <!-- Divider between the items -->
                <div class="detail-item">
                    <i class="fa-solid fa-house" style="color: #a8894d; height:30px;"></i>
                    <p><?php echo $row['4']; ?></p>
                </div>
            </div>

            <div class="property-details-section">
                <div class="properties-details">
                    <h3>Project Details :</h3>
                    <div class="detail-grid">
                        <div><strong class="field-title">Typology :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo $row['5']; ?></span></div>
                        <div><strong class="field-title">Typology Size :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo $row['7']; ?></span></div>
                        <div><strong class="field-title">Typology Price :</strong><span style="color:#A8894D; font-size:20px;"> <?php echo $row['8']; ?></span></div>
                        <div><strong class="field-title">Typology PSF :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo $row['15']; ?></span></div>
                        <div><strong class="field-title">Scheme :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo $row['6']; ?></span></div>
                        <div><strong class="field-title">ROI :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo $row['9']; ?></span></div>
                        <div><strong class="field-title">USP :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo $row['12']; ?></span></div>
                        <div><strong class="field-title">Possession :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo $row['16']; ?></span></div>
                        <div><strong class="field-title">Status :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['22']); ?></span></div>

                    </div>
                </div>

                
            </div>

           
            <div class="amenities-container">
                <h3 class="amenities-heading">Project Amenities :</h3>
                
                <div class="amenities-list-wrapper">
                    <ul class="amenities-column amenities-column-1">
                    <li><span class="amenities-icon">&#10003;</span> Property Age: <?php echo htmlspecialchars($feature['property_age'] ?? 'N/A'); ?></li>
                    <li><span class="amenities-icon">&#10003;</span> Swimming Pool: <?php echo htmlspecialchars($feature['swimming_pool']?? 'N/A'); ?></li>
                    <li><span class="amenities-icon">&#10003;</span> Parking: <?php echo htmlspecialchars($feature['parking']?? 'N/A'); ?></li>
                    <li><span class="amenities-icon">&#10003;</span> Gym: <?php echo htmlspecialchars($feature['gym']?? 'N/A'); ?></li>
                    </ul>
                    <ul class="amenities-column amenities-column-2">
                    <li><span class="amenities-icon">&#10003;</span> Type: <?php echo htmlspecialchars($feature['type']?? 'N/A'); ?></li>
                    <li><span class="amenities-icon">&#10003;</span> Security: <?php echo htmlspecialchars($feature['security']?? 'N/A'); ?></li>
                    <li><span class="amenities-icon">&#10003;</span> Dining Capacity: <?php echo htmlspecialchars($feature['dining_capacity']?? 'N/A'); ?></li>
                    <li><span class="amenities-icon">&#10003;</span> Church/Temple: <?php echo htmlspecialchars($feature['church_temple']?? 'N/A'); ?></li>
                    </ul>
                    <ul class="amenities-column amenities-column-3">
                    <li><span class="amenities-icon">&#10003;</span> 3rd Party: <?php echo htmlspecialchars($feature['third_party']?? 'N/A'); ?></li>
                    <li><span class="amenities-icon">&#10003;</span> Elevator: <?php echo htmlspecialchars($feature['elevator']?? 'N/A'); ?></li>
                    <li><span class="amenities-icon">&#10003;</span> CCTV: <?php echo htmlspecialchars($feature['cctv']?? 'N/A'); ?></li>
                    <li><span class="amenities-icon">&#10003;</span> Water Supply: <?php echo htmlspecialchars($feature['water_supply']?? 'N/A'); ?></li>
                    </ul>

                    
                </div>
            </div>

            <!-- <div class="location-container">
                <h3 class="location-heading">Location & Google Maps :</h3>
                <div class="map-wrapper">
                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24312.294504298833!2d13.404954!3d52.520007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a8502f8dbf0b37%3A0x425bf46b9db2a206!2sBerlin%2C%20Germany!5e0!3m2!1sen!2sus!4v1614571170938!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div> -->

            
            
        </div>

        

        <!-- Right Side: Form -->
        <div class="right-form">
                    <div class="form-container">
                        <h3 class="form-heading">Connect with Us for Tailored Solutions!</h3>
                            <form style="text-align:center">
                                <div class="input-group" style="width:102%">
                                    <input type="text" name="first-name" placeholder="First Name" required>
                                    
                                </div>
                                <input type="email" name="email" placeholder="Email" required class="email-group">
                                <textarea name="message" placeholder="Message" required></textarea>
                                <button type="submit" style="margin-top:30px">SEND MESSAGE</button>
                            </form>
                    </div>
        </div>
    </div>
</section>
<!-- end property detail -->

















<script>
    let slideIndex = 0;
showSlides();

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}


var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000); // Change image every 2 seconds
        }

    </script>
<!-- footer -->
<?php include("include/footer.php");?>
<!-- end footer -->

</body>
</html>
