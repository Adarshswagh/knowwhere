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
        let compareList = JSON.parse(localStorage.getItem("comparisonList")) || [];

        function saveToLocalStorage() {
            localStorage.setItem("comparisonList", JSON.stringify(compareList));
        }

        function deleteProperty(id) {
            compareList = compareList.filter(property => property.id !== id);
            saveToLocalStorage();
            displayComparisonTable();
        }

        function displayComparisonTable() {
            let tableHTML = '';

            compareList.forEach(property => {
                tableHTML += `
                <table class="comparison-table">
                    <tbody>
                        <tr><th>Name</th><td>${property.name}</td></tr>
                        <tr><th>Location</th><td>${property.location}</td></tr>
                        <tr><th>Total Units</th><td>${property.totalunits}</td></tr>
                        <tr><th>Total Towers</th><td>${property.towers || 'N/A'} Towers</td></tr>
                        <tr><th>Land Area</th><td>${property.area || 'N/A'}</td></tr>
                        <tr><th>Possession</th><td>${property.possession || 'N/A'}</td></tr>
                        <tr>
                            <th>Action</th>
                            <td class="action-cell">
                                <button class="delete-btn" onclick="deleteProperty('${property.id}')">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table><br/>`;
            });

            document.getElementById("comparisonTable").innerHTML = tableHTML;
            updateComparisonDetails();
        }

        function updateComparisonDetails() {
            const comparisonDetailsElement = document.getElementById('comparisonDetails');
            if (comparisonDetailsElement) {
                const comparisonDetails = compareList.map(property => {
                    return `Name: ${property.name}, Location: ${property.location}, Units: ${property.totalunits}, Towers: ${property.towers || 'N/A'}, Area: ${property.area || 'N/A'}, Possession: ${property.possession || 'N/A'}`;
                }).join('\n');
                
                comparisonDetailsElement.value = comparisonDetails;
            } else {
                console.warn("comparisonDetails element not found.");
            }
        }

        displayComparisonTable();
    </script>
</section>

<!-- end compare -->

<!-- Enquire Button -->
<!-- <div style="position: sticky; top: 20px;">
    <button id="enquireButton" style="padding: 10px 20px; background-color: #333; color: #fff; border: none; cursor: pointer; border-radius: 5px;">
        Enquire Now
    </button>
</div> -->

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
    <div class="form-container">
        <span id="closeModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Enquiry Form</h3>
        
        <!-- Feedback Message -->
        <div id="feedbackMessage" style="color: #007bff; font-size: 14px; margin-bottom: 10px; display: none;"></div>
        
        <form id="enquiryForm" method="POST" >
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="contact" placeholder="Your Contact Number" required>

            <!-- Hidden field for favorite projects -->
            <input type="hidden" name="comparisonDetails" id="comparisonDetails" value="">

            <textarea name="message" placeholder="Your Message" required></textarea>
            
            <button type="submit">Submit Enquiry</button>
        </form>

    </div>
</div>
]


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

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const name = this.name.value;
            const email = this.email.value;
            const phone = this.phone.value;
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
        console.warn("contact-form element not found.");
    }
});


</script>

<!-- footer -->
<?php include("include/footer.php"); ?>
<!-- end footer -->

</body>
</html>
