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
    <link rel="stylesheet" href="css/construction.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>
<style>
    /* get in touch */
.contact-section {
    padding: 115px 0;
    background-color: #050F17;
}

.contact-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.form-container {
    flex: 1;
    padding: 40px;
    border: 1px solid #6c6c6c;
    max-width: 550px;
}

.input-group {
    display: flex;
    gap: 20px; /* Adjust the gap between first and last name fields */
    margin-bottom: 20px;
    
}

.email-group{
    margin-bottom: 20px;
}

.input-group input {
    width: 47%; /* Make both input fields take up equal space */
    font-size: 14px;
    font-family: 'Lexend', sans-serif;
    font-weight: 300;
    line-height: 1.7em;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    color: #fff;
    font-family: 'Lexend', sans-serif;
    font-size: 14px;
}

input::placeholder, textarea::placeholder {
    color: #fff;
}

textarea {
    height: 120px; /* Adjust the height of the message box */
    resize: vertical; /* Make the textarea resizable */
}

button {
    padding: 15px 30px; /* Increase the padding for a larger button */
    background-color: #a38755;
    color: #050F17;
    border: none;
    cursor: pointer;
    margin-top: 20px; /* Adjust margin for space between form elements */
    font-family: 'Lexend', sans-serif;
}

button:hover {
    background-color: #fff;
}

.contact-info {
    flex: 1;
    padding: 20px;
    max-width: 555px;
}

.contact-info h2 {
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;
    margin-bottom: 20px;
    color: #e8e8e8;
    font-family: "Italiana", Sans-serif;
}

.contact-info p {
    margin-bottom: 20px;
    font-size: 14px;
    line-height: 1.7em;
    font-weight: 300;
    font-family: "Lexend", Sans-serif;
    text-align: left;
}

.contact-info ul {
    list-style: none;
    padding-left: 0;

}

.contact-info ul li {
    color: #e8e8e8  ;
    margin-bottom: 10px;
    font-size: 14px;
    font-family: "Lexend", Sans-serif;
    font-weight: 300;
    line-height: 1.7em;
}

.contact-info ul li i {
    margin-right: 10px;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .contact-container {
        flex-direction: column;
    }

    .form-container, .contact-info {
        width: 100%;
    }

    .input-group {
        flex-direction: column; /* Make first and last name stack on top of each other on mobile */
    }

    .contact-info h2 {
        font-size: 28px;
    }
}


/* residential and commercial */

/* Section Styling */
.construction-section {
    background-color: #050f17;
    color: #ffffff;
    text-align: center;
    padding-top: 100px;
    padding-bottom: 100px;
}

.construction-content h2 {
    font-size: 40px; /* Increase heading size */
    /* font-weight: bold; */
    color: #A8894D;
    margin-bottom: 10px;
}

.construction-content p {
    color: #ffffff;
    font-size: 1.3rem; /* Increase paragraph size */
    margin-bottom: 40px;
}

/* Construction Cards Styling */
.construction-cards {
    display: flex;
    justify-content: center;
    gap: 40px; /* Increase space between cards */
}

.construction-card {
    position: relative;
    width: 500px; /* Larger card width */
    overflow: hidden;
    border-radius: 12px;
}

.construction-card img {
    width: 100%;
    height: 300px; /* Larger image height */
    object-fit: cover;
    border-radius: 12px;
    transition: transform 0.3s ease;
}

.construction-card:hover img {
    transform: scale(1.05);
}

.construction-card-title {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    color: #ffffff;
    padding: 18px;
    font-size: 1.3rem; /* Increase text size */
    font-weight: bold;
    text-align: center;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
}

