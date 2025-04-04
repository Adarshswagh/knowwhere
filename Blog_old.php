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
                                <h1 class="blog-heading" style = "font-size: 40px; color: #A8894D;" >LATEST POST :</h1>
                                <br><hr><br>
                            </div>

                            <a href="blog1.php" class="blog-link">
                                <div class="blog-post">
                                    <img src="./images/blog/blog1.png" alt="Blog 2" style = "width:100%; border: 1px solid #fff">
                                    <h2>Residential vs. Commercial Property: Which is the Better Investment?</h2>
                                    <p>Real estate has long been considered a reliable investment choice, offering potential for both long-term appreciation and steady income streams. But when it comes to investing, a primary question often arises: should you invest in residential or commercial property? Both avenues can be profitable, but they also come with their own sets of risks and rewards. In this blog, we’ll explore the pros and cons of each, focusing on key considerations to help you make an informed decision. </p>
                                    <a href="blog1.php" class="read-link">Read More →</a>
                                </div>
                            </a>                     
                            <hr><br>

                            <a href="blog2.php" class="blog-link">
                                <div class="blog-post">
                                    <img src="./images/blog/blog2.png" alt="Blog 1" style = "width:100%">
                                    <h2>Commercial Property Trends 2024: Where to Invest for Maximum Returns</h2>
                                    <p>The commercial property market has always been influenced by economic shifts, technological advancements, and evolving consumer demands. 2024 brings new opportunities and challenges for investors, making it essential to focus on sectors and regions poised for strong growth. </p>
                                    <a href="blog2.php" class="read-link">Read More →</a>
                                </div>
                            </a>                     
                            <hr><br>

                            <a href="blog3.php" class="blog-link">
                                <div class="blog-post">
                                    <img src="./images/blog/blog3.png" alt="Blog 3" style = "width:100%">
                                    <h2>Plots vs. Ready-to-Move Homes: What Suits Your Investment Goals?</h2>
                                    <p>Investing in real estate can be a powerful way to grow wealth, but whether to invest in a plot or a ready-to-move home depends on your financial goals and investment strategy. In this blog, we’ll explore the primary factors to consider when choosing between plots and ready-to-move homes, from appreciation potential to management demands, so you can decide which option aligns best with your objectives.</p>
                                    <a href="blog3.php" class="read-link">Read More →</a>
                                </div>
                            </a>                     
                            <hr><br>
                        
                        <!-- Add more blogs as needed -->
                    </div>

                    <!-- Sticky Right Section -->
                    <div class="right-sidebar">
                        <div class="sticky-box">
                        
                            <div class="form-container" style ="max-width: 80%;">
                            <h3 class="form-heading">Connect with Us for Tailored Solutions!</h3>
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
                                <h3 style="font-size: 25px;
                                    margin-bottom: 10px;
                                    color: #000000;
                                    
                                    font-weight: 300;
                                    line-height: 1.7em;">Thank You!</h3>
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