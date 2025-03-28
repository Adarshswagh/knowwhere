
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

    <link rel="stylesheet" href="css/plotdetail.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
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
    $query = mysqli_query($con, "SELECT * FROM plotting_projects WHERE pid='$id'");

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
<!-- end banner -->

<!-- property detail -->
<section id="prodetail">
    <div class="container">
        <!-- Left Side: Property Content -->
        <div class="left-content">



        <div class="w3-content w3-section" style="max-width:100%;">
            <?php if (!empty($row['13'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['13']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['14'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['14']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['15'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['15']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['16'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['16']; ?>" style="width:100%">
            <?php endif; ?>
            
            <?php if (!empty($row['17'])): ?>
                <img class="mySlides" src="admin/property/<?php echo $row['17']; ?>" style="width:100%">
            <?php endif; ?>
        </div>


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
                    <p class="project-detail"><?php echo htmlspecialchars($row['3']); ?>, <?php echo htmlspecialchars($row['24']); ?></p>
                </div>
                <div class="divider"></div>
                <div class="detail-item">
                    <i class="fa-solid fa-house" style="color: #a8894d; height:30px;"></i>
                    <p><?php echo htmlspecialchars($row['4']); ?></p>
                </div>
            </div>

            <div class="property-details-section">
                <div class="properties-details">
                    <h3>Project Details :</h3>
                    <div class="detail-grid">
                        <div><strong class="field-title">Project Developer :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['25']); ?></span></div>
                        <div><strong class="field-title">Type :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['23']); ?></span></div>
                        <div><strong class="field-title">Plot Size :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['5']); ?></span></div>
                        <div><strong class="field-title">Price :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['6']); ?></span></div>
                        <div><strong class="field-title">Per Square Feet (PSF) :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['7']); ?></span></div>
                        <div><strong class="field-title">Possession :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['8']); ?></span></div>
                        <div><strong class="field-title">USP :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['9']); ?></span></div>
                        <div><strong class="field-title">Status :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['18']); ?></span></div>
                        <div><strong class="field-title">FSI :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['21']); ?></span></div>
                        <div><strong class="field-title">Permissible Floor :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['22']); ?></span></div>


                    </div>
                </div>

                <div><strong style="color:#050f17" >Type :</strong> <span style="color:#050f17; font-size:20px;"><?php echo htmlspecialchars($row['26']); ?></span></div>

            </div>

            <!-- <div class="amenities-container">
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



<!-- Popup Modal -->
<div id="comparePopup" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 1000;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 8px; width: 400px; max-width: 90%;">
        <div style="text-align: right;">
            <button onclick="closePopup()" style="background: transparent; border: none; font-size: 20px; cursor: pointer;">&times;</button>
        </div>
        <h4 id="popupTitle" style="text-align: center; margin: 10px 0;">Property Added to Comparison</h4>
        <p id="popupContent" style="text-align: center;"></p>
    </div>
</div>



<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.getElementsByClassName("mySlides");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }

    // Function to handle the "Like/Compare" button click
   // Function to handle the "Like/Compare" button click
  
    // plotdetail.php (Plotting Page)
    function addToCompare() {
        const propertyId = "<?php echo htmlspecialchars($id); ?>";
        const propertyName = "<?php echo htmlspecialchars($row['1']); ?>";
        const propertyLocation = "<?php echo htmlspecialchars($row['3']); ?>";
        const propertyArea = "<?php echo htmlspecialchars($row['4']); ?>";
        const propertyPossession = "<?php echo htmlspecialchars($row['8']); ?>";
        const propertyDeveloper = "<?php echo htmlspecialchars($row['25']); ?>";
        const propertyType = "<?php echo htmlspecialchars($row['23']); ?>";
        const plotSize = "<?php echo htmlspecialchars($row['5']); ?>";
        const price = "<?php echo htmlspecialchars($row['6']); ?>";
        const propertyPsf = "<?php echo htmlspecialchars($row['7']); ?>";
        const usp = "<?php echo htmlspecialchars($row['9']); ?>";
        const fsi = "<?php echo htmlspecialchars($row['21']); ?>";
        const floor = "<?php echo htmlspecialchars($row['22']); ?>";
        const status = "<?php echo htmlspecialchars($row['18']); ?>";
        const projectType = "Plotting";

        let comparisonList = JSON.parse(localStorage.getItem("comparisonList")) || [];

        if (comparisonList.length > 0 && comparisonList[0].type !== projectType) {
            alert("You can only compare properties of the same type.");
            return; // Prevent adding the property
        }

        const exists = comparisonList.some(item => item.id === propertyId);
        if (exists) {
            alert("Property already added to comparison list!");
            return;
        }

        comparisonList.push({
            id: propertyId,
            name: propertyName,
            location: propertyLocation,
            area: propertyArea,
            possession: propertyPossession,
            developer: propertyDeveloper,
            plotType: propertyType,
            plotSize: plotSize,
            price: price,
            psf: propertyPsf,
            usp: usp,
            fsi: fsi,
            floor: floor,
            status: status,
            type: projectType
        });

        localStorage.setItem("comparisonList", JSON.stringify(comparisonList));
        alert("Property added to comparison list.");
    }


    // Function to show the popup
    function showPopup(content) {
        document.getElementById("popupContent").innerHTML = content;
        document.getElementById("comparePopup").style.display = "block";
    }

    // Function to close the popup
    function closePopup() {
        document.getElementById("comparePopup").style.display = "none";
    }




    function copyShareUrl() {
        const shareUrl = window.location.href; // Get the current page URL

        // Create a temporary input element to copy the URL
        const tempInput = document.createElement("input");
        document.body.appendChild(tempInput);
        tempInput.value = shareUrl;
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        alert("Project URL copied to clipboard!");
    }

</script>


<!-- footer -->
<?php include("include/footer.php");?>
<!-- end footer -->


</body>
</html>
