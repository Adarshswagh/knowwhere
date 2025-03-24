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

    <!-- <link rel="stylesheet" href="css/knowabout.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bamboo.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>




<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->


  <!-- banner -->
<section id="banner-main">
    <div class="banner1" >
        <div class="banner-content">
            <h2>Bamboo</h2>
            <p style="text-align:center;"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Bamboo</a></p>
        </div>
    </div>
</section>



<!-- post guide section -->

<div class="post-guide-section">
    <div class="post-guide-header">
        <h2
        style = " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;">How to post to get the most?</h2>
        <!-- <p>Selling/renting property is no more a challenge with Square Yards. Renting / Selling a house has become easy with the internet and easier with us! We will handle the process of selling your property from start to finish. Follow these steps to begin your home selling journey.</p> -->
    </div>
    <div class="post-guide-grid">
        <div class="post-step">
            <img src="images/biodegradable.png" alt="Show off your property">
            <h3 style ="color: #A8894D;">Comprehensive Eco-Friendly Solutions</h3>
            <p style="text-align:center;">Our holistic approach extends beyond bamboo, integrating mud architecture and solar energy to offer sustainable solutions that cater to the needs of modern living.  </p>
        </div>
        <div class="post-step">
            <img src="images/artist.png" alt="Property Proposal">
            <h3 style ="color: #A8894D;">Artistic Excellence</h3>
            <p style="text-align:center; margin-top:28px;">To attract buyers or renters, you have to put your best info forward. Jot down all the advantages and benefits of your property that the renter or buyer may want to avail.</p>
        </div>
        <div class="post-step">
            <img src="images/house.png" alt="Needful Negotiations">
            <h3 style ="color: #A8894D;">Innovative Design and Construction</h3>
            <p style="text-align:center;">We merge traditional craftsmanship with modern sustainability principles, delivering innovative bamboo constructions that are as visually stunning as they are unique.</p>
        </div>
        
        <div class="post-guide-grid">
        <div class="post-step">
            <img src="images/quality.png" alt="Show off your property">
            <h3 style ="color: #A8894D;">Focus on Quality and Sustainability</h3>
            <p style="text-align:center;">Every material sourced, every technique employed, and every design created reflects our dedication to environmental responsibility and excellence.</p>
        </div>
        <div class="post-step">
            <img src="images/partners.png" alt="Property Proposal">
            <h3 style ="color: #A8894D;">Community Empowerment</h3>
            <p style="text-align:center; margin-top:28px;">We provide fair wages, training, and growth opportunities to bamboo farmers and artisans, fostering social and economic development.</p>
        </div>
        <div class="post-step">
            <img src="images/education.png" alt="Needful Negotiations">
            <h3 style ="color: #A8894D;">Educational Outreach
            and Advocacy</h3>
            <p style="text-align:center;">We are a movement. Through educational outreach and advocacy, we promote the benefits of bamboo and sustainable living, inspiring a wave of eco-friendly change.</p>
        </div>
        
    </div>
</div>
<!-- post guide section end-->




<div class="post-guide-header" style= "padding-top:100px;">
        <h2 style = " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;">Our Main Vertical</h2>
        <p class="bamboo-about" >We blend traditional craftsmanship with modern design to transform bamboo into functional art and architecture.</p>
    </div>
<div class="main-verticals-section" style="padding-top:100px;">
    <div class="content-wrapper">
        <div class="text-content">
            <!-- <p class="section-intro">···· Our Main Verticals ····</p> -->
            <!-- <h2>We blend traditional craftsmanship with modern design to transform bamboo into functional art and architecture.</h2> -->
            <div class="description">
                <h3 style = " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 40px;
    font-weight: 400;
    line-height: 1.3em;">Bamboo Constructions</h3>
                <p>Crafted from bamboo, our sustainable sanctuaries – serene villas, breathtaking resorts, charming cafes, and cozy homes – elevate eco-consciousness into an art form.</p>
                <div class="buttons" >
                    <button id="consultationButton" href="#" class="book-consultation">Book a Consultation</button>
                </div>
            </div>
        </div>
        <div class="image-content">
            <img src="images/bamboo1.png" alt="Bamboo Constructions">
        </div>
    </div>
</div>


