<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

// Get the pid from the request
$id = $_REQUEST['pid'];

// Fetch the current project details
$query = mysqli_query($con, "SELECT * FROM residential_projects WHERE pid='$id'");

if(mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_array($query);
    $unit_details = json_decode($row['unit_details'], true);
} else {
    echo "No project found with the given pid.";
    exit;
}

// Fetch similar projects based on location
$location = $row['3']; // Assuming '3' is the index for location in your database
$similar_query = mysqli_query($con, "SELECT * FROM residential_projects WHERE project_location='$location' AND pid != '$id' LIMIT 5"); // Adjust the query as needed

$similar_projects = [];
while ($similar_row = mysqli_fetch_array($similar_query)) {
    $similar_projects[] = $similar_row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property List</title>

    <link rel="stylesheet" href="css/prodetail.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

<!-- navbar -->
<?php include("include/header.php");?>
<!-- end navbar -->

<!-- banner -->
<section id="banner-main">
    <div class="banner">
        <div class="banner-content">
            <h2><?php echo htmlspecialchars($row['1']); ?></h2>
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
                <?php if (!empty($row['9'])): ?>
                    <img class="mySlides" src="admin/property/<?php echo $row['9']; ?>" style="width:100%">
                <?php endif; ?>
                
                <?php if (!empty($row['10'])): ?>
                    <img class="mySlides" src="admin/property/<?php echo $row['10']; ?>" style="width:100%">
                <?php endif; ?>
                
                <?php if (!empty($row['11'])): ?>
                    <img class="mySlides" src="admin/property/<?php echo $row['11']; ?>" style="width:100%">
                <?php endif; ?>
                
                <?php if (!empty($row['12'])): ?>
                    <img class="mySlides" src="admin/property/<?php echo $row['12']; ?>" style="width:100%">
                <?php endif; ?>
                
                <?php if (!empty($row['13'])): ?>
                    <img class="mySlides" src="admin/property/<?php echo $row['13']; ?>" style="width:100%">
                <?php endif; ?>
            </div>

            <script>
  let slideIndex = 0;
  function showSlides() {
    let slides = document.querySelectorAll(".mySlides");
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; // Hide all images
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; } // Reset to first slide
    slides[slideIndex - 1].style.display = "block"; // Show current slide
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }

  document.addEventListener("DOMContentLoaded", showSlides); // Start when page loads
