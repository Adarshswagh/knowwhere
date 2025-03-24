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
    <title>Knowhere</title>

    <link rel="stylesheet" href="css/knowabout.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

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
            <h2>About Us</h2>
            <p style="text-align:center;"><a href="#" class="banner-bread" >Home</a> &gt; <a href="#" class="banner-bread">About Us</a></p>
        </div>
    </div>
</section>

<!--end banner  -->

<!-- details -->
<section class="about-section" id="about-section">
    <div class="content">
        <div class="text">
            <h1 class="animate h1-animation">About Knowhere</h1>
            <p class="animate p-animation">At Knowhere, we prioritize your unique needs, providing tailored solutions and fostering lasting client relationships. Our commitment to transparency, integrity, and professionalism has established us as one of the industry’s most trusted consultants.</p>
            <ul class="checklist">
                <div class="list-left">
                    <li class="animate li-animation" style="--delay: 1;"><span>✔</span> Turning Dreams into Reality</li>
                    <li class="animate li-animation" style="--delay: 2;"><span>✔</span> Industry Leadership</li>
                    <li class="animate li-animation" style="--delay: 3;"><span>✔</span> Lasting Relationships</li>
                    <li class="animate li-animation" style="--delay: 4;"><span>✔</span> Client-Centered Approach</li>
                </div>
                <div class="list-right">
                    <li class="animate li-animation" style="--delay: 5;"><span>✔</span> Transparency and Trust </li>
                    <li class="animate li-animation" style="--delay: 6;"><span>✔</span> Trusted Property Consultant</li>
                    <li class="animate li-animation" style="--delay: 7;"><span>✔</span> Core Values</li>
                    <li class="animate li-animation" style="--delay: 8;"><span>✔</span> Experienced Professionals</li>
                </div>
            </ul>
        </div>
        <div class="images">
            <div class="image animate img-animation">
                <img src="./images/aboutmain.jpg" alt="Mansion Interior 1">
            </div>
            
        </div>
    </div>
</section>


 <!-- end details -->


 <!-- counter -->
 <section class="stats-section">
    <div class="stat-box">
        <h1 class="count" data-target="25000">0</h1>
        <p>Happy Clients</p>
    </div>
    <div class="stat-box">
        <h1 class="count" data-target="560">0</h1>
        <p>Complete Projects</p>
    </div>
    <div class="stat-box">
        <h1 class="count" data-target="100000">0</h1>
        <p>Property Sales</p>
    </div>
    <div class="stat-box">
        <h1 class="count" data-target="15">0</h1>
        <p>Years Experience</p>
    </div>
</section>


<script>
   document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".count");

    counters.forEach(counter => {
        const target = +counter.getAttribute("data-target"); // Target value from data attribute
        const speed = 200; // Speed factor for animation

        const updateCount = () => {
            const current = +counter.innerText.replace("+", ""); // Remove "+" to handle number logic
            const increment = Math.ceil(target / speed); // Increment value per step

            if (current < target) {
                counter.innerText = current + increment + "+"; // Append "+" during animation
                setTimeout(updateCount, 10); // Recursively call to continue incrementing
            } else {
                counter.innerText = target + "+"; // Ensure "+" remains when animation completes
            }
        };

        updateCount(); // Start the counter animation
    });
});


    </script>


  <!-- end counter -->

  <!-- vision & mission -->
<section class="vision-mission-section">
    <div class="container1">
        <div class="section-header">
            <div class="section-title">
                <h2 class="animate-title">Vision & Mission</h2>
            </div>
        </div>
        <div class="content">
            <div class="image-box animate-image"></div>
            <div class="text-boxes">
                <div class="text-box animate-text">
                    <h3 class="animate-h3">Vision</h3>
                    <p class="animate-p">To be a leading real estate consultancy, known for exceptional client service, continuous innovation, and adapting to evolving client needs</p>
                    <ul>
                        <li class="animate-li"><span>&#10003;</span> Adaptability</li>
                        <li class="animate-li"><span>&#10003;</span> Value-Added Services</li>
                        <li class="animate-li"><span>&#10003;</span> Sustainability</li>
                        <li class="animate-li"><span>&#10003;</span> Innovative Solutions</li>
                    </ul>
                </div>
                <div class="text-box animate-text">
                    <h3 class="animate-h3">Mission</h3>
                    <p class="animate-p">To empower clients with informed, personalized, and transparent property solutions tailored to their unique needs</p>
                    <ul>
                        <li class="animate-li"><span>&#10003;</span> Informed Decisions</li>
                        <li class="animate-li"><span>&#10003;</span> Personalized Service</li>
                        <li class="animate-li"><span>&#10003;</span> Transparency</li>
                        <li class="animate-li"><span>&#10003;</span> Client Empowerment </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


   <!-- end vision & mission -->


   <!-- why chose us -->
   <section class="why-choose-us">
    <div class="container-whychoose">
        <div class="title">
            <h2 class="animate-title">Why Choose Us</h2>
            <p class="animate-paragraph">At Knowhere, we prioritize your unique needs, providing tailored solutions and fostering lasting client relationships. Our commitment to transparency, integrity, and professionalism has established us as one of the industry’s most trusted consultants.</p>
            <a href="#" class="discover-more animate-anchor">Discover More</a>
        </div>
        <div class="features">
            <div class="feature-box reliable animate-feature">
                <i class="fas fa-building icon-about"></i> <!-- FontAwesome icon -->
                <h3>Reliable</h3>
            </div>
            <div class="feature-box comfortable animate-feature">
                <i class="fas fa-cloud icon-about"></i> <!-- FontAwesome icon -->
                <h3>Comfortable</h3>
            </div>
            <div class="feature-box guarantee animate-feature">
                <i class="fas fa-thumbs-up icon-about"></i> <!-- FontAwesome icon -->
                <h3>Guarantee</h3>
            </div>
            <div class="feature-box affordable animate-feature">
                <i class="fas fa-tag icon-about"></i> <!-- FontAwesome icon -->
                <h3>Affordable</h3>
            </div>
        </div>
    </div>
