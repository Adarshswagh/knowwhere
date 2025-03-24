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

    <link rel="stylesheet" href="css/pune.css">
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
            <h2>Goa Projects List</h2>
            <p class="banner-bread"><a href="index.php" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Projects</a></p>
        </div>
    </div>
</section>
<!--end banner -->

<!-- properties -->
<section id="pune-properties">
    <div class="pune-container">
        <!-- Left Section (Property Listings) -->
        <div class="pune-left-section">
            <div class="pune-row">

                <!-- Residential Properties -->
                <?php 
                    $residential_query = mysqli_query($con, "SELECT * FROM `residential_projects` WHERE city='Goa'");
                    while ($row = mysqli_fetch_array($residential_query)) {
                ?>
                <br><div class="pune-col-md-6 pune-col-sm-10">
                        <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="pune-property-card-link">
                            <div class="pune-property-card">
                                <div class="pune-overlay-black">
                                    <img src="admin/property/<?php echo $row['9'];?>" alt="Residential Property Image">
                                    <div class="pune-promo-badge">Residential Projects</div>
                                </div>
                                <div class="pune-property-info">
                                    <h3 class="pune-property-title">
                                        <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="pune-property-title">
                                            <?php echo $row['1']; ?>
                                        </a>
                                    </h3>
                                    <div class="pune-property-meta">
                                        <span class="pune-location pune-card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                        <span class="pune-land-area pune-card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>
                                        <span class="pune-land-area pune-card-location"><i class="fa-solid fa-building" style="color: #a8894d;"></i> <?php echo $row['5']; ?>Towers</span>
                                    </div>
                                    <div class="pune-property-meta">
                                        <span class="pune-total-units pune-card-location1">Total Units: <?php echo $row['total_units']; ?></span>
                                    </div>
                                    <div class="pune-button-container">
                                        <a href="Prodetail.php?pid=<?php echo $row['0']; ?>" class="pune-view-more-btn">Know More</a>
                                        <a href="https://wa.me/1234567890" target="_blank" class="pune-btn-icon pune-whatsapp-btn">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                        <a href="tel:+1234567890" class="pune-btn-icon pune-call-btn">
                                            <i class="fas fa-phone"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>

                <!-- Commercial Properties -->
                <?php 
                    $commercial_query = mysqli_query($con, "SELECT * FROM `commercial_projects` WHERE city='Goa'");
                    while ($row = mysqli_fetch_array($commercial_query)) {
                ?>
                <div class="pune-col-md-6 pune-col-sm-10">
                    <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="pune-property-card-link">
                        <div class="pune-property-card">
                            <div class="pune-overlay-black">
                                <img src="admin/property/<?php echo $row['15']; ?>" alt="Commercial Property Image">
                                <div class="pune-promo-badge">Commercial Projects</div>
                            </div>
                            <div class="pune-property-info">
                                <h3 class="pune-property-title">
                                    <a href="comprodetail.php?pid=<?php echo $row['0']; ?>">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="pune-property-meta">
                                    <span class="pune-location pune-card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['8'];?></span>
                                    <span class="pune-location pune-card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="pune-land-area pune-card-location"><i class="fas fa-vector-square"></i> <?php echo $row['4']; ?></span>
                                </div>
                                <div class="pune-property-meta">
                                    <span class="pune-total-units pune-card-location1">Typology : <?php echo $row['5']; ?></span>
                                </div>    
                                <div class="pune-button-container">
                                    <a href="comprodetail.php?pid=<?php echo $row['0']; ?>" class="pune-view-more-btn">Know More</a>
                                    <a href="https://wa.me/91122 11291" target="_blank" class="pune-btn-icon pune-whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="tel:+91 91122 11291" class="pune-btn-icon pune-call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>

                <!-- Plotting Properties -->
                <?php 
                    $plotting_query = mysqli_query($con, "SELECT * FROM `plotting_projects` WHERE city='Goa'");
                    while ($row = mysqli_fetch_array($plotting_query)) {
                ?>
                <div class="pune-col-md-6 pune-col-sm-10">
                    <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="pune-property-card-link">
                        <div class="pune-property-card">
                            <div class="pune-overlay-black">
                                <img src="admin/property/<?php echo $row['13']; ?>" alt="Plotting Property Image">
                                <div class="pune-promo-badge">Plotting Project</div>
                            </div>
                            <div class="pune-property-info">
                                <h3 class="pune-property-title">
                                    <a href="plotdetail.php?pid=<?php echo $row['0']; ?>">
                                        <?php echo $row['1']; ?>
                                    </a>
                                </h3>
                                <div class="pune-property-meta">
                                    <span class="pune-location pune-card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $row['6'];?></span>
                                    <span class="pune-location pune-card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $row['3'];?></span>
                                    <span class="pune-land-area pune-card-location"><i class="fas fa-vector-square"></i> <?php echo $row['5']; ?></span>
                                </div>
                                <div class="pune-property-meta">
                                    <span class="pune-total-units pune-card-location1">Land Area : <?php echo $row['4']; ?></span>
                                </div>  
                                <div class="pune-button-container">
                                    <a href="plotdetail.php?pid=<?php echo $row['0']; ?>" class="pune-view-more-btn">Know More</a>
                                    <a href="https://wa.me/1234567890" target="_blank" class="pune-btn-icon pune-whatsapp-btn">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="tel:+1234567890" class="pune-btn-icon pune-call-btn">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
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
                <h2 class="call-to-cation-h2">Your Gateway to Perfect Spaces</h2>
                <p style ="text-align:center;">Step into a world of opportunities with properties that inspire</p>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- end call to action -->









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


<!-- footer -->
<?php include("include/footer.php");?>
<!-- end footer -->

</body>
</html>
