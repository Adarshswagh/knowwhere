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

<style>
    button {
    padding: 12px 24px;
    background-color: #ff9900;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    font-family: 'lexend', Sans-serif;
}

button:hover {
    background-color: #e68a00;
}
</style>


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
            <img src="images/h1.png" alt="Show off your property">
            <h3 style ="color: #A8894D;">Comprehensive Eco-Friendly Solutions</h3>
            <pstyle="text-align:center;">Our holistic approach extends beyond bamboo, integrating mud architecture and solar energy to offer sustainable solutions that cater to the needs of modern living.  </p>
        </div>
        <div class="post-step">
            <img src="images/h2.png" alt="Property Proposal">
            <h3 style ="color: #A8894D;">Artistic Excellence</h3>
            <p style="text-align:center;">To attract buyers or renters, you have to put your best info forward. Jot down all the advantages and benefits of your property that the renter or buyer may want to avail.</p>
        </div>
        <div class="post-step">
            <img src="images/h3.png" alt="Needful Negotiations">
            <h3 style ="color: #A8894D;">Innovative Design and Construction</h3>
            <p style="text-align:center;">We merge traditional craftsmanship with modern sustainability principles, delivering innovative bamboo constructions that are as visually stunning as they are unique.</p>
        </div>
        
        <div class="post-guide-grid">
        <div class="post-step">
            <img src="images/h1.png" alt="Show off your property">
            <h3 style ="color: #A8894D;">Focus on Quality and Sustainability</h3>
            <p style="text-align:center;">Every material sourced, every technique employed, and every design created reflects our dedication to environmental responsibility and excellence.</p>
        </div>
        <div class="post-step">
            <img src="images/h2.png" alt="Property Proposal">
            <h3 style ="color: #A8894D;">Community Empowerment</h3>
            <p style="text-align:center;">We provide fair wages, training, and growth opportunities to bamboo farmers and artisans, fostering social and economic development.</p>
        </div>
        <div class="post-step">
            <img src="images/h3.png" alt="Needful Negotiations">
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
        <p style="text-align:center; font-size:30px;">We blend traditional craftsmanship with modern design to transform bamboo into functional art and architecture.</p>
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
                <div class="buttons">
                    <button href="#" class="view-projects">View Projects</button>
                    <button href="#" class="book-consultation">Book a Consultation</button>
                </div>
            </div>
        </div>
        <div class="image-content">
            <img src="images/bamboo1.png" alt="Bamboo Constructions">
        </div>
    </div>
</div>


<div class="main-verticals-section" >
    <div class="content-wrapper" style="flex-direction:row-reverse; padding-top:100px;">
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
                    <button href="#" class="view-projects">View Projects</button>
                    <button href="#" class="book-consultation">Book a Consultation</button>
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
                    <button href="#" class="view-projects">View Projects</button>
                    <button href="#" class="book-consultation">Book a Consultation</button>
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


<section class="contact-section">
    <div class="contact-container">
        <div class="form-container">
            <form style="text-align:center">
                <div class="input-group" style="width:100%">
                    <input type="text" name="first-name" placeholder="First Name" required>
                    <input type="text" name="last-name" placeholder="Last Name" required>
                </div>
                <input type="email" name="email" placeholder="Email" required class="email-group">
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit" style="margin-top:30px">SEND MESSAGE</button>
            </form>
        </div>
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>Ready to make your real estate dreams a reality? Get in touch with Knowhere for trusted guidance, tailored solutions, and a seamless property experience.</p>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> Wakad, Pimpri-Chinchwad, Maharashtra 411057</li>
                <li><i class="fas fa-envelope"></i> example@mail.com</li>
                <li><i class="fas fa-phone-alt"></i>+91 91122 11291</li>
                
            </ul>
        </div>
    </div>
</section>

<!-- call to action -->
<section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullam corper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- end call to action -->




<!--	Footer   start-->
<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