</section>


    <!-- why choose us -->


<!-- team -->

<section class="project-section">
    <div class="content-wrapper">
        <h2 class="section-title animate-title">Expert Team Behind Knowhere</h2>
        <p class="section-description animate-paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.
        </p>
    </div>
</section>


<section class="custom-team-section">
    <div class="custom-container">
        <div class="custom-team-grid">
            <div class="custom-team-card">
                <img src="./images/girl.jpg" alt="Sarah Jhon" class="custom-team-img">
                <h3 class="custom-team-name">Sarah Jhon</h3>
                <p class="custom-team-role">Mansion Team</p>
                <div class="custom-social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="custom-team-card">
                <img src="./images/boy.jpg" alt="Mike Morales" class="custom-team-img">
                <h3 class="custom-team-name">Mike Morales</h3>
                <p class="custom-team-role">Mansion Team</p>
                <div class="custom-social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="custom-team-card">
                <img src="./images/girl.jpg" alt="Steve Irwin" class="custom-team-img">
                <h3 class="custom-team-name">Steve Irwin</h3>
                <p class="custom-team-role">Mansion Team</p>
                <div class="custom-social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="custom-team-card">
                <img src="./images/girl.jpg" alt="Steve Irwin" class="custom-team-img">
                <h3 class="custom-team-name">Steve Irwin</h3>
                <p class="custom-team-role">Mansion Team</p>
                <div class="custom-social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="custom-team-section">
        <div class="custom-container">
            
            <div class="custom-team-grid">
                <div class="custom-team-card">
                    <img src="./images/girl.jpg" alt="Sarah Jhon" class="custom-team-img">
                    <h3 class="custom-team-name">Sarah Jhon</h3>
                    <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="custom-team-card">
                    <img src="./images/boy.jpg" alt="Mike Morales" class="custom-team-img">
                    <h3 class="custom-team-name">Mike Morales</h3>
                    <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="custom-team-card">
                    <img src="./images/girl.jpg" alt="Steve Irwin" class="custom-team-img">
                    <h3 class="custom-team-name">Steve Irwin</h3>
                    <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="custom-team-card">
                    <img src="./images/girl.jpg" alt="Steve Irwin" class="custom-team-img">
                    <h3 class="custom-team-name">Steve Irwin</h3>
                    <p class="custom-team-role">Mansion Team</p>
                    <div class="custom-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- end team -->



 <!-- call to action -->
 <section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2 class="call-to-cation-h2">Your Gateway to Perfect Spaces</h2>
                <p style ="text-align:center;">Step into a world of opportunities with properties that inspire</p>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>

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
  <!-- end call to action -->


<script>

    document.addEventListener("DOMContentLoaded", () => {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("in-view");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.2 }
        );

        // Select elements to animate
        const animatables = document.querySelectorAll(".animate");
        animatables.forEach((el) => observer.observe(el));
    });

</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const options = {
        threshold: 0.2, // Trigger when 20% of the element is visible
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    }, options);

    // Select all elements with animation classes
    const animateElements = document.querySelectorAll(
        ".animate-title, .animate-image, .animate-text, .animate-h3, .animate-p, .animate-li"
    );

    animateElements.forEach((el) => observer.observe(el));
});

</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const options = {
        threshold: 0.2, // Trigger when 20% of the element is visible
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    }, options);

    // Select all elements to animate
    const animateElements = document.querySelectorAll(
        ".animate-title, .animate-paragraph, .animate-anchor, .animate-feature"
    );

    animateElements.forEach((el) => observer.observe(el));
    });

</script>    

<script>
        document.addEventListener("DOMContentLoaded", () => {
            const teamCards = document.querySelectorAll(".custom-team-card");
            const options = {
                threshold: 0.1, // Trigger when 10% of the section is visible
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        teamCards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add("fade-in");
                            }, index * 500); // 5 seconds delay between cards
                        });
                        observer.unobserve(entry.target); // Stop observing once triggered
                    }
                });
            }, options);

            observer.observe(document.querySelector(".custom-team-section"));
        });

</script>

  <!-- footer -->

   <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>