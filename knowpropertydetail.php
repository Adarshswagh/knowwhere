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

        <link rel="stylesheet" href="css/knowpropertydetail.css">
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
        <div class="banner" >
            <div class="banner-content">
                <h2>Property List</h2>
                <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Services</a></p>
            </div>
        </div>
    </section>

    <!--end banner  -->


    <!-- property -->
    <section class="property-container">

        <?php
		    $id=$_REQUEST['pid']; 
		    $query=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
		    while($row=mysqli_fetch_array($query))
		    {
		 ?>

    
<section class="listing__hero--section">
            <div class="listing__hero--section__inner position-relative">
                <div class="listing__hero--slider">
                    <div class="swiper hero__swiper--column1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <div class=" listing__hero--slider__items position-relative">
                                <img class="listing__hero--slider__media" src="assets/img/hero/listing-details-hero.png" alt="img">
                                <div class="listing__hero--slider__container">
                                    <div class="container">
                                    <!-- Hero Content -->
                                    <div class="listing__hero--slider__content">
                                        <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                            
                                            <h3 class="listing__hero--slider__title">Luxury Family Home</h3>
                                            <span class="listing__hero--slider__price">$13000</span>
                                        </div>
                                        <p class="listing__hero--slider__text"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#FA4B4A"/>
                                        </svg>
                                       1421 San Pedro St, Los Angeles, CA</p>
                                    </div>
                                    <!-- Hero Content .\ -->
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class=" listing__hero--slider__items position-relative">
                                <img class="listing__hero--slider__media" src="assets/img/hero/listing-details-hero.png" alt="img">
                                <div class="listing__hero--slider__container">
                                    <div class="container">
                                    <!-- Hero Content -->
                                    <div class="listing__hero--slider__content">
                                        <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                            <h3 class="listing__hero--slider__title">Luxury Family Home</h3>
                                            <span class="listing__hero--slider__price">$13000</span>
                                        </div>
                                        <p class="listing__hero--slider__text"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#FA4B4A"/>
                                        </svg>
                                       1421 San Pedro St, Los Angeles, CA</p>
                                    </div>
                                    <!-- Hero Content .\ -->
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class=" listing__hero--slider__items position-relative">
                                <img class="listing__hero--slider__media" src="assets/img/hero/listing-details-hero.png" alt="img">
                                <div class="listing__hero--slider__container">
                                    <div class="container">
                                    <!-- Hero Content -->
                                    <div class="listing__hero--slider__content">
                                        <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                            <h3 class="listing__hero--slider__title">Luxury Family Home</h3>
                                            <span class="listing__hero--slider__price">$13000</span>
                                        </div>
                                        <p class="listing__hero--slider__text"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#FA4B4A"/>
                                        </svg>
                                       1421 San Pedro St, Los Angeles, CA</p>
                                    </div>
                                    <!-- Hero Content .\ -->
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide">
                              <div class=" listing__hero--slider__items position-relative">
                                <img class="listing__hero--slider__media" src="assets/img/hero/listing-details-hero.png" alt="img">
                                <div class="listing__hero--slider__container">
                                    <div class="container">
                                    <!-- Hero Content -->
                                    <div class="listing__hero--slider__content">
                                        <div class="listing__hero--slider__content--top d-flex align-items-center justify-content-between">
                                            <h3 class="listing__hero--slider__title">Luxury Family Home</h3>
                                            <span class="listing__hero--slider__price">$13000</span>
                                        </div>
                                        <p class="listing__hero--slider__text"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#FA4B4A"/>
                                        </svg>
                                       1421 San Pedro St, Los Angeles, CA</p>
                                    </div>
                                    <!-- Hero Content .\ -->
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hero swiper -->
                <div class="listing__small--hero__slider">
                    <div class="swiper hero__swiper--column3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Hero swiper items -->
                                <div class="listing__small--hero__slider--items">
                                    <img src="assets/img/hero/slider-small1.png" alt="img">
                                </div>
                                <!-- Hero swiper items .\ -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Hero swiper items -->
                                <div class="listing__small--hero__slider--items">
                                    <img src="assets/img/hero/slider-small2.png" alt="img">
                                </div>
                                <!-- Hero swiper items .\ -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Hero swiper items -->
                                <div class="listing__small--hero__slider--items">
                                    <img src="assets/img/hero/slider-small3.png" alt="img">
                                </div>
                                <!-- Hero swiper items .\ -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Hero swiper items -->
                                <div class="listing__small--hero__slider--items">
                                    <img src="assets/img/hero/slider-small1.png" alt="img">
                                </div>
                                <!-- Hero swiper items .\ -->
                            </div>
                            <div class="swiper-slide">
                              <!-- Hero swiper items -->
                              <div class="listing__small--hero__slider--items">
                                  <img src="assets/img/hero/slider-small2.png" alt="img">
                              </div>
                              <!-- Hero swiper items .\ -->
                          </div>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-disabled swiper-button-prev">
                        <svg width="16" height="13" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.223772 5.27955L5.27967 0.223543C5.42399 0.0792188 5.61635 0 5.82145 0C6.02678 0 6.21902 0.0793326 6.36335 0.223543L6.82238 0.682693C6.96659 0.82679 7.04604 1.01926 7.04604 1.22448C7.04604 1.42958 6.96659 1.62854 6.82238 1.77264L3.87285 4.72866H13.2437C13.6662 4.72866 14 5.05942 14 5.48203V6.13115C14 6.55376 13.6662 6.91788 13.2437 6.91788H3.83939L6.82227 9.8904C6.96648 10.0347 7.04593 10.222 7.04593 10.4272C7.04593 10.6322 6.96648 10.8221 6.82227 10.9663L6.36323 11.424C6.21891 11.5683 6.02667 11.647 5.82134 11.647C5.61623 11.647 5.42388 11.5673 5.27955 11.423L0.223659 6.3671C0.0789928 6.22232 -0.000566483 6.02905 1.90735e-06 5.82361C-0.000452995 5.61748 0.0789928 5.4241 0.223772 5.27955Z" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
                        <svg width="16" height="13" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.7762 5.27955L8.72033 0.223543C8.57601 0.0792188 8.38365 0 8.17855 0C7.97322 0 7.78098 0.0793326 7.63665 0.223543L7.17762 0.682693C7.03341 0.82679 6.95396 1.01926 6.95396 1.22448C6.95396 1.42958 7.03341 1.62854 7.17762 1.77264L10.1272 4.72866H0.756335C0.333835 4.72866 0 5.05942 0 5.48203V6.13115C0 6.55376 0.333835 6.91788 0.756335 6.91788H10.1606L7.17773 9.8904C7.03352 10.0347 6.95407 10.222 6.95407 10.4272C6.95407 10.6322 7.03352 10.8221 7.17773 10.9663L7.63677 11.424C7.78109 11.5683 7.97333 11.647 8.17866 11.647C8.38377 11.647 8.57612 11.5673 8.72045 11.423L13.7763 6.3671C13.921 6.22232 14.0006 6.02905 14 5.82361C14.0005 5.61748 13.921 5.4241 13.7762 5.27955Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <!-- Hero swiper .\ -->
            </div>
        </section>

        <div class="listing__details--content__step mb-80">
                                        <h3 class="listing__details--content__title">Description:</h3>
                                        <p class="listing__details--content__desc">Description It is a long established fact that a reader will be distrac by any websites look for ways
                                            prevent AdBlock from blocking annoying ads. As a result, we've focused on improving our funct
                                            so that we can overcome these anti-ad blocking attempts. Of course, you can help us continue to
                                            improve our ad blocking ability by reporting any time you run into a website that won't allow you
                                            to block the readable content of a page when looking at its layout. It is a long established fact</p>
                                        <div class="apartment__info listing__d--info">
                                            <div class="apartment__info--wrapper d-flex">
                                                <div class="apartment__info--list">
                                                    <span class="apartment__info--icon"><img src="assets/img/icon/bed-realistic.png" alt="img"></span>
                                                    <p>
                                                        <span class="apartment__info--count">3</span>
                                                        <span class="apartment__info--title">Bedrooms</span>
                                                    </p>
                                                </div>
                                                <div class="apartment__info--list">
                                                    <span class="apartment__info--icon"><img src="assets/img/icon/modern-car.png" alt="img"></span>
                                                    <p>
                                                        <span class="apartment__info--count">3</span>
                                                        <span class="apartment__info--title"> Car Parking</span>
                                                    </p>
                                                </div>
                                                <div class="apartment__info--list">
                                                    <span class="apartment__info--icon"><img src="assets/img/icon/set-square.png" alt="img"></span>
                                                    <p>
                                                        <span class="apartment__info--count">3</span>
                                                        <span class="apartment__info--title">1249 Sqft</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

            <div class="row" style="width: 700px;">

                <!-- Left-side Image Gallery -->
                <div class="col-md-4 col-sm-12 image-gallery">
                    <div class="gallery-image"><img src="admin/property/<?php echo $row['18'];?>" alt="Property Image 1"></div>
                    <div class="gallery-image"><img src="admin/property/<?php echo $row['19'];?>" alt="Property Image 2"></div>
                    <div class="gallery-image"><img src="admin/property/<?php echo $row['20'];?>" alt="Property Image 3"></div>
                    <div class="gallery-image"><img src="admin/property/<?php echo $row['21'];?>" alt="Property Image 4"></div>
                </div>

                <!-- Right-side Main Image -->
                <div class="col-md-8 col-sm-12 main-image">
                    <img src="admin/property/<?php echo $row['22'];?>" alt="Main Property Image">
                    <!-- <div class="play-button">▶</div> -->
                </div>
            </div>

            <!-- Right-side Property Details -->
            <div class="property-details" style="width: 500px;">
                <div class="details">
                    <h1><?php echo $row['1'];?></h1>
                    <p><?php echo $row['2'];?></p>

                    <!-- Specifications Section -->
                    <!-- Specifications Section -->
                    <div class="specifications">
                        <h3 class="fontspecification">Specification zbskcxzbxcl</h3>
                        <ul class="specification-list">
                            <li>📍 <?php echo $row['14'];?></li>
                            <li>🏠 <?php echo $row['12'];?> sq ft</li>
                            <li>🛏️ <?php echo $row['6'];?> Bedrooms</li>
                            <li>🛁 <?php echo $row['7'];?> Bathrooms</li>
                        </ul>
                    </div>

                    <!-- Facilities Section -->
                    <div class="specifications">
                        <h3 class="fontspecification">Facility</h3>
                        <ul class="specification-list">
                            <li>🌐 Full WiFi</li>
                            <li>🏀 Basket Court</li>
                            <li>🏊 Swimming Pool</li>
                            <li>🚗 Garage</li>
                        </ul>
                    </div>

                    <!-- Price Section -->
                    <div class="price">
                    <h3>Price</h3>
                    <p class="price-value">$500,000</p>
                    </div>
                    <button class="book-tour">Book Tour</button>
                        </div>
            </div>
        <?php } ?>


    </section>

    <!-- end property -->

    <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->

    </body>
    </html>