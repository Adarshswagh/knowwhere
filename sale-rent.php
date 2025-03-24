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
    <link rel="stylesheet" href="css/sale-rent.css">

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
            <h2>Sale or Rent</h2>
            <p style="text-align:center;"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Sale or Rent</a></p>
        </div>
    </div>
</section>

<!-- end banner -->



<!-- first section -->
<section class="premium-section">
    <div class="premium-content">
        <h2>About Sale or Rent</h2>
        <p>
            Embrace complete digital transformation with our powerhouse digital marketing company. 
            One of Pune’s top digital marketing agencies, we provide all services – Branding, Marketing, 
            Advertising – that will propel your business towards success on full speed. 
            We fuel comprehensive Online Presence, from SEO, SMM, and web development to graphic design, 
            content, and email marketing.
        </p>
        <!-- <ul class="premium-checklist">
            <div class="checklist-column">
                <li><span>✔</span> Turning Dreams into Reality</li>
                <li><span>✔</span> Industry Leadership</li>
                <li><span>✔</span> Lasting Relationships</li>
                <li><span>✔</span> Client-Centered Approach</li>
                <li><span>✔</span> Transparency and Trust</li>

            </div>
            
        </ul> -->
        <a href="rentproject.php" ><button class="apply-btn">Rent property →</button></a>
        <a href="saleproject.php" ><button class="apply-btn">Sell property →</button></a>

    </div>

    <div class="property-selection-container">
        <img id="property-image" src="images/sale-rent.png" alt="Select an option" class="property-img">
    </div>

</section>

<!-- end -->

<!-- post guide section -->

<div class="post-guide-section">
    <div class="post-guide-header">
        <h2 style=" color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em; color:#A8894D; font size: 20px;">How to post to get the most?</h2>
        <p>Selling/renting property is no more a challenge with knohwere. Renting / Selling a house has become easy with the internet and easier with us! We will handle the process of selling your property from start to finish. Follow these steps to begin your home selling journey.</p>
    </div>
    <div class="post-guide-grid">
        <div class="post-step">
            <img src="images/house (1).png" alt="Show off your property" >
            <h3 style="color:#A8894D; font-size: 20px;">Show off your property</h3>
            <p>Sign up or log in to knohwere and create a free property ad post with good pictures, detailed video, and other important information like the type, price, size, location, etc.</p>
        </div>
        <div class="post-step">
            <img src="images/assets.png" alt="Property Proposal">
            <h3 style="color:#A8894D; font-size: 20px;">Property Proposal</h3>
            <p>To attract buyers or renters, you have to put your best info forward. Jot down all the advantages and benefits of your property that the renter or buyer may want to avail.</p>
        </div>
        <div class="post-step">
            <img src="images/property.png" alt="Needful Negotiations">
            <h3 style="color:#A8894D; font-size: 20px;">Needful Negotiations</h3>
            <p>No one can sell your property better than you. Price is the most important factor. We suggest you inspect, negotiate, and seal the deal. Do Not Under-Price!</p>
        </div>
    </div>
</div>
<!-- post guide section end-->




<section class="container">
    <section class="business-loan" style = "background-color: #050f17;">
        <div class="image-container" style="height:325px;    max-width: 640px;">
                <img src="images/bannerabout.jpg" alt="People in a business setting">
            </div>
            <div class="content" style="max-width: 562px;">
                <h2 style=" color: #A8894D;
        font-family: 'Italiana', Sans-serif;
        font-size: 40px;
        font-weight: 400;
        line-height: 1.3em;">Let Us Show Off Your Property.</h2>
                <p style = "text-align:left; font-size:15px;">Millions of property buyers and renters check listings on Knowhere every day! We will highlight your property to them and if they find your property suitable, they can contact you immediately and directly. Tip: Clients love true info on listings.</p>
                
            </div>
    </section>


    <section class="business-loan" style = "background-color: #050f17; padding-left:140px;">
    <div class="content" style="max-width: 564px;">
            <h2 style = " color: #A8894D;
        font-family: 'Italiana', Sans-serif;
        font-size: 40px;
        font-weight: 400;
        line-height: 1.3em;">Create a Killer Property Listing.</h2>
                <p style = "text-align:left; font-size:15px;">For Rocket Fast Deals, create a listing with every detail, like the property type, your expected price and other advantages of the property. Property pictures are very important. Tip: Listings with at least 5 great pics get maximum enquiries.</p>
                
            </div>
        <div class="image-container" style="height:325px;">
            <img src="images/bannerabout.jpg" alt="People in a business setting">
        </div>
       
    </section>


    <section class="business-loan" style = "background-color: #050f17;">
        <div class="image-container" style="height:325px;   max-width: 640px;">
            <img src="images/bannerabout.jpg" alt="People in a business setting">
        </div>
        <div class="content" style="max-width: 562px;">
            <h2 style = " color: #A8894D;
        font-family: 'Italiana', Sans-serif;
        font-size: 40px;
        font-weight: 400;
        line-height: 1.3em;">Your Property. Your Proposal.</h2>
                <p style = "text-align:left; font-size:15px; ">When an interested party finds your listed property truly suitable and shows deep interest to buy or rent it out, we will share the client’s detail with you over phone or email instantly. Tip: When property owners make proposals, deals happen faster.</p>
            
        </div>
    </section>


    <section class="business-loan" style = "background-color: #050f17; padding-left:140px;">
    <div class="content" style="    max-width: 562px;">
            <h2 style = " color: #A8894D;
        font-family: 'Italiana', Sans-serif;
        font-size: 40px;
        font-weight: 400;
        line-height: 1.3em;">Showing, Negotiating, Closing.</h2>
            <p style = "text-align:left; font-size:15px;">We know that no one can sell your property better than you. After all, only you know everything that a buyer or renter needs to know to close the deal. Its time for site inspections, negotiations, paperwork checks and deal closure. Tip: Don’t under-price.</p>
            
        </div>
        <div class="image-container" style="height:325px;     max-width: 640px;">
            <img src="images/bannerabout.jpg" alt="People in a business setting">
        </div>
       
    </section>

        <section class="business-loan" style = "background-color: #050f17;">
                <div class="image-container" style="height:325px;    max-width: 640px;">
                    <img src="images/bannerabout.jpg" alt="People in a business setting">
                </div>
                <div class="content" style="max-width: 564px;">
                    <h2 style = " color: #A8894D;
            font-family: 'Italiana', Sans-serif;
            font-size: 40px;
            font-weight: 400;
            line-height: 1.3em;">Sell or Rent with Knowhere</h2>
                    <p style = "text-align:left; font-size:15px;">Our property listing site allows you to post property profiles ad for free or you can sell property online and close deals at lightning speed! So, what are you waiting for? Just follow these simple steps, and voila, your property is sold or rented.</p>
                    
                </div>
        </section>
</section>

<!-- end -->






<!-- call to action -->
<section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p>Thank you for choosing Knowhere. Let us turn your real estate dreams into reality.</p>
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
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
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
    const form = document.getElementById('enquiryForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            const name = this.name.value;
            const email = this.email.value;
            const phone = this.contact.value;
            const message = this.message.value;

            const templateParams = {
                to_name: 'attendancedigitalizetheglobe@gmail.com', // Replace with the recipient's email
                from_name: name,
                user_email: email,
                user_number: phone,
                message: message
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
</script>
<!-- end enquirty -->


<!--	Footer   start-->
<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
