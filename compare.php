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
<?php include("include/header.php"); ?>
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

        // This function will display the comparison table from the comparisonList in localStorage
            function displayComparisonTable() {
                let compareList = JSON.parse(localStorage.getItem("comparisonList")) || [];

                // If no properties are added, display a message
                if (compareList.length === 0) {
                document.getElementById("comparisonTable").innerHTML = "<p class='no-properties'>No properties to compare</p>";
                return;
            }


                let tableHTML = `
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                ${compareList.map(property => `<td>${property.name}</td>`).join('')}
                            </tr>
                            <tr>
                                <th>Location</th>
                                ${compareList.map(property => `<td>${property.location}</td>`).join('')}
                            </tr>
                            <tr>
                                <th>Total Units</th>
                                ${compareList.map(property => `<td>${property.totalunits || 'N/A'}</td>`).join('')}
                            </tr>
                            <tr>
                                <th>Total Towers</th>
                                ${compareList.map(property => `<td>${property.towers || 'N/A'}</td>`).join('')}
                            </tr>
                            <tr>
                                <th>Land Area</th>
                                ${compareList.map(property => `<td>${property.area || 'N/A'}</td>`).join('')}
                            </tr>
                            <tr>
                                <th>Possession</th>
                                ${compareList.map(property => `<td>${property.possession || 'N/A'}</td>`).join('')}
                            </tr>
                            <tr>
                                <th>Action</th>
                                ${compareList.map(property => `
                                    <td class="action-cell">
                                        <button class="delete-btn" onclick="deleteProperty('${property.id}')">Delete</button>
                                    </td>`).join('')}
                            </tr>
                        </thead>
                    </table>`;

                document.getElementById("comparisonTable").innerHTML = tableHTML;
            }

            // Call this function when the page loads to display the comparison table
            displayComparisonTable();




        // Call function on page load
        displayComparisonTable();
    </script>
</section>

<!-- end compare -->
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
    <!-- Hidden field for favorite projects -->
    <input type="hidden" name="comparisonDetails" id="comparisonDetails" value="">
    <textarea name="message" id="message" placeholder="Your Message" required></textarea>
    <button type="submit">Send Comparison Data</button>
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
    const form = document.getElementById('enquiryForm'); // Corrected form ID
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const name = this.name.value;
            const email = this.email.value;
            const phone = this.contact.value; // Corrected to use contact input
            const message = this.message.value;

            // Collect comparison data
            const comparisonDetails = document.getElementById('comparisonDetails').value;

            const templateParams = {
                to_name: 'attendancedigitalizetheglobe@gmail.com', // Replace with the recipient's email
                from_name: name,
                user_email : email,
                user_number : phone,
                message: message,
                comparisonDetails: comparisonDetails
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





   // Show modal and populate the message field with comparison data
   document.getElementById("enquireButton").onclick = function() {
        let compareList = JSON.parse(localStorage.getItem("comparisonList")) || [];

        // Format the comparison data
        let formattedMessage = compareList.map(property => {
            return `Name: ${property.name}\nLocation: ${property.location}\nTotal Units: ${property.totalunits}\nTowers: ${property.towers}\nArea: ${property.area}\nPossession: ${property.possession}\n`;
        }).join('\n----------------\n');

        // Assign formatted data to the message field
        document.getElementById("message").value = formattedMessage;

        // Display the enquiry form modal
        document.getElementById("enquiryModal").style.display = "block";
    };

    // Hide modal
    document.getElementById("closeModal").onclick = function() {
        document.getElementById("enquiryModal").style.display = "none";
    };


</script>

<!-- footer -->
<?php include("include/footer.php"); ?>
<!-- end footer -->

</body>
</html>
