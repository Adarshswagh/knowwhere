<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/knowcontact.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




    <title>Document</title>
</head>
<body>
    
<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->


  <!-- banner -->
  <section id="banner-contact1">
    <div class="banner-contact" >
        <div class="contact-content">
            <h2 class="contact-heading">Contact US</h2>
            <p class="contact-para"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">About Us</a></p>
        </div>
    </div>
</section>

<!--end banner  -->

 <!-- get in touch -->


 <section class="contact-section">
    <div class="contact-container">
    <div class="form-container">
            <form id="contactForm" style="text-align:center">
                <input type="text" name="name" placeholder="First Name" required>
                <input type="text" name="contact" placeholder="contact" required>
                <input type="email" name="email" placeholder="Email" required class="email-group">
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit" style="margin-top:30px">SEND MESSAGE</button>
            </form>
        </div>

    <!-- Thank You Modal -->
    <div id="thankYouModal" style="display:none; position:fixed; top:20%; left:50%; transform:translate(-50%, -50%); background:#d4edda; padding:20px; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.2); z-index:1000;">
        <span id="closeThankYouModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Thank You!</h3>
        <p style="text-align: left; color: #050f17; font-size: 14px; font-family: 'Lexend', Sans-serif; max-width: 700px;">
            Thank you for your interest. We will get back to you soon.
        </p>
    </div>

            <script>
                        document.getElementById("contactForm").onsubmit = function(event) {
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
                            // Close the form and show the Thank You modal
                            document.getElementById("contactForm").reset();  // Reset the form fields
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

                // Close Thank You modal and reset the form
                document.getElementById("closeThankYouModal").onclick = function() {
                    document.getElementById("thankYouModal").style.display = "none";
                    document.getElementById("contactForm").reset(); // Reset the form when closing the modal
                };

        </script>


        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p style="color: white;">Ready to make your real estate dreams a reality? Get in touch with Knowhere for trusted guidance, tailored solutions, and a seamless property experience.</p>
            <ul>
            <li style="color:#fff;">
                <i class="fas fa-map-marker-alt"></i>
                <a href="https://maps.app.goo.gl/2Sxk7Gus97hJMNT7A" target="_blank" style="color:#fff; text-decoration:none;">
                    Wakad, Pimpri-Chinchwad, Pune 411057
                </a>
            </li>

                <li style="color:#fff;">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@knowhere.in" style="color:#fff; text-decoration:none;">
                        info@knowhere.in
                    </a>
                </li>
                <li style="color:#fff;">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+919112211291" style="color:#fff; text-decoration:none;">
                        +91 91122 11291
                    </a>
                </li>
            </ul>

            <div class="social-icon facebook">
             <a href="https://www.facebook.com/knowhererealestate/">   <i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="social-icon twitter">
             <a href="https://www.instagram.com/knowhere_realestate/">   <i class="fab fa-instagram"></i></a>
            </div>
            

        </div>

        

    </div>
</section>


 <!-- end get iin touch -->

 <!-- map -->
 <div class="map-container">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.85175304397!2d73.69835373134883!3d18.52346201558182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9c942ac6da1%3A0xaf0c3b2d5db3b890!2sKnowhere%20Real%20Estate%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1729160471039!5m2!1sen!2sin" width="1400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        width="100%"
        height="450"
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

  <!-- end map -->




   <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>