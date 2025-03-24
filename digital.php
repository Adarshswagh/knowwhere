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
    <link rel="stylesheet" href="css/digital.css">

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
            <h2>Digital Marketing</h2>
            <p style="text-align:center;"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Digital Marketing</a></p>
        </div>
    </div>
</section>

<!-- About section -->
<section class="premium-section">
    <div class="premium-content">
        <h2>About Digitalize The Globe</h2>
        <p>
            Embrace complete digital transformation with our powerhouse digital marketing company. 
            One of Pune’s top digital marketing agencies, we provide all services – Branding, Marketing, 
            Advertising – that will propel your business towards success on full speed. 
            We fuel comprehensive Online Presence, from SEO, SMM, and web development to graphic design, 
            content, and email marketing.
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
        <button class="apply-btn">APPLY FOR A LOAN →</button>
    </div>

    <div class="premium-form-container">
        <form>
            <div class="form-group">
                <input type="text" name="first-name" placeholder="First Name" required>
                <input type="text" name="last-name" placeholder="Last Name" required>
            </div>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Message" required></textarea>
            <button type="submit">SEND MESSAGE</button>
        </form>
    </div>
</section>


<!-- counter -->
<section class="stats-section" style ="padding-bottom:0px;">
    <div class="stat-box">
        <h1 class="count" data-target="100">0+</h1>
        <p style = "text-align:center;">Happy Customers</p>
    </div>
    <div class="stat-box">
        <h1 class="count" data-target="400">0+</h1>
        <p style = "text-align:center;">Successful Projects</p>
    </div>
    <div class="stat-box">
        <h1 class="count" data-target="9">0+</h1>
        <p style = "text-align:center;">Years Experience</p>
    </div>
    <div class="stat-box">
        <h1 class="count" data-target="20">0+</h1>
        <p style = "text-align:center;">Team</p>
    </div>
</section>

  <!-- end counter -->

<!-- post guide section -->

<div class="post-guide-section">
    <div class="post-guide-header">
        <h2
        style = " color: #A8894D;
        font-family: 'Italiana', Sans-serif;
        font-size: 50px;
        font-weight: 400;
        line-height: 1.3em; padding-top:0px;">Our Speciality</h2>
            <p>Adjust your design through a wide range of theme options in the
            development and instantly.</p>
    </div>
    <div class="post-guide-grid">
        <div class="post-step">
            <img src="images/h1.png" alt="Show off your property">
            <h3 style ="color: #A8894D;">Search Engine Optimization</h3>
            <p style="text-align:center;">Optimize your website to rank higher in search engine results, driving more organic traffic and increasing visibility for your target audience.</p>
        </div>
        <div class="post-step">
            <img src="images/h2.png" alt="Property Proposal">
            <h3 style ="color: #A8894D;">Data Analysis</h3>
            <p style="text-align:center;">Data analysis is most important part of better optimization.</p>
        </div>
        <div class="post-step">
            <img src="images/h3.png" alt="Needful Negotiations">
            <h3 style ="color: #A8894D;">Keywords Research</h3>
            <p style="text-align:center;">DTG believes that keyword research is the crucial step of any campaign</p>
        </div>
        
        <div class="post-guide-grid">
        <div class="post-step">
            <img src="images/h1.png" alt="Show off your property">
            <h3 style ="color: #A8894D;">Speed Optimization</h3>
            <p style="text-align:center;">Every material sourced, every technique employed, and every design created reflects our dedication to environmental responsibility and excellence.</p>
        </div>
        <div class="post-step">
            <img src="images/h2.png" alt="Property Proposal">
            <h3 style ="color: #A8894D;">Market Research</h3>
            <p style="text-align:center;">Our experts analyze the data and create a perfect search algorithm specific to the needs of your audience</p>
        </div>
        <div class="post-step">
            <img src="images/h3.png" alt="Needful Negotiations">
            <h3 style ="color: #A8894D;">Better Conversion</h3>
            <p style="text-align:center;">Our FB & Google ad expert is experienced in field and provides you the better conversion.</p>
        </div>
    </div>
</div></div>
<!-- post guide section end-->



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
                <p style =text-align:center;>Thank you for choosing Knowhere. Let us turn your real estate dreams into reality.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- end call to action -->


<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Function to animate the counting
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 200; // Adjust speed by changing 200

        const updateCounter = () => {
            current += increment;
            if (current >= target) {
                element.textContent = target.toLocaleString(); // Ensures the exact target value
            } else {
                element.textContent = Math.ceil(current).toLocaleString();
                requestAnimationFrame(updateCounter); // Smooth animation
            }
        };

        updateCounter();
    }

    // Detect when the stats section comes into view
    const statSection = document.querySelector('.stats-section');
    const statBoxes = document.querySelectorAll('.count');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                statBoxes.forEach(box => {
                    const target = +box.getAttribute('data-target');
                    animateCounter(box, target);
                });
                observer.disconnect(); // Trigger only once
            }
        });
    }, { threshold: 0.5 }); // 50% of the section must be in view

    observer.observe(statSection);
});

</script>

<!--	Footer   start-->
<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
