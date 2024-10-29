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

    <link rel="stylesheet" href="css/compare.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
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
            <h2>Project Comparison</h2>
            <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Services</a></p>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- compare -->
<section id="compare-table">
    <div class="comparison-container">
        <div id="comparisonTable" class="comparison-table-container"></div>
    </div>

    <script>
        // Retrieve properties from localStorage
        let compareList = JSON.parse(localStorage.getItem("comparisonList")) || [];

        function saveToLocalStorage() {
            localStorage.setItem("comparisonList", JSON.stringify(compareList));
        }

        function deleteProperty(id) {
            // Remove the property with the matching ID
            compareList = compareList.filter(property => property.id !== id);
            saveToLocalStorage();
            displayComparisonTable();
        }

        function displayComparisonTable() {
            let tableHTML = "";

            compareList.forEach(property => {
                tableHTML += `
                    <div class="property-card">
                        <div class="property-detail"><strong>Name:</strong> ${property.name}</div>
                        <div class="property-detail"><strong>Location:</strong> ${property.location}</div>
                        <div class="property-detail"><strong>Total Units:</strong> ${property.totalunits}</div>
                        <div class="property-detail"><strong>Total Towers:</strong> ${property.towers || 'N/A'} Towers</div>
                        <div class="property-detail"><strong>Land Area:</strong> ${property.area || 'N/A'}</div>
                        <div class="property-detail"><strong>Possession:</strong> ${property.possession || 'N/A'}</div>
                        <div class="property-action">
                            <button class="delete-btn" onclick="deleteProperty('${property.id}')">Delete</button>
                        </div>
                    </div>`;
            });

            document.getElementById("comparisonTable").innerHTML = tableHTML;
        }



        // Call function on page load
        displayComparisonTable();
    </script>
</section>

 <!-- end compare -->


<!-- footer -->
<?php include("include/footer.php");?>
<!-- end footer -->


</body>
</html>