</script>


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

            <h3 class="prodetail-heading3">Description :</h3>
            <p class="description"><?php echo  htmlspecialchars($row['2']); ?></p>
            <div class="property-details">
                <div class="detail-item">
                    <i class="fa-solid fa-map-pin" style="color: #a8894d; height:30px;"></i>
                    <p class="project-detail"><?php echo htmlspecialchars($row['3']); ?>, <?php echo htmlspecialchars($row['19']); ?></p>
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
                        <div><strong class="field-title">Project Developer :</strong> <span style="color:#A8894D; font-ize:20px;"><?php echo htmlspecialchars($row['21']); ?></span></div>
                        <div><strong class="field-title">Typology PSF :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['20']); ?></span></div>
                        <div><strong class="field-title">Total Floor :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['18']); ?></span></div>
                        <div><strong class="field-title">Total Towers :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['5']); ?></span></div>
                        <div><strong class="field-title">Total Units :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['6']); ?></span></div>
                        <div><strong class="field-title">Possession :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['7']); ?></span></div>
                        <div><strong class="field-title">Project area :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['4']); ?></span></div>
                        <div><strong class="field-title">Status :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['14']); ?></span></div>
                        <div><strong class="field-title">Type :</strong> <span style="color:#A8894D; font-size:20px;"><?php echo htmlspecialchars($row['23']); ?></span></div>
                    </div>
                </div>

                <div class="unit-details">
                    <h3>Typology Details :</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>UNIT NAME</th>
                                <th>UNIT PRICE</th>
                                <th>UNIT SIZE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($unit_details)): ?>
                                <?php foreach ($unit_details as $unit): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($unit['name']); ?></td>
                                        <td><?php echo htmlspecialchars($unit['price']); ?></td>
                                        <td><?php echo htmlspecialchars($unit['size']); ?> SqFt.</td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr><td colspan="3">No units available</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="unit-details">
                    <h3>Floor Plan :</h3>
                    <div class="container">
                        <div class="floor-plan">
                            <div class="blur-overlay">
                                <button id="enquireButton3" class="download-btn" onclick="openEnquiryForm()">DOWNLOAD</button>
                            </div>
                            <img src="images/floor/f1.png" alt="2 BHK Floor Plan">
                        </div>

                        <div class="floor-plan">
                            <div class="blur-overlay">
                                <button id="enquireButton1" class="download-btn" onclick="openEnquiryForm()">DOWNLOAD</button>
                            </div>
                            <img src="images/floor/f2.jpg" alt="3 BHK Floor Plan">
                        </div>
                        <div class="floor-plan">
                            <div class="blur-overlay">
                                <button id="enquireButton2" class="download-btn" onclick="openEnquiryForm()">DOWNLOAD</button>
                            </div>
                            <img src="images/floor/f3.png" alt="Master Layout">
                        </div>
                    </div>
                </div>


                <div class="unit-details">
                    <h3>Similar Projects :</h3>
                    <div class="container">
                    <section id="project-card">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <?php if (!empty($similar_projects)): ?>
                                    <?php foreach ($similar_projects as $project): ?>
                                        <div class="swiper-slide">
                                            <a href="Prodetail.php?pid=<?php echo $project['0']; ?>" class="card-link">
                                                <div class="card-entry">
                                                    <div class="overlay-black">
                                                        <img src="admin/property/<?php echo $project['9']; ?>" alt="Residential Property Image">
                                                        <div class="promo-badge">Residential Projects</div>
                                                    </div>
                                                    <div class="property-info">
                                                        <h2 class="property-title">
                                                            <a href="Prodetail.php?pid=<?php echo $project['0']; ?>">
                                                                <?php echo htmlspecialchars($project['1']); ?>
                                                            </a>
                                                        </h2>
                                                        <div class="property-meta">
                                                            <span class="location"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($project['3']); ?></span>
                                                            <span class="land-area location"><i class="fas fa-vector-square"></i> <?php echo htmlspecialchars($project['4']); ?></span>
                                                            <span class="towers location"><i class="fa-solid fa-building"></i> <?php echo htmlspecialchars($project['5']); ?> Towers</span>
                                                        </div>
                                                        <div class="property-meta">
                                                            <span class="total-units location">Total Units: <?php echo htmlspecialchars($project['6']); ?></span>
                                                        </div>
                                                        <div class="button-container">
                                                            <a href="Prodetail.php?pid=<?php echo $project['0']; ?>" class="view-more-btn">Know More</a>
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
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="swiper-slide">
                                        <p>No similar projects found.</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end property detail -->

<!-- Similar Projects Section -->


<!-- SwiperJS Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
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
</script>









