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
    <link rel="stylesheet" href="css/interiorcss.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>

<style>
    /* amenities */
/* Background color and text alignment */
.services-section {
    background-color: #050f17;
    color: white;
    text-align: center;
    padding-top: 100px;
    padding: 100px;
}

.services-section h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.services-section p {
    font-size: 16px;
    margin-bottom: 30px;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.service-item {
    background-color: #050f17;
    color: white;
    border-radius: 8px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: transform 0.3s, box-shadow 0.3s;
    border: 1px solid #A8894D;
}

.service-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.service-item img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
    /* filter: invert(46%) sepia(30%) saturate(431%) hue-rotate(315deg) brightness(95%) contrast(83%); */
}

.service-item p {
    margin: 0;
    font-weight: 500;
    color: white;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .services-section h2 {
        font-size: 20px;
    }

    .services-section p {
        font-size: 14px;
    }
}
/* services end */

/* turnkey services */

/* General Styling */
.turnkey-services-section {
    background-color: #050f17;
    color: white;
    padding: 40px 20px;
    text-align: center;
}

.turnkey-services-intro {
    background-color: #fce8e8;
    color: #050f17;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
}

.turnkey-services-intro h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.turnkey-services-intro p {
    font-size: 16px;
    margin-bottom: 15px;
}

.know-more {
    color: #e74c3c;
    font-weight: bold;
    text-decoration: none;
    font-size: 14px;
}

