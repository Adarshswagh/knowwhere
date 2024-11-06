<?php 
session_start();
include("config.php");

// Get search parameters
$location = $_GET['location'] ?? '';
$projectType = $_GET['project_type'] ?? '';

// Determine the table based on the selected project type
$table = '';
switch ($projectType) {
    case 'residential':
        $table = 'residential_projects';
        break;
    case 'commercial':
        $table = 'commercial_projects';
        break;
    case 'plotting':
        $table = 'plotting_projects';
        break;
}

// Start HTML structure
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listings</title>
    <link rel="stylesheet" href="css/prolist.css"> <!-- Link to CSS file -->

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
            <h2>Search Property List</h2>
            <p class="banner-bread"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Property List   </a></p>
        </div>
    </div>
</section>
<!--end banner -->

<!-- pro list -->

<section id="properties">
    <div class="container" style="max-width:1450px;">
        <!-- Left Section (Property Listings) -->
        <div class="left-section">
            <div class="row">
            <?php
                if ($table) {
                    $stmt = $con->prepare("SELECT * FROM $table WHERE project_location LIKE ?");
                    $searchTerm = "%$location%";
                    $stmt->bind_param("s", $searchTerm);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($row = $result->fetch_assoc()) {
                        $imagePath = "admin/property/" . $row['image1'];
                        $projectTitle = htmlspecialchars($row['project_title']);
                        $projectLocation = htmlspecialchars($row['project_location']);
                        $projectArea = htmlspecialchars($row['project_area']);
                       

                        
                        
                        // Only set these if they exist
                        $TotalTowers = isset($row['total_towers']) ? htmlspecialchars($row['total_towers']) : "N/A";
                        $TotalUnits = isset($row['total_units']) ? htmlspecialchars($row['total_units']) : "N/A";
                        $projectPrice = isset($row['price']) ? htmlspecialchars($row['price']) : "N/A";
                        $projectTypology = isset($row['typology']) ? htmlspecialchars($row['typology']) : "N/A";
                        $plotSize = isset($row['plot_size']) ? htmlspecialchars($row['plot_size']) : "N/A";




                        $officeSpace = isset($row['office_space']) ? htmlspecialchars($row['office_space']) : "N/A";
                        $parking = isset($row['parking']) ? htmlspecialchars($row['parking']) : "N/A";
                        $warehouseSize = isset($row['warehouse_size']) ? htmlspecialchars($row['warehouse_size']) : "N/A";
                        $loadingDocks = isset($row['loading_docks']) ? htmlspecialchars($row['loading_docks']) : "N/A";

                        // Determine the project type layout
                        if ($projectType == "residential") { ?>
                            <!-- Residential Project Card Layout -->
                            <div class="col-md-6 col-sm-10">
                                <div class="property-card residential-card">
                                    <img src="<?php echo $imagePath; ?>" alt="Residential Property">
                                    <div class="promo-badge">Residential Project</div>
                                    <div class="property-info">
                                        <h3><?php echo $projectTitle; ?></h3>
                                        <div class="property-meta">
                                            <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $projectLocation; ?></span>
                                            <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $projectArea; ?></span>
                                            <span class="land-area card-location"><i class="fa-solid fa-building" style="color: #a8894d;"></i> <?php echo $TotalTowers; ?> Towers</span>   
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units card-location1">Total Units: <?php echo $TotalUnits; ?></span>
                                        </div>
                                        <div class="button-container">
                                            <a href="Prodetail.php?pid=<?php echo $row['pid']; ?>" class="view-more-btn">Know More</a>
                                            <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:+1234567890" class="btn-icon call-btn">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } elseif ($projectType == "commercial") { ?>
                            <!-- Commercial Project Card Layout -->
                            <div class="col-md-6 col-sm-10">
                                <div class="property-card commercial-card">
                                    <img src="<?php echo $imagePath; ?>" alt="Commercial Property">
                                    <div class="promo-badge">Commercial Project</div>
                                    <div class="property-info">
                                        <h3><?php echo $projectTitle; ?></h3>
                                        <div class="property-meta">
                                            <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $projectPrice;?></span>
                                            <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $projectLocation;?></span>
                                            <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $projectArea; ?></span>

                                            
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units card-location1">Typology : <?php echo $projectTypology; ?></span>
                                            
                                        </div>    
                                        <div class="button-container">
                                            <a href="Prodetail.php?pid=<?php echo $row['pid']; ?>" class="view-more-btn">Know More</a>
                                            <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:+1234567890" class="btn-icon call-btn">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php } elseif ($projectType == "plotting") { ?>
                            <!-- Industrial Project Card Layout -->
                            <div class="col-md-6 col-sm-10">
                                <div class="property-card industrial-card">
                                    <img src="<?php echo $imagePath; ?>" alt="Industrial Property">
                                    <div class="property-info">
                                        <h3><?php echo $projectTitle; ?></h3>
                                        <div class="property-meta">
                                            <span class="location card-location"><i class="fa-solid fa-indian-rupee-sign" style="color: #a8894d;"></i> <?php echo $projectPrice;?></span>
                                            <span class="location card-location"><i class="fas fa-map-marker-alt"></i> <?php echo $projectLocation;?></span>
                                            <span class="land-area card-location"><i class="fas fa-vector-square"></i> <?php echo $plotSize; ?></span>
                                        </div>
                                        <div class="property-meta">
                                            <span class="total-units card-location1">Land Area : <?php echo $projectArea; ?></span>
                                            
                                        </div> 
                                        <div class="button-container">
                                            <a href="plotdetail.php?pid=<?php echo $row['pid']; ?>" class="view-more-btn">Know More</a>
                                            <a href="https://wa.me/1234567890" target="_blank" class="btn-icon whatsapp-btn">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:+1234567890" class="btn-icon call-btn">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php }
                    }
                } else {
                    echo "<p>No project type selected.</p>";
                }
                $con->close();
                ?>

            </div>
        </div>

        <!-- Right Section (Sticky Contact Form) -->
        <div class="right-section">
            <div class="sticky">
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
    </div>
</section>
<!-- end pro list -->

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