<!-- Popup HTML -->
<div id="popupOverlay">
    <div id="popupContent">
        <span id="closePopup" style="color:#fff; ">&times;</span>
        <h2 class="popup-form">Enquire Now</h2>
        <p class="popup-form-p">Let's Connect – Your Queries, Our Priority!</p>

        <div id="thankYouMessage" style="display: none; text-align: center;">
            <h3>Thank You!</h3>
            <p>Your enquiry has been received. We'll get back to you soon.</p>
        </div>

        <form id="enquiryForm">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <input type="text" name="contact" id="contact" placeholder="Your Contact Number" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number">
            <textarea name="message" id="message" placeholder="Your Message" required></textarea>
            
            <!-- Captcha Section -->
            <div style="display: flex; justify-content: center; align-items: center; width: 100%; padding: 10px;">
                <label id="captchaLabel" style="color: #fff; font-size: 18px; margin-right: 10px;"></label>
                <input type="text" id="captchaInput" placeholder="Enter result" required style="width: 100%; max-width: 200px; text-align: center; padding: 8px; border:1px solid #fff; border-radius: 5px;">
            </div>



            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<script>

     // Show enquiry modal
     document.getElementById("enquireButton3").onclick = function() {
        document.getElementById("popupOverlay").style.display = "block";
    };

      // Show enquiry modal
      document.getElementById("enquireButton1").onclick = function() {
        document.getElementById("popupOverlay").style.display = "block";
    };

      // Show enquiry modal
      document.getElementById("enquireButton2").onclick = function() {
        document.getElementById("popupOverlay").style.display = "block";
    };


    document.addEventListener("DOMContentLoaded", function() {
        var popup = document.getElementById("popupOverlay");
        var closeBtn = document.getElementById("closePopup");
        var form = document.getElementById("enquiryForm");
        var thankYouMessage = document.getElementById("thankYouMessage");
        var captchaLabel = document.getElementById("captchaLabel");
        var captchaInput = document.getElementById("captchaInput");

        // Generate random captcha
        function generateCaptcha() {
            var num1 = Math.floor(Math.random() * 10) + 1;
            var num2 = Math.floor(Math.random() * 10) + 1;
            captchaLabel.textContent = `Solve: ${num1} + ${num2} = ?`;
            captchaLabel.dataset.answer = num1 + num2;
        }
        
        generateCaptcha(); // Initial captcha

        function showPopup() {
            if (!sessionStorage.getItem("formSubmitted")) {
                popup.style.display = "block";
            }
        }

        function hidePopup() {
            popup.style.display = "none";
        }

        // Show popup when page loads
        showPopup();

        // Close popup when the close button is clicked
        closeBtn.onclick = function() {
            hidePopup();
        };

        // Close popup when clicking outside of the popup content
        window.onclick = function(event) {
            if (event.target == popup) {
                hidePopup();
            }
        };

        // Handle form submission via AJAX
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission

            // Validation
            var name = document.getElementById("name").value.trim();
            var email = document.getElementById("email").value.trim();
            var contact = document.getElementById("contact").value.trim();
            var message = document.getElementById("message").value.trim();
            var captchaAnswer = parseInt(captchaInput.value);

            // Email validation regex
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            var contactRegex = /^[0-9]{10}$/;

            if (!name || !email || !contact || !message || isNaN(captchaAnswer)) {
                alert("All fields are required.");
                return;
            }

            if (!emailRegex.test(email)) {
                alert("Enter a valid email address.");
                return;
            }

            if (!contactRegex.test(contact)) {
                alert("Enter a valid 10-digit phone number.");
                return;
            }

            if (captchaAnswer !== parseInt(captchaLabel.dataset.answer)) {
                alert("Incorrect CAPTCHA answer. Try again.");
                generateCaptcha();
                captchaInput.value = "";
                return;
            }

            var formData = new FormData(form);

            fetch("submit_form.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); // Log response from the server

                // Hide form and show thank you message
                form.style.display = "none";
                thankYouMessage.style.display = "block";

                // Set session flag to prevent popup from appearing again
                sessionStorage.setItem("formSubmitted", "true");

                // Reset form fields after 3 seconds
                setTimeout(function() {
                    form.reset();
                    form.style.display = "block";
                    thankYouMessage.style.display = "none";
                    hidePopup();
                }, 3000);
            })
            .catch(error => console.error("Error:", error));
        });
    });
</script>

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
  
    function addToCompare() {
        const propertyId = "<?php echo htmlspecialchars($id); ?>";
        const propertyName = "<?php echo htmlspecialchars($row['1']); ?>";
        const propertyLocation = "<?php echo htmlspecialchars($row['3']); ?>";
        const propertyTotalUnits = "<?php echo htmlspecialchars($row['6']); ?>";
        const propertyTotalTowers = "<?php echo htmlspecialchars($row['5']); ?>";
        const propertyArea = "<?php echo htmlspecialchars($row['4']); ?>";
        const propertyPossession = "<?php echo htmlspecialchars($row['7']); ?>";
        const propertyDeveloper = "<?php echo htmlspecialchars($row['21']); ?>";
        const propertyPsf = "<?php echo htmlspecialchars($row['20']); ?>";
        const propertyTotalFloor = "<?php echo htmlspecialchars($row['18']); ?>";
        const propertyStatus = "<?php echo htmlspecialchars($row['14']); ?>";
        const typologyDetails = <?php echo json_encode($unit_details); ?>;
        const projectType = "Residential";

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
            totalUnits: propertyTotalUnits,
            towers: propertyTotalTowers,
            area: propertyArea,
            possession: propertyPossession,
            developer: propertyDeveloper,
            psf: propertyPsf,
            totalFloor: propertyTotalFloor,
            status: propertyStatus,
            typologyDetails: typologyDetails,
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