<div class="main-verticals-section" >
    <div class="content-wrapper" style="flex-direction:row-reverse; padding-top:100px; gap: 120px;">
        <div class="text-content">
            <!-- <p class="section-intro">···· Our Main Verticals ····</p> -->
            <!-- <h2>We blend traditional craftsmanship with modern design to transform bamboo into functional art and architecture.</h2> -->
            <div class="description">
                <h3 style = " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 40px;
    font-weight: 400;
    line-height: 1.3em;">Bamboo Sculpture</h3>
                <p>Skilled artisans transform bamboo into stunning, eco-friendly sculptures that elevate any space with a touch of green elegance.</p>
                <div class="buttons">
                    <button id="consultationButton2" href="#" class="book-consultation">Book a Consultation</button>
                </div>
            </div>
        </div>
        <div class="image-content">
            <img src="images/bamboo2.png" alt="Bamboo Constructions">
        </div>
    </div>
</div>





<div class="main-verticals-section" style="padding-top:100px;">
    <div class="content-wrapper">
        <div class="text-content">
            <!-- <p class="section-intro">···· Our Main Verticals ····</p> -->
            <!-- <h2>We blend traditional craftsmanship with modern design to transform bamboo into functional art and architecture.</h2> -->
            <div class="description">
                <h3 style = " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 40px;
    font-weight: 400;
    line-height: 1.3em;">Bamboo Products</h3>
                <p>Embrace sustainable living with our bamboo haven – furniture for rustic charm, kitchenware for organic beauty, all designed to elevate your life and our planet.</p>
                <div class="buttons">
                    <!-- Button HTML -->
                    <button id="consultationButton3" class="book-consultation">Book a Consultation</button>
                </div>
            </div>
        </div>
        <div class="image-content">
            <img src="images/bamboo3.png" alt="Bamboo Constructions">
        </div>
    </div>
</div>


<div class="post-guide-header" style= "padding-top:100px;">
        <h2 style = " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em; padding-top:100px;">Startup India Recognition</h2>
    </div>
    <div>
        <img src="images/certificate.png" alt="" style = "Width:700px;">
    </div>

</div>


<section class="testimonials-section">
    <h3>Our Clients</h3>
    <h2>Don't just take our word for it</h2>
    <div class="testimonials-container">
        <div class="testimonial">
            <div class="stars">★★★★★</div>
            <p>The bamboo Buddha sculpture created by Bamboo Moshai is a masterpiece. The artistry and attention to detail are truly remarkable. It has become the centerpiece of our garden, admired by everyone who visits. Their work exceeded all our expectations.</p>
            <h4>ANANYA DESAI</h4>
            <p class="title">Art Collector</p>
        </div>
        <div class="testimonial">
            <div class="stars">★★★★★</div>
            <p>Partnering with Bamboo Moshai to create our bamboo café was an excellent decision. Their innovative design and quality work have made our café a local hotspot, admired for its unique bamboo structure. The process was smooth and enjoyable.</p>
            <h4>RAJESH SINGH</h4>
            <p class="title">Partner in Premium Bamboo Café</p>
        </div>
        <div class="testimonial">
            <div class="stars">★★★★★</div>
            <p>Bamboo Moshai's bamboo products have transformed my interior design projects. The quality and craftsmanship of their furniture and decor items are exceptional. Each piece adds a touch of elegance and sustainability, making my clients fall in love with their spaces.</p>
            <h4>SUNITA PATEL</h4>
            <p class="title">Interior Designer</p>
        </div>
    </div>
</section>



<!-- call to action -->
<section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p style="text-align:center;">Thank you for choosing Knowhere. Let us turn your real estate dreams into reality.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- end call to action -->


 <!-- Enquire Button -->
 <div id="enquireButtonContainer">
    <button id="enquireButton">
        Book A Demo
    </button>
</div>