.turnkey-services-grid {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.service-box {
    background-color: white;
    color: #050f17;
    border-radius: 10px;
    padding: 20px;
    width: 250px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.service-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.service-box img {
    width: 80px;
    height: 80px;
    margin-bottom: 15px;
}

.service-box h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.service-box p {
    font-size: 14px;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .turnkey-services-intro h2 {
        font-size: 20px;
    }
    
    .turnkey-services-intro p {
        font-size: 14px;
    }

    .turnkey-services-grid {
        flex-direction: column;
        align-items: center;
    }

    .service-box {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .turnkey-services-intro h2 {
        font-size: 18px;
    }

    .turnkey-services-intro p {
        font-size: 13px;
    }

    .service-box h3 {
        font-size: 16px;
    }

    .service-box p {
        font-size: 12px;
    }
}

/* turnkey serives end */

.about-content button {
    background-color: #A8894D    ;
    color: #140f0f;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 0.9rem;
    cursor: pointer;
}

.about-content button:hover {
    background-color: #ffffff;
    color: #1d1f27;
}

/* gallery end */

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



</style>
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->


  <!-- banner -->
  <section id="banner-main">
    <div class="banner1" >
        <div class="banner-content">
            <h2>Interior Design</h2>
            <p style = "text-align:center;"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Interior Design</a></p>
        </div>
    </div>
</section>


<!--  -->


<!-- about section -->

<section class="premium-section">
    <div class="premium-content">
        <h2>About Interior</h2>
        <p>
            
At Knowhere Interiors, we believe in creating spaces that reflect your personality and lifestyle. Our team of skilled designers and craftsmen work tirelessly to bring your dream interiors to life, whether it's a cozy home, a chic office, or a stylish commercial space. With our innovative designs and attention to detail, we ensure that every project is a masterpiece of functionality and beauty.

        </p>
        <ul class="premium-checklist">
            <div class="checklist-column">
                <li><span>✔</span> Turning Dreams into Reality</li>
                <li><span>✔</span> Industry Leadership</li>
                <li><span>✔</span> Lasting Relationships</li>
                <li><span>✔</span> Client-Centered Approach</li>
                <li><span>✔</span> Transparency and Trust</li>

            </div>
            
        </ul>
        <button class="apply-btn" id="consultationButton">Read More →</button>
    </div>

        <div class="premium-form-container" style="height:400px;">
            <img src="images/interior.png" alt="People in a business setting">
        </div>
</section>
<!-- about section end -->


<!-- why choose us -->
<div class="why-choose-us">
    <h2 style= " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 35px;
    font-weight: 400;
    line-height: 1.3em; text-align:center;">Why Choose Us</h2>
    <p style = "text-align:center;">We work to an extremely high standard of customer satisfaction</p>
    <div class="features">
        <div class="feature">
            <div class="icon">💡</div>
            <h3>Full Service</h3>
            <p style = "text-align:center;">Not sure where to start? Let us help. We can handle all aspects of your real estate needs.</p>
        </div>
        <div class="feature">
            <div class="icon">💲</div>
            <h3>Deliver Value</h3>
            <p style = "text-align:center;">We pledge to always provide optimal value for each and every client.</p>
        </div>
        <div class="feature">
            <div class="icon">🤝</div>
            <h3>Partners</h3>
            <p style = "text-align:center;">We view our stakeholders as partners in our mission to make real estate seamless.</p>
        </div>
        <div class="feature">
            <div class="icon">🛡️</div>
            <h3>Integrity</h3>
            <p style = "text-align:center;">Our integrity forms the bedrock of our relationships and business success.</p>
        </div>
    </div>
</div>

<!-- end why choose us -->


<!-- property type -->
<div class="construction-section">
    <div class="construction-content">
        <h2>Home Construction Services In Pune</h2>
        <p>Flawless construction powered by deep expertise.</p>
    </div>
    <div class="construction-cards">
        <!-- Residential Property -->
        <div class="construction-card" onclick="showForm('residential')">
            <img src="images/blog1.jpg" alt="Residential Property">
            <div class="construction-overlay">
                <div class="circle-arrow">
                    <span class="arrow">↗</span>
                    <span class="explore-text">Explore More</span>
                </div>
                <div class="text-content">
                    <h3>Residential Properties</h3>
                </div>
            </div>
        </div>

        <!-- Commercial Property -->
        <div class="construction-card" onclick="showForm('commercial')">
            <img src="images/blog2.jpg" alt="Commercial Property">
            <div class="construction-overlay">
                <div class="circle-arrow">
                    <span class="arrow">↗</span>
                    <span class="explore-text">Explore More</span>
                </div>
                <div class="text-content">
                    <h3>Commercial Properties</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Residential Form Section -->
<div id="residential-form-section" class="form-section">
    <h2>Residential Property Inquiry</h2>
    <div class="section-container">
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\home design.png" alt="Sofas">
            <p class="interior-box-p" >Design</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\modular furniturre.png" alt="Sofas">
            <p class="interior-box-p" >Modular Furniture</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\carpentary work.png" alt="Coffee Tables">
            <p class="interior-box-p" >Carpentery Work</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\modular kithcen.png" alt="Beds">
            <p class="interior-box-p" >Modular Kitchen</p>
        </div>
    </div>
    <div class="section-container">
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\Painting.png" alt="Beds">
            <p class="interior-box-p" >Painting</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\tiles work.png" alt="Beds">
            <p class="interior-box-p" >Tiles Work</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\gypsum work.png" alt="Beds">
            <p class="interior-box-p" >Gypsum Work</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\electrical work.png" alt="Beds">
            <p class="interior-box-p" >Electrical Work</p>
        </div>
    </div>
    <div class="section-container">
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\smart lock.png" alt="Beds">
            <p class="interior-box-p" >Smart Lock System</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\plumbing.png" alt="Beds">
            <p class="interior-box-p" >Plumbing Work</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\deep cleanign.png" alt="Beds">
            <p class="interior-box-p" >Deep Cleaning</p>
        </div>
    </div>

    
</div>

<!-- Commercial Form Section -->
<div id="commercial-form-section" class="form-section">
    <h2>Commercial Property Inquiry</h2>
    <div class="section-container">
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\office design.png" alt="Sofas">
            <p class="interior-box-p" >Design</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\office work station.png" alt="Sofas">
            <p class="interior-box-p" >Office Work Station</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\chairs.png" alt="Coffee Tables">
            <p class="interior-box-p" >Chairs</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\network.png" alt="Beds">
            <p class="interior-box-p" >Networking</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\electrical in office.png" alt="Beds">
            <p class="interior-box-p" >Electrical</p>
        </div>
    </div>

    <div class="section-container">
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\ac installation.png" alt="Beds">
            <p class="interior-box-p">AC Installation</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\bio metric.png" alt="Coffee Tables">
            <p class="interior-box-p">Bio Metric</p>
        </div>
        <div class="item" style="border-raius:0px;">
            <img src="images\interiorservice\cctv installation.png" alt="Beds">
            <p class="interior-box-p">CCTV Installation</p>
        </div>
        <div class="item" style="border-raius:0;">
            <img src="images\interiorservice\modular furniturre.png" alt="Beds">
            <p class="interior-box-p">Modular Furniture </p>
        </div>
    </div>
</div>


<script>
    function showForm(type) {
    // Hide both forms first
    document.getElementById("residential-form-section").style.display = "none";
    document.getElementById("commercial-form-section").style.display = "none";

    // Get the target section
    let targetSection = null;

    // Show the relevant form and set the target section
    if (type === "residential") {
        targetSection = document.getElementById("residential-form-section");
    } else if (type === "commercial") {
        targetSection = document.getElementById("commercial-form-section");
    }

    if (targetSection) {
        targetSection.style.display = "block";

        // Smooth scroll to the form section
        targetSection.scrollIntoView({ behavior: "smooth", block: "start" });
    }
}


</script>

 <!-- end property type -->



<!-- how we work -->
<div class="how-we-work">
  <div class="content">
    <!-- Timeline Section -->
    <div class="timeline-section">
      <h2>The Way We Work</h2>
      <p>Five steps is all it takes to elevate your style of living.</p>

      <!-- Timeline with connected points -->
      <div class="timeline">
        <div class="line"></div>
        <div class="step" data-index="0">1</div>
        <div class="step" data-index="1">2</div>
        <div class="step" data-index="2">3</div>
        <div class="step" data-index="3">4</div>
        <div class="step" data-index="4">5</div>
      </div>

      <!-- Details Section -->
      <div class="details">
        <h3 id="step-title">Meet Us</h3>
        <p id="step-description">
          Initial meeting to understand your requirements and expectations.
        </p>
      </div>
    </div>
  </div>
</div>







<script>
const steps = document.querySelectorAll(".step");
const title = document.getElementById("step-title");
const description = document.getElementById("step-description");
const lineProgress = document.createElement("div");
lineProgress.classList.add("line-progress");
document.querySelector(".timeline").appendChild(lineProgress);

const stepData = [
  {
    title: "Meet Us",
    description: "Our journey begins with an initial meeting to understand your requirements, vision, and expectations. Let’s plan your dream together.",
  },
  {
    title: "Scope of Work",
    description: "We define the project scope, deliverables, and timelines while ensuring we’re aligned with your goals and preferences.",
  },
  {
    title: "Seal the Deal",
    description: "Once we agree on the scope, terms, and conditions, we finalize the deal and move to execution with confidence.",
  },
  {
    title: "Execution",
    description: "Our expert team brings your vision to life with precision and excellence. We keep you updated at every step of the process.",
  },
  {
    title: "Stamp of Approval",
    description: "After completing the project, we ensure everything meets your expectations. Your satisfaction is our final seal of approval.",
  },
];

let currentStep = 0;

// Update step and progress
function updateStep(index) {
  steps.forEach((step, idx) => {
    step.classList.toggle("active", idx === index);
  });

  title.textContent = stepData[index].title;
  description.textContent = stepData[index].description;

  // Animate the progress line
  const progressPercentage = (index / (steps.length - 1)) * 100;
  lineProgress.style.width = `${progressPercentage}%`;
}

// Auto-rotate steps
function autoRotateSteps() {
  currentStep = (currentStep + 1) % stepData.length;
  updateStep(currentStep);
}

let interval = setInterval(autoRotateSteps, 5000); // 5 seconds

// Add click event for manual navigation
steps.forEach((step, index) => {
  step.addEventListener("click", () => {
    clearInterval(interval); // Stop auto-rotation when clicked
    updateStep(index);
    currentStep = index;
    interval = setInterval(autoRotateSteps, 5000); // Restart auto-rotation
  });
});

// Initialize the first step
updateStep(currentStep);

</script>




<!-- end how we worl -->


















<!-- points -->

<!-- <h2 style= " color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 35px;
    font-weight: 400;
    line-height: 1.3em; text-align:center; padding-top:100px;">Discover Your Dream Home: Dive into Our Decor & Furniture Collection!</h2>
<div class="section-container">
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\home design.png" alt="Sofas">
        <p class="interior-box-p" >Design</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\modular furniturre.png" alt="Sofas">
        <p class="interior-box-p" >Modular Furniture</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\carpentary work.png" alt="Coffee Tables">
        <p class="interior-box-p" >Carpentery Work</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\modular kithcen.png" alt="Beds">
        <p class="interior-box-p" >Modular Kitchen</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\Painting.png" alt="Beds">
        <p class="interior-box-p" >Painting</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\tiles work.png" alt="Beds">
        <p class="interior-box-p" >Tiles Work</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\gypsum work.png" alt="Beds">
        <p class="interior-box-p" >Gypsum Work</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\electrical work.png" alt="Beds">
        <p class="interior-box-p" >Electrical Work</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\smart lock.png" alt="Beds">
        <p class="interior-box-p" >Smart Lock System</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\plumbing.png" alt="Beds">
        <p class="interior-box-p" >Plumbing Work</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images\interiorservice\deep cleanign.png" alt="Beds">
        <p class="interior-box-p" >Deep Cleaning</p>
    </div>
</div>

<div class="section-container">
    <div class="item" style="border-raius:0px;">
        <img src="images/kids.png" alt="Beds">
        <p class="interior-box-p">Kids Storage</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images/chair.png" alt="Coffee Tables">
        <p class="interior-box-p">Lounges Chairs</p>
    </div>
    <div class="item" style="border-raius:0px;">
        <img src="images/kids2.png" alt="Beds">
        <p class="interior-box-p">Kids Beds</p>
    </div>
    <div class="item" style="border-raius:0;">
        <img src="images/wall.png" alt="Beds">
        <p class="interior-box-p">Wall Scones</p>
    </div>
  
</div> -->


<!-- points end -->


















<!-- gallery -->
<section class="gallery-section">
    <h3>Our Gallery</h3>
    <h2>Don't just take our word for it</h2>
        <div class="gallery-slider">
            <div class="gallery-container">
                <div class="gallery-item">
                    <img src="./images/digital/d1.png" alt="Gallery Image 1" data-index="0">
                </div>
                <div class="gallery-item">
                    <img src="./images/digital/d2.png" alt="Gallery Image 2" data-index="1">
                </div>
                <div class="gallery-item">
                    <img src="./images/digital/d3.png" alt="Gallery Image 3" data-index="2">
                </div>
                <div class="gallery-item">
                    <img src="./images/digital/d4.png" alt="Gallery Image 4" data-index="3">
                </div>
                <div class="gallery-item">
                    <img src="./images/digital/d5.png" alt="Gallery Image 5" data-index="4">
                </div>
            </div>
        </div>
</section>


<!-- Modal for Fullscreen View -->
<div class="modal" id="imageModal">
    <div class="modal-content">
        <div class="main-image">
            <img id="largeImage" src="" alt="Large Image">
        </div>
        <div class="thumbnails">
            <div class="thumbnail-slider">
                <img src="./images/digital/d1.png" alt="Thumbnail 1" data-index="0">
                <img src="./images/digital/d2.png" alt="Thumbnail 2" data-index="1">
                <img src="./images/digital/d3.png" alt="Thumbnail 3" data-index="2">
                <img src="./images/digital/d4.png" alt="Thumbnail 4" data-index="3">
                <img src="./images/digital/d5.png" alt="Thumbnail 5" data-index="4">
            </div>
        </div>
    </div>
    <button class="close-modal">✖</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const galleryContainer = document.querySelector('.gallery-container');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.getElementById('imageModal');
    const largeImage = document.getElementById('largeImage');
    const thumbnailImages = document.querySelectorAll('.thumbnail-slider img');
    const closeModal = document.querySelector('.close-modal');

    let currentIndex = 0;

    // Clone gallery items for infinite scroll
    galleryItems.forEach((item) => {
        const clone = item.cloneNode(true);
        galleryContainer.appendChild(clone);
    });

    // Modal Functionality
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            modal.style.display = 'flex';
            largeImage.src = item.querySelector('img').src;
            currentIndex = index;
            updateActiveThumbnail();
        });
    });

    // Close Modal
    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Thumbnail Click in Modal
    thumbnailImages.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            largeImage.src = thumbnail.src;
            currentIndex = index;
            updateActiveThumbnail();
        });
    });

    // Update Active Thumbnail in Modal
    function updateActiveThumbnail() {
        thumbnailImages.forEach((img, idx) => {
            img.classList.toggle('active', idx === currentIndex);
        });
    }

    // Automatic Sliding in Modal
    setInterval(() => {
        if (modal.style.display === 'flex') {
            currentIndex = (currentIndex + 1) % galleryItems.length;
            largeImage.src = galleryItems[currentIndex].querySelector('img').src;
            updateActiveThumbnail();
        }
    }, 3000); // 3-second interval
});

    </script>
 <!-- end gallery -->







