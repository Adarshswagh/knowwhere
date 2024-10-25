<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/knowblog.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->


  <!-- banner -->
  <section id="banner-blog1">
    <div class="banner-blog" >
        <div class="blog-content">
            <h2 class="blog-heading">Blog</h2>
            <p class="blog-para"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">About Us</a></p>
        </div>
    </div>
</section>

<!--end banner  -->

 <!-- blog section -->
    <section id="blog">
        <div class="container-blog">
                <div class="content">
                    <!-- Blog List Section -->
                     
                    <div class="blog-list">
                            <div class="blog-column">
                                <h1 class="blog-heading">LATEST POST :</h1>
                                <br><hr><br>
                            </div>

                            <a href="#" class="blog-link">
                                <div class="blog-post">
                                    <img src="./images/blog1.jpg" alt="Blog 2">
                                    <h2>‘Best beach in Australia’ to shake QLD coastal records</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                    <a href="#" class="read-link">Read More →</a>
                                </div>
                            </a>                     
                            <hr><br>

                            <a href="#" class="blog-link">
                                <div class="blog-post">
                                    <img src="./images/blog2.jpg" alt="Blog 1">
                                    <h2>Burnt house in shocking condition gets the top price</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                    <a href="#" class="read-link">Read More →</a>
                                </div>
                            </a>                     
                            <hr><br>

                            <a href="#" class="blog-link">
                                <div class="blog-post">
                                    <img src="./images/blog3.jpg" alt="Blog 3">
                                    <h2>QLD’s hoarder house attracts 39 registered bidders</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                    <a href="#" class="read-link">Read More →</a>
                                </div>
                            </a>                     
                            <hr><br>
                        
                        <!-- Add more blogs as needed -->
                    </div>

                    <!-- Sticky Right Section -->
                    <div class="right-sidebar">
                        <div class="sticky-box">
                        
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


                            <script>
                                // Initialize intl-tel-input for the phone input field
                                var phoneInput = document.querySelector("#phone");

                                var iti = window.intlTelInput(phoneInput, {
                                    initialCountry: "auto",  // Automatically set the user's country
                                    geoIpLookup: function(success, failure) {
                                        fetch('https://ipinfo.io/json', {headers: {'Accept': 'application/json'}})
                                        .then((resp) => resp.json())
                                        .then((resp) => { success(resp.country); })
                                        .catch(() => { success('us'); });
                                    },
                                    separateDialCode: true,  // Show the country code separately
                                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", // Required for validation/formatting
                                });

                                document.getElementById('contactForm').addEventListener('submit', function(event) {
                                event.preventDefault();

                                var phoneNumber = iti.getNumber();  // Get the full international number
                                var email = document.getElementById('email').value;
                                var errorMessage = document.getElementById('error-message');

                                // Validate the phone number
                                if (!iti.isValidNumber()) {
                                    errorMessage.innerText = 'Please enter a valid phone number.';
                                    return;
                                }

                                // Additional validation logic for email, etc.

                                // If valid, send the form data
                                errorMessage.innerText = '';  // Clear the error message
                                alert('Form submitted successfully with phone number: ' + phoneNumber);
                                        });
                            </script> 


                        </div>
                    </div>
                </div>
        </div>
    </section>    
<!-- end blog section -->

 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
    
</body>
</html>