/* Responsive styles for mobile */
@media (max-width: 768px) {
    .construction-cards {
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .construction-card {
        width: 95%; /* Full width on mobile */
    }
}


.service-card:hover{
    background-color: #A8894D;
}

/* residential and commercial end */

/*end  get in touch */
</style>
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->


  <!-- banner -->
  <section id="banner-main">
    <div class="banner1" >
        <div class="banner-content">
            <h2>Construction</h2>
            <p style="text-align:center;"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Construction</a></p>
        </div>
    </div>
</section>


<!-- about section -->
<section class="interior-section">
        <div class="text-content">
            <h1 style = "color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 40px;
    font-weight: 400;
    line-height: 1.3em;">We construct your dream home</h1>
            <p>Track house construction project progress, raise queries, view inspection reports and more.</p>
            <div class="features">
                <ul style = " list-style: none;
    color: white;
    font-size: 25px;
    margin-left: -20px;">
                    <li><span style= "color:#A8894D;">✔</span> View packages, floor plans, design recommendations</li>
                    <li><span style= "color:#A8894D;">✔</span> Capture house construction progress in 3D</li>
                    <li><span style= "color:#A8894D;">✔</span> Realtime tracking until project completion</li>
                </ul>
                <!-- <ul>
                    <li>✔ Faucibus mattis aptent ac</li>
                    <li>✔ Mauris cursus dapibus dictumst</li>
                    <li>✔ Non nisl amet dolor</li>
                </ul> -->
            </div>
        </div>
        <div class="image-content">
            <div class="image-wrapper">
                <!-- <div class="play-button">▶</div> -->
                <img src="images/blog1.jpg" alt="Interior design">
            </div>
        </div>
    </section>

    <!-- how we work -->

    <section class="how-we-work">
        <h2 style = "color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 40px;
    font-weight: 400;
    line-height: 1.3em; padding-top:100px;" >How We Work</h2>
        <p style = "text-align:center;">We ensure peace of mind, trust, and transparent house construction services.</p>
        <div class="work-steps">
            <div class="step">
                <span class="number">01</span>
                <h3>Safe Money Transaction</h3>
                <p style = "text-align:center;">No Advance. Contractor is paid only once the work is complete.</p>
            </div>
            <div class="step">
                <span class="number">02</span>
                <h3>Absolute Transparency</h3>
                <p style = "text-align:center;">Clear and Detailed Quotation. Online tracking of projects</p>
            </div>
            <div class="step">
                <span class="number">03</span>
                <h3>Assured Quality Controls</h3>
                <p style = "text-align:center;">470+ Quality (QASCON) Checks performed by team of experts</p>
            </div>
            <div class="step">
                <span class="number">04</span>
                <h3>Zero Delays</h3>
                <p style = "text-align:center;">Zero tolerance for delays</p>
            </div>
        </div>
    </section>


<!-- residential and commercial -->

<section class="construction-section">
    <div class="construction-content">
        <h2 style = "color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 40px;
    font-weight: 400;
    line-height: 1.3em;" >Home Construction Services In Pune</h2>
        <p style = "text-align: center; font-family:'lexend', sans-serif;">Flawless construction powered by deep expertise.</p>
    </div>
    <div class="construction-cards">
        <div class="construction-card">
            <img src="images/blog1.jpg" alt="House Construction">
            <div class="construction-card-title">Residential Properties</div>
        </div>
        <div class="construction-card">
            <img src="images/blog2.jpg" alt="Construction for Business">
            <div class="construction-card-title">Commercial Properties</div>
        </div>
    </div>
</section>


<!-- residential and commercial end-->

    <!-- service -->

    <div class="service-section">
    <div class="service-container">
        <div class="service-text">
            <h5 style = "color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 30px;
    font-weight: 400;
    line-height: 1.3em; ">Our Service</h5>
            <h2>Solutions for every corner</h2>
            <p>Dapibus fames vitae interdum nascetur facilisi rhoncus felis libero. Placerat leo conubia dapibus tristique integer auctor eget ac.</p>
            <button class="discover-btn">Discover More</button>
        </div>
        <div class="service-cards">
            <div class="service-card">
                <div class="icon">🏛️</div>
                <h3>Architecture</h3>
                <p>Sollicitudin lobortis luctus semper accumsan ultrices risus eros parturient. Tristique proin interdum purus in dapibus dui.</p>
            </div>
            <div class="service-card">
                <div class="icon">🛋️</div>
                <h3>Interior</h3>
                <p>Sollicitudin lobortis luctus semper accumsan ultrices risus eros parturient. Tristique proin interdum purus in dapibus dui.</p>
            </div>
            <div class="service-card">
                <div class="icon">🪑</div>
                <h3>Furniture</h3>
                <p>Sollicitudin lobortis luctus semper accumsan ultrices risus eros parturient. Tristique proin interdum purus in dapibus dui.</p>
            </div>
            <div class="service-card">
                <div class="icon">📐</div>
                <h3>3D Modelling</h3>
                <p>Sollicitudin lobortis luctus semper accumsan ultrices risus eros parturient. Tristique proin interdum purus in dapibus dui.</p>
            </div>
        </div>
    </div>
</div>



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
                <p>Thank you for choosing Knowhere. Let us turn your real estate dreams into reality..</p>
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