<!-- testimonial section -->
<section class="testimonials-section">
    <h3>Our Clients</h3>
    <h2>Don't just take our word for it</h2>
    <div class="testimonials-slider">
        <div class="testimonials-container">
            <div class="testimonial">
                <div class="stars">★★★★★</div>
                <p>The DTG team has been a reliable partner for a variety of needs as my business has developed...</p>
                <h4>Radiovision Diagnostics</h4>
                <p class="title">CEO/Founder</p>
            </div>
            <div class="testimonial">
                <div class="stars">★★★★★</div>
                <p>Our whole digital marketing plan is executed by DTG with remarkable competence...</p>
                <h4>Motilal Talera English Medium School, Moshi</h4>
                <p class="title">CEO/Founder</p>
            </div>
            <div class="testimonial">
                <div class="stars">★★★★★</div>
                <p>Due to DTG's creativity and willingness to take on challenges, we hired them...</p>
                <h4>Choose realtywise, Pune</h4>
                <p class="title">CEO/Founder</p>
            </div>
            <!-- Additional testimonials can be added here -->
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.testimonials-container');
    const cards = document.querySelectorAll('.testimonial');

    // Clone cards for seamless infinite scroll
    cards.forEach((card) => {
        const clone = card.cloneNode(true);
        container.appendChild(clone);
    });
});

</script>
<!-- end testimonial -->




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
<section>
<!-- <h2 class="test-tag">Your Dream Home Awaits</h2> -->
</section>

<!-- end call to action -->


 <!-- Enquire Button -->
 <div id="enquireButtonContainer">
    <button id="enquireButton">
        Book A Demo
    </button>
</div>


<!-- Enquire Button -->
<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: 8px;">
        <span id="closeModal" style="position: absolute; top: 10px; color:#000; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
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
                    <option value="Residential">Residential</option>
                    <option value="Commercial">Commercial</option>
                </select>
                <i class="fas fa-angle-down" style="position: absolute; top: 15px; right: 10px; color: #555;"></i>
            </div>
            <small class="error-message" id="typeError"></small>

            <!-- CAPTCHA Section -->
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom:20px;">
                <span id="captchaQuestion" style="font-size: 16px; color:#000; font-weight: bold; width : 18%; align:center;"></span>
                <input type="text" id="captchaAnswer" name="captchaAnswer" placeholder="Enter Answer" required style="width: 100%;  margin-bottom:0px;">
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
        fetch('interior_submit.php', {
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

<!-- end enquiry -->

    


 <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
