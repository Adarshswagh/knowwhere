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
    <title>Property List</title>

    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>'
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

<!-- navbar -->
<?php include("include/header.php");?>
<!-- end navbar -->

<!-- banner -->
<section id="banner-main">
    <div class="banner">
        <div class="banner-content">
            <h2>Our Gallery</h2>
            <p class="banner-bread"><a href="index.php" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Projects</a></p>
        </div>
    </div>
</section>
<!--end banner -->

<!-- properties -->

<div class="container py-5">
        <ul class="nav nav-pills justify-content-center mb-4" id="gallery-tabs">
            <li class="nav-item"><button class="apply-btn active" data-filter="all">ALL</button></li>
            <li class="nav-item"><button class="apply-btn" data-filter="office">Office Event</button></li>
            <li class="nav-item"><button class="apply-btn" data-filter="events">Events</button></li>
            <li class="nav-item"><button class="apply-btn" data-filter="awards">Awards</button></li>
            <li class="nav-item"><button class="apply-btn" data-filter="internship">Internship</button></li>
            <li class="nav-item"><button class="apply-btn" data-filter="Inauguration">Inauguration</button></li>

        </ul>

        <div class="row g-3" id="gallery">
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\1.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\2.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\3.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\4.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\5.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\6.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\7.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\8.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\9.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\10.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\11.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\12.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\13.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\14.png" class="img-fluid rounded" alt="Office">
            </div>
            <div class="col-md-4 gallery-item show" data-category="office">
                <img src="images\Office event\15.png" class="img-fluid rounded" alt="Office">
            </div>



            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\1.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\2.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\3.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\4.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\5.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\6.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\7.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\8.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\9.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\10.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\11.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\12.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\13.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\14.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\15.png" class="img-fluid rounded" alt="Events">
            </div>
            <div class="col-md-4 gallery-item show" data-category="events">
                <img src="images\Outdoor Events\16.png" class="img-fluid rounded" alt="Events">
            </div>




            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\1.png" class="img-fluid rounded" alt="Awards">
            </div>
            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\2.png" class="img-fluid rounded" alt="Awards">
            </div>
            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\3.png" class="img-fluid rounded" alt="Awards">
            </div>
            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\4.png" class="img-fluid rounded" alt="Awards">
            </div>
            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\5.png" class="img-fluid rounded" alt="Awards">
            </div>
            <div class="col-md-4 gallery-item show" data-category="awards">
                <img src="images\Awards\6.png" class="img-fluid rounded" alt="Awards">
            </div>




            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\1.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\2.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\3.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\4.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\5.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\6.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\7.png" class="img-fluid rounded" alt="Internship">
            </div>
            <div class="col-md-4 gallery-item show" data-category="internship">
                <img src="images\Internship\8.png" class="img-fluid rounded" alt="Internship">
            </div>




            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\1.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\2.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\3.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\4.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\5.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\6.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\7.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\8.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\9.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\10.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            <div class="col-md-4 gallery-item show" data-category="Inauguration">
                <img src="images\Inaugration\11.png" class="img-fluid rounded" alt="Inauguration">
            </div>
            

            
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll("#gallery-tabs button");
            const items = document.querySelectorAll(".gallery-item");

            buttons.forEach(button => {
                button.addEventListener("click", function() {
                    const filter = this.getAttribute("data-filter");
                    
                    buttons.forEach(btn => btn.classList.remove("active"));
                    this.classList.add("active");
                    
                    items.forEach(item => {
                        if (filter === "all" || item.getAttribute("data-category") === filter) {
                            item.classList.add("show");
                        } else {
                            item.classList.remove("show");
                        }
                    });
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- end properties -->

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
<!-- end call to action -->

<!-- footer -->
<?php include("include/footer.php");?>
<!-- end footer -->

</body>
</html>