<!-- Enquiry Modal -->
<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: 8px;">
        <span id="closeModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Enquiry Form</h3>
        
        <div id="feedbackMessage" style="color: #007bff; font-size: 14px; margin-bottom: 10px; display: none;"></div>
        
        <form id="enquiryForm" method="POST">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <small class="error-message" id="nameError"></small>

            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <small class="error-message" id="emailError"></small>

            <input type="text" id="contact" name="contact" placeholder="Your Contact Number" required maxlength="10">
            <small class="error-message" id="contactError"></small>

            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
            <small class="error-message" id="messageError"></small>

            <div style="position: relative; display: flex; align-items: center;">
                <select id="type" name="type" required>
                    <option value="">Select Type</option>
                    <option value="Bamboo Constructions">Bamboo Constructions</option>
                    <option value="Bamboo Sculpture">Bamboo Sculpture</option>
                    <option value="Bamboo Products">Bamboo Products</option>
                </select>
                <i class="fas fa-angle-down" style="position: absolute; top: 15px; right: 10px; color: #555;"></i>
            </div>
            <small class="error-message" id="typeError"></small>

            <!-- CAPTCHA Section -->
            <div style="display: flex; align-items: center; gap: 10px;">
                <span id="captchaQuestion" style="font-size: 16px; font-weight: bold; width : 15%;"></span>
                <input type="text" id="captchaAnswer" name="captchaAnswer" placeholder="Enter Answer" required style="width: 100%;">
            </div>
            <small class="error-message" id="captchaError"></small>

            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<style>
    .error-message {
        color: red;
        font-size: 12px;
        display: none;
    }
</style>

<script>
    let correctCaptchaAnswer = 0;

    function generateCaptcha() {
        let num1 = Math.floor(Math.random() * 10) + 1;
        let num2 = Math.floor(Math.random() * 10) + 1;
        correctCaptchaAnswer = num1 + num2;
        document.getElementById("captchaQuestion").innerText = `${num1} + ${num2} = `;
    }

    function openModal() {
        generateCaptcha();
        document.getElementById("enquiryModal").style.display = "block";
    }
    document.getElementById("enquireButton").onclick = openModal;
    document.getElementById("consultationButton").onclick = openModal;  
    document.getElementById("consultationButton2").onclick = openModal;
    document.getElementById("consultationButton3").onclick = openModal;

    document.getElementById("closeModal").onclick = function() {
        document.getElementById("enquiryModal").style.display = "none";
        document.getElementById("feedbackMessage").style.display = "none"; 
    };

    document.getElementById("enquiryForm").addEventListener("submit", function(event) {
        event.preventDefault(); 

        let isValid = true;

        const name = document.getElementById("name").value.trim();
        if (name === "") { showError("nameError", "Name is required"); isValid = false; } else { hideError("nameError"); }

        const email = document.getElementById("email").value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "") { showError("emailError", "Email is required"); isValid = false; } 
        else if (!emailPattern.test(email)) { showError("emailError", "Enter a valid email"); isValid = false; } 
        else { hideError("emailError"); }

        const contact = document.getElementById("contact").value.trim();
        const contactPattern = /^[0-9]{10}$/;
        if (contact === "") { showError("contactError", "Contact number is required"); isValid = false; } 
        else if (!contactPattern.test(contact)) { showError("contactError", "Enter a valid 10-digit number"); isValid = false; } 
        else { hideError("contactError"); }

        const message = document.getElementById("message").value.trim();
        if (message === "") { showError("messageError", "Message is required"); isValid = false; } 
        else { hideError("messageError"); }

        const type = document.getElementById("type").value;
        if (type === "") { showError("typeError", "Please select a type"); isValid = false; } 
        else { hideError("typeError"); }

        // CAPTCHA Validation
        const captchaInput = document.getElementById("captchaAnswer").value.trim();
        if (captchaInput === "" || parseInt(captchaInput) !== correctCaptchaAnswer) {
            showError("captchaError", "Incorrect CAPTCHA answer");
            isValid = false;
        } else {
            hideError("captchaError");
        }

        if (!isValid) return;

        const formData = new FormData(this);
        fetch('bamboo_submit.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            const feedbackMessage = document.getElementById("feedbackMessage");
            if (data.success) {
                feedbackMessage.style.color = "green";
                feedbackMessage.innerText = "Enquiry submitted successfully!";
                this.reset();
                generateCaptcha(); // Refresh CAPTCHA
            } else {
                feedbackMessage.style.color = "red";
                feedbackMessage.innerText = "Error submitting enquiry. Please try again.";
            }
            feedbackMessage.style.display = "block";
            setTimeout(() => { document.getElementById("enquiryModal").style.display = "none"; location.reload(); }, 2000);
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Something went wrong. Please try again.");
        });
    });

    function showError(elementId, message) {
        const errorElement = document.getElementById(elementId);
        errorElement.innerText = message;
        errorElement.style.display = "block";
    }

    function hideError(elementId) {
        const errorElement = document.getElementById(elementId);
        errorElement.style.display = "none";
    }
</script>



<!-- end enquirty -->




<!--	Footer   start-->
<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
