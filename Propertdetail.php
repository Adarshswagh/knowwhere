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
    <title>property detail</title>

    <link rel="stylesheet" href="css/knowpropdetail.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/layerslider.min.css">
    <link rel="stylesheet" href="css/knowproperties.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
<link rel="stylesheet" type="text/css" href="css/propstyle.css">
<link rel="stylesheet" type="text/css" href="css/knowproperties.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>
<body>

<style>
    body {
    margin: 0;
    font-family: 'Lexend', sans-serif; /* Replace with your font */
}

html, body {
    max-width: 100% !important;
    overflow-x: hidden !important;
    }
/* banner */
/* Banner styling */

#banner-main{
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 15px;
    background-color: #050f17;

}
.banner1 {
    height: 400px; /* Ensure height is set */
    background-size: cover; /* Cover the entire area */
    background-position: center; /* Center the image */
    display: flex; /* Flex for centering content */
    align-items: center; /* Vertically center content */
    justify-content: center; /* Horizontally center content */
    color: #FFFFFF; /* Set text color to pure white */
    background-image: url('images/bannerabout.jpg');
    background-color: #000; /* Fallback color if image fails to load */
    position: relative; /* Position relative for overlay */
}

/* Overlay for better text visibility */
.banner1::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Dark overlay for better contrast */
    z-index: 1;
}

.banner-content {
    position: relative;
    text-align: center;
    z-index: 2; /* Ensures content is above the overlay */
}

/* Heading styling */
.banner-bread {
    color: #fff; /* Keep breadcrumb links white */
}

.banner h2 {
    color: #FFFFFF; /* Set heading color to pure white */
    font-family: "Italiana", Sans-serif;
    font-size: 80px;
    font-weight: 400;
    line-height: 1.3em;
}

/* Breadcrumb styling */
.banner p {
    font-size: 14px; /* Set font size to 14px */
    font-family: 'Lexend', sans-serif; /* Lexend font for breadcrumbs */
    margin: 10px 0 0; /* Space below the heading */
}

/* Links inside the breadcrumbs */
.banner p a {
    color: #FFFFFF; /* Set breadcrumb link color to pure white */
    text-decoration: none;
    font-family: 'Lexend', sans-serif;
}

/* Hover effect for links */
.banner p a:hover {
    text-decoration: underline; /* Underline on hover */
    color: #A8894D; /* Change color on hover */
}

/* Responsive Design */
@media (max-width: 768px) {
    .banner {
        height: 300px; /* Reduce height for smaller screens */
    }

    .banner h1 {
        font-size: 36px; /* Smaller font for mobile */
    }

    .banner p {
        font-size: 12px; /* Adjust breadcrumb text size on smaller screens */
    }
}

.ls-container {
		visibility: hidden;
		position: relative;
		max-width: 100%;
	}

	.ls-inner {
		position: relative;
		width: 100%;
		height: 100%;
		background-position: center center;
		z-index: 30;
	}

	.ls-wp-fullwidth-container {
		width: 100%;
		position: relative;
	}

	.ls-wp-fullwidth-helper {
		position: absolute;
	}



/* Layers */

	.ls-layers,
	.ls-slide-backgrounds,
	.ls-slide-effects,
	.ls-background-videos,
	.ls-bg-video-overlay {
		width: 100%;
		height: 100%;
		position: absolute;
		left: 0;
		top: 0;
		overflow: hidden;
		-o-transform: translateZ(0);
		-ms-transform: translateZ(0);
		-moz-transform: translateZ(0);
		-webkit-transform: translateZ(0);
		transform: translateZ(0);
	}

	.ls-wrapper {
		padding: 0 !important;
		visibility: visible !important;
		border: 0 !important;
		z-index: 1;
	}

	.ls-background-videos {
		z-index: 1;
	}

	.ls-bg-video-overlay {
		z-index: 21;
		background-repeat: repeat;
		background-position: center center;
	}

	.ls-slide-backgrounds {
		z-index: 2;
	}

	.ls-slide-effects {
		z-index: 4;
	}

	.ls-layers {
		z-index: 35;
	}

	.ls-parallax,
	.ls-in-out,
	.ls-z {
		position: absolute !important;
	}

	.ls-parallax,
	.ls-z {
		width: 0 !important;
		height: 0 !important;
		top: 0 !important;
		left: 0 !important;
		bottom: auto !important;
		right: auto !important;
		display: block !important;
		overflow: visible !important;
	}

	.ls-in-out {
		display: none;
	}

	.ls-loop, .ls-clip {
		position: absolute !important;
		display: block !important;
	}

	.ls-parallax,
	.ls-in-out,
	.ls-loop,
	.ls-z {
		background: none !important;
	}

	.ls-parallax,
	.ls-bg-wrap,
	.ls-loop {
		margin: 0 !important;
	}

	.ls-wrapper > .ls-layer,
	.ls-wrapper > a > .ls-layer
	.ls-wrapper > .ls-bg {
		line-height: normal;
		white-space: nowrap;
		word-wrap: normal;
		margin-right: 0 !important;
		margin-bottom: 0 !important;
	}

	.ls-wrapper > .ls-layer,
	.ls-wrapper > a > .ls-layer {
		position: static !important;
		display: block !important;
		-o-transform: translateZ(1px);
		-ms-transform: translateZ(1px);
		-moz-transform: translateZ(1px);
		-webkit-transform: translateZ(1px);
		transform: translateZ(1px);
	}

	.ls-bg-wrap,
	.ls-bg-outer {
		width: 100%;
		height: 100%;
		position: absolute;
		left: 0;
		top: 0;
	}

	.ls-bg-wrap {
		display: none;
	}

	.ls-bg-outer {
		overflow: hidden !important;
	}

	.ls-wrapper > a.ls-layer-link {
		cursor: pointer !important;
		display: block !important;
		position: absolute !important;
		left: 0 !important;
		top: 0 !important;
		width: 100% !important;
		height: 100% !important;
		z-index: 10;
		-o-transform: translateZ(100px);
		-ms-transform: translateZ(100px);
		-moz-transform: translateZ(100px);
		-webkit-transform: translateZ(100px);
		transform: translateZ(100px);
		background: url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7) !important;
	}


    table {
  border-collapse: collapse;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow effect */
  background-color: transparent; /* Transparent background */
  color: white; /* White text */
  text-align: left;
  width: 100%;
  margin: 50px auto; /* Center the table */
  padding: 0; /* Remove padding from table */
}

th {
  background-color: rgba(255, 255, 255, 0.1); /* Slightly transparent header */
  color: white; /* Header text in white */
  padding: 15px 20px; /* Increase padding for better spacing */
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  font-size: 1.5rem;
  font-weight: 900;
}

td {
  padding: 15px 20px; /* Cell padding */
  background-color: rgba(255, 255, 255, 0.05); /* Slight transparent background for cells */
  color: white; /* Keep text in white */
  border-bottom: 3px solid rgba(255, 255, 255, 0.2); /* Subtle border between rows */
  font-size: 1.3rem;
}

tr:hover {
  background-color: rgba(255, 255, 255, 0.1); /* Highlight row on hover */
}

/* Alternating row colors */
tr:nth-child(even) {
  background-color: #A8894D; /* Slightly transparent for even rows */
}

tr:nth-child(odd) {
  background-color: transparent; /* Transparent for odd rows */
}


</style>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->


  <!-- banner -->
  <section id="banner-main">
    <div class="banner1" >
        <div class="banner-content">
            <h2>Property Details</h2>
            <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Property Details</a></p>
        </div>
    </div>
</section>

<!-- Listing details section -->
<section class="listing__details--section section--padding">
                <div class="container">
                    <div class="row"> 
                    <div class="col-lg-8">

<div class="row" style="color:#ffffff">
    <div class="col-md-12">
        <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
            
            <!-- Slide 2-->
            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['19'];?>" class="ls-bg" alt="" /> </div>
            
            <!-- Slide 3-->
            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['20'];?>" class="ls-bg" alt="" /> </div>
            
            <!-- Slide 4-->
            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['21'];?>" class="ls-bg" alt="" /> </div>
            
            <!-- Slide 5-->
            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="admin/property/<?php echo $row['22'];?>" class="ls-bg" alt="" /> </div>
        </div>
    </div>
</div>


                            <div class="listing__details--wrapper">
                                <div class="listing__details--content">
                                    <div class="listing__details--content__top mb-25 d-flex align-items-center justify-content-between">
                                        <div class="listing__details--meta">
                                            <ul class="listing__details--meta__wrapper d-flex align-items-center">
                                                <li><span class="listing__details--badge">Featured</span></li>
                                                <li><span class="listing__details--badge two">For sale</span></li>
                                                <li>
                                                    <span class="listing__details--meta__icon">
                                                        <!-- <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 13.0469H3.25V10.7969H1V13.0469ZM3.75 13.0469H6.25V10.7969H3.75V13.0469ZM1 10.2969H3.25V7.79687H1V10.2969ZM3.75 10.2969H6.25V7.79687H3.75V10.2969ZM1 7.29687H3.25V5.04688H1V7.29687ZM6.75 13.0469H9.25V10.7969H6.75V13.0469ZM3.75 7.29687H6.25V5.04688H3.75V7.29687ZM9.75 13.0469H12V10.7969H9.75V13.0469ZM6.75 10.2969H9.25V7.79687H6.75V10.2969ZM4 3.54687V1.29687C4 1.22917 3.97396 1.17187 3.92188 1.125C3.875 1.07292 3.81771 1.04687 3.75 1.04687H3.25C3.18229 1.04687 3.1224 1.07292 3.07031 1.125C3.02344 1.17187 3 1.22917 3 1.29687V3.54687C3 3.61458 3.02344 3.67448 3.07031 3.72656C3.1224 3.77344 3.18229 3.79687 3.25 3.79687H3.75C3.81771 3.79687 3.875 3.77344 3.92188 3.72656C3.97396 3.67448 4 3.61458 4 3.54687ZM9.75 10.2969H12V7.79687H9.75V10.2969ZM6.75 7.29687H9.25V5.04688H6.75V7.29687ZM9.75 7.29687H12V5.04688H9.75V7.29687ZM10 3.54687V1.29687C10 1.22917 9.97396 1.17187 9.92188 1.125C9.875 1.07292 9.81771 1.04687 9.75 1.04687H9.25C9.18229 1.04687 9.1224 1.07292 9.07031 1.125C9.02344 1.17187 9 1.22917 9 1.29687V3.54687C9 3.61458 9.02344 3.67448 9.07031 3.72656C9.1224 3.77344 9.18229 3.79687 9.25 3.79687H9.75C9.81771 3.79687 9.875 3.77344 9.92188 3.72656C9.97396 3.67448 10 3.61458 10 3.54687ZM13 3.04687V13.0469C13 13.3177 12.901 13.5521 12.7031 13.75C12.5052 13.9479 12.2708 14.0469 12 14.0469H1C0.729167 14.0469 0.494792 13.9479 0.296875 13.75C0.0989583 13.5521 0 13.3177 0 13.0469V3.04687C0 2.77604 0.0989583 2.54167 0.296875 2.34375C0.494792 2.14583 0.729167 2.04687 1 2.04687H2V1.29687C2 0.953124 2.1224 0.658853 2.36719 0.414062C2.61198 0.16927 2.90625 0.046874 3.25 0.046874H3.75C4.09375 0.046874 4.38802 0.16927 4.63281 0.414062C4.8776 0.658853 5 0.953124 5 1.29687V2.04687H8V1.29687C8 0.953124 8.1224 0.658853 8.36719 0.414062C8.61198 0.16927 8.90625 0.046874 9.25 0.046874H9.75C10.0938 0.046874 10.388 0.16927 10.6328 0.414062C10.8776 0.658853 11 0.953124 11 1.29687V2.04687H12C12.2708 2.04687 12.5052 2.14583 12.7031 2.34375C12.901 2.54167 13 2.77604 13 3.04687Z" fill="currentColor"/>
                                                        </svg> -->
                                                    </span>
                                                    <!-- <span class="listing__details--meta__text">2 years ago</span> -->
                                                </li>
                                                <li>
                                                    <span class="listing__details--meta__icon">
                                                        <!-- <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.37483 2.17857C8.58316 1.86905 7.73197 1.71428 6.82126 1.71428C5.91054 1.71428 5.05935 1.86905 4.26768 2.17857C3.47602 2.48809 2.84507 2.90774 2.37483 3.4375C1.91054 3.96726 1.6784 4.53571 1.6784 5.14286C1.6784 5.63095 1.83614 6.10119 2.15161 6.55357C2.46709 7.00595 2.91054 7.39881 3.48197 7.73214L4.34804 8.23214L4.03554 8.98214C4.23792 8.8631 4.42245 8.74702 4.58911 8.63393L4.98197 8.35714L5.45518 8.44643C5.91947 8.52976 6.37483 8.57143 6.82126 8.57143C7.73197 8.57143 8.58316 8.41667 9.37483 8.10714C10.1665 7.79762 10.7945 7.37798 11.2588 6.84821C11.729 6.31845 11.9641 5.75 11.9641 5.14286C11.9641 4.53571 11.729 3.96726 11.2588 3.4375C10.7945 2.90774 10.1665 2.48809 9.37483 2.17857ZM3.66054 1.1875C4.63078 0.776785 5.68435 0.571428 6.82126 0.571428C7.95816 0.571428 9.00876 0.776785 9.97304 1.1875C10.9433 1.59226 11.7082 2.14583 12.2677 2.84821C12.8272 3.55059 13.107 4.31548 13.107 5.14286C13.107 5.97024 12.8272 6.73512 12.2677 7.4375C11.7082 8.13988 10.9433 8.69643 9.97304 9.10714C9.00876 9.5119 7.95816 9.71429 6.82126 9.71429C6.30935 9.71429 5.78554 9.66667 5.24983 9.57143C4.51173 10.0952 3.68435 10.4762 2.76768 10.7143C2.5534 10.7679 2.29745 10.8155 1.99983 10.8571H1.97304C1.90757 10.8571 1.84507 10.8333 1.78554 10.7857C1.73197 10.7381 1.69923 10.6756 1.68733 10.5982C1.68137 10.5804 1.6784 10.5625 1.6784 10.5446C1.6784 10.5208 1.6784 10.5 1.6784 10.4821C1.68435 10.4643 1.6903 10.4464 1.69626 10.4286C1.70816 10.4107 1.71709 10.3958 1.72304 10.3839C1.72899 10.372 1.73792 10.3571 1.74983 10.3393C1.76768 10.3155 1.77959 10.3006 1.78554 10.2946C1.79745 10.2827 1.81233 10.2679 1.83018 10.25C1.84804 10.2262 1.85995 10.2113 1.8659 10.2054C1.89566 10.1696 1.96411 10.0952 2.07126 9.98214C2.1784 9.86905 2.25578 9.78274 2.3034 9.72321C2.35102 9.65774 2.41649 9.57143 2.49983 9.46429C2.58911 9.35119 2.66352 9.23512 2.72304 9.11607C2.78852 8.99702 2.85102 8.86607 2.91054 8.72321C2.17245 8.29464 1.59209 7.76786 1.16947 7.14286C0.746851 6.51786 0.535542 5.85119 0.535542 5.14286C0.535542 4.31548 0.815303 3.55059 1.37483 2.84821C1.93435 2.14583 2.69626 1.59226 3.66054 1.1875ZM14.1605 11.0089C14.2201 11.1518 14.2796 11.2827 14.3391 11.4018C14.4046 11.5208 14.479 11.6369 14.5623 11.75C14.6516 11.8571 14.7201 11.9405 14.7677 12C14.8153 12.0655 14.8927 12.1548 14.9998 12.2679C15.107 12.381 15.1754 12.4554 15.2052 12.4911C15.2111 12.497 15.223 12.5089 15.2409 12.5268C15.2588 12.5506 15.2707 12.5655 15.2766 12.5714C15.2885 12.5833 15.3004 12.5982 15.3123 12.6161C15.3302 12.6399 15.3421 12.6577 15.348 12.6696C15.354 12.6815 15.3599 12.6964 15.3659 12.7143C15.3778 12.7321 15.3838 12.75 15.3838 12.7679C15.3897 12.7857 15.3927 12.8036 15.3927 12.8214C15.3927 12.8452 15.3897 12.8661 15.3838 12.8839C15.3659 12.9673 15.3272 13.0327 15.2677 13.0804C15.2082 13.128 15.1427 13.1488 15.0713 13.1429C14.7736 13.1012 14.5177 13.0536 14.3034 13C13.3867 12.7619 12.5594 12.381 11.8213 11.8571C11.2855 11.9524 10.7617 12 10.2498 12C8.63673 12 7.23197 11.6071 6.03554 10.8214C6.38078 10.8452 6.64268 10.8571 6.82126 10.8571C7.77959 10.8571 8.69923 10.7232 9.58018 10.4554C10.4611 10.1875 11.2469 9.80357 11.9373 9.30357C12.6814 8.75595 13.2528 8.125 13.6516 7.41071C14.0504 6.69643 14.2498 5.94048 14.2498 5.14286C14.2498 4.68452 14.1814 4.23214 14.0445 3.78571C14.8123 4.20833 15.4195 4.73809 15.8659 5.375C16.3123 6.0119 16.5355 6.69643 16.5355 7.42857C16.5355 8.14286 16.3242 8.8125 15.9016 9.4375C15.479 10.0565 14.8986 10.5804 14.1605 11.0089Z" fill="currentColor"/>
                                                        </svg>                                                         -->
                                                    </span>
                                                    <!-- <span class="listing__details--meta__text">7214 views</span> -->
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="listing__details--action d-flex">
                                            <li class="listing__details--action__list">
                                                <a class="listing__details--wishlist__btn" href="listing.html">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.5266 1.49287C15.2525 0.378116 13.9217 -0.114882 12.5718 0.0224527C10.7916 0.206002 9.49922 1.43636 9.00034 1.99052C8.50153 1.43636 7.20917 0.206005 5.42893 0.0224527C4.07666 -0.11477 2.74825 0.378116 1.47408 1.49287C0.17279 2.63133 -0.27894 4.29861 0.166748 6.31453C1.03241 10.2279 5.1234 14.6311 8.92141 15.7371C8.97276 15.7521 9.02724 15.7521 9.07859 15.7371C12.8769 14.6311 16.9677 10.2279 17.8332 6.31453C18.2789 4.29848 17.8272 2.63127 16.5259 1.49287H16.5266ZM4.98732 1.68709C4.20931 1.68709 3.40127 2.04905 2.58536 2.76314C1.76505 3.48077 1.50577 4.55296 1.81499 5.95029C1.84851 6.10195 1.75272 6.25198 1.60106 6.28551C1.5811 6.28991 1.56063 6.29217 1.54017 6.29217C1.40834 6.29204 1.29422 6.20039 1.26572 6.07158C0.908678 4.45866 1.22806 3.20307 2.21511 2.33946C3.13625 1.53345 4.06921 1.12453 4.98733 1.12453C5.14263 1.12453 5.26856 1.25046 5.26856 1.40576C5.26856 1.56106 5.14263 1.68698 4.98733 1.68698L4.98732 1.68709Z" fill="currentColor"/>
                                                    </svg>                                                                                                       
                                                    <span class="visually-hidden">listing</span>
                                                </a>
                                            </li>
                                            <li class="listing__details--action__list position-relative">
                                            <a class="listing__details--action__btn" href="#" aria-label="share button"  aria-expanded="false" data-bs-toggle="dropdown"><svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5111 11.2118C11.5684 11.2118 10.7529 11.6195 10.1923 12.282L5.86064 10.0396C6.06451 9.63191 6.16636 9.17334 6.16636 8.68916C6.16636 8.20498 6.03892 7.74642 5.86064 7.33868L10.1923 5.09633C10.7529 5.75879 11.5938 6.16652 12.5111 6.16652C14.1929 6.16652 15.5944 4.79065 15.5944 3.08326C15.5944 1.40149 14.2185 0 12.5111 0C10.8038 0.000355502 9.42786 1.45268 9.42786 3.13445C9.42786 3.54218 9.50429 3.89892 9.63173 4.25565L5.2236 6.52344C4.66302 5.96286 3.89856 5.63152 3.05765 5.63152C1.40149 5.63152 0 7.03301 0 8.71478C0 10.3966 1.37587 11.798 3.08326 11.798C3.92413 11.798 4.6886 11.4667 5.24922 10.9061L9.65734 13.1739C9.5299 13.5306 9.45347 13.8874 9.45347 14.2951C9.45347 15.9769 10.8293 17.3784 12.5367 17.3784C14.2439 17.3784 15.62 16.0025 15.62 14.2951C15.6196 12.5879 14.1928 11.2118 12.5112 11.2118L12.5111 11.2118ZM12.5111 1.09595C13.6323 1.09595 14.575 2.01325 14.575 3.15984C14.575 4.28104 13.6577 5.22374 12.5111 5.22374C11.3644 5.22391 10.447 4.28099 10.447 3.13441C10.447 2.01321 11.3644 1.0959 12.5111 1.0959V1.09595ZM3.08324 10.7786C1.96204 10.7786 1.01934 9.86132 1.01934 8.71474C1.01934 7.59354 1.93665 6.65084 3.08324 6.65084C4.20444 6.65084 5.14714 7.56815 5.14714 8.71474C5.14731 9.83593 4.20439 10.7786 3.08324 10.7786ZM12.5111 16.3334C11.3899 16.3334 10.4472 15.4161 10.4472 14.2695C10.4472 13.123 11.3645 12.2056 12.5111 12.2056C13.6577 12.2056 14.575 13.123 14.575 14.2695C14.575 15.4161 13.6321 16.3334 12.5111 16.3334Z" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Share</span>
                                            </a>
                                            <ul class="dropdown-menu share__dropdown--menu" style="margin: 0px;">
                                                <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="https://www.facebook.com/"><span>Facebook</span> <svg width="8" height="15" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.52148 5.07812L6.29297 7.3125H4.49023V13.8125H1.82422V7.3125H0.478516V5.07812H1.79883V3.73242C1.79883 3.27539 1.84115 2.86914 1.92578 2.51367C2.02734 2.14128 2.19661 1.83659 2.43359 1.59961C2.67057 1.3457 2.9668 1.15104 3.32227 1.01562C3.69466 0.880208 4.15169 0.8125 4.69336 0.8125H6.49609V3.04688H5.37891C5.15885 3.04688 4.98958 3.07227 4.87109 3.12305C4.7526 3.1569 4.65951 3.21615 4.5918 3.30078C4.54102 3.36849 4.50716 3.46159 4.49023 3.58008C4.47331 3.68164 4.46484 3.80859 4.46484 3.96094V5.07812H6.49609H6.52148Z" fill="currentColor" fill-opacity="1"></path>
                                                    </svg>
                                                    </a>
                                                </li>
                                                <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="#modalToggle3"><span>Twitter</span> <svg width="15" height="12" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.375 2.67188C12.375 2.70573 12.375 2.73958 12.375 2.77344C12.3919 2.79036 12.3919 2.81576 12.375 2.84961C12.375 2.88346 12.375 2.91732 12.375 2.95117C12.3919 2.9681 12.3919 2.99349 12.375 3.02734C12.3919 3.89062 12.2311 4.7793 11.8926 5.69336C11.554 6.60742 11.0632 7.42839 10.4199 8.15625C9.79362 8.86719 9.00651 9.45964 8.05859 9.93359C7.11068 10.3906 6.02734 10.6107 4.80859 10.5938C4.41927 10.6107 4.04688 10.5938 3.69141 10.543C3.33594 10.4753 2.98047 10.3991 2.625 10.3145C2.26953 10.2129 1.93099 10.0859 1.60938 9.93359C1.30469 9.76432 1 9.59505 0.695312 9.42578C0.763021 9.40885 0.813802 9.40885 0.847656 9.42578C0.898438 9.44271 0.957682 9.45117 1.02539 9.45117C1.0931 9.43424 1.14388 9.43424 1.17773 9.45117C1.22852 9.45117 1.28776 9.44271 1.35547 9.42578C1.66016 9.44271 1.96484 9.42578 2.26953 9.375C2.57422 9.30729 2.86198 9.23112 3.13281 9.14648C3.40365 9.06185 3.66602 8.94336 3.91992 8.79102C4.19076 8.63867 4.4362 8.47786 4.65625 8.30859C4.36849 8.29167 4.08919 8.24089 3.81836 8.15625C3.54753 8.07161 3.30208 7.94466 3.08203 7.77539C2.87891 7.58919 2.69271 7.39453 2.52344 7.19141C2.37109 6.97135 2.26107 6.71745 2.19336 6.42969C2.21029 6.46354 2.24414 6.48047 2.29492 6.48047C2.3457 6.46354 2.38802 6.46354 2.42188 6.48047C2.45573 6.4974 2.49805 6.50586 2.54883 6.50586C2.59961 6.48893 2.63346 6.48893 2.65039 6.50586C2.73503 6.48893 2.80273 6.48893 2.85352 6.50586C2.9043 6.50586 2.96354 6.4974 3.03125 6.48047C3.09896 6.46354 3.1582 6.45508 3.20898 6.45508C3.25977 6.43815 3.31901 6.42122 3.38672 6.4043C3.0651 6.35352 2.77734 6.24349 2.52344 6.07422C2.26953 5.90495 2.04102 5.71029 1.83789 5.49023C1.65169 5.27018 1.50781 5.01628 1.40625 4.72852C1.30469 4.42383 1.24544 4.11914 1.22852 3.81445C1.24544 3.7806 1.24544 3.77214 1.22852 3.78906C1.24544 3.77214 1.24544 3.76367 1.22852 3.76367C1.22852 3.76367 1.23698 3.75521 1.25391 3.73828C1.32161 3.80599 1.40625 3.85677 1.50781 3.89062C1.60938 3.92448 1.70247 3.95833 1.78711 3.99219C1.88867 4.02604 1.9987 4.05143 2.11719 4.06836C2.23568 4.06836 2.33724 4.08529 2.42188 4.11914C2.26953 3.98372 2.10872 3.83984 1.93945 3.6875C1.78711 3.53516 1.66016 3.35742 1.55859 3.1543C1.47396 2.95117 1.39779 2.74805 1.33008 2.54492C1.26237 2.3418 1.23698 2.11328 1.25391 1.85938C1.23698 1.75781 1.23698 1.64779 1.25391 1.5293C1.28776 1.39388 1.31315 1.27539 1.33008 1.17383C1.36393 1.07227 1.40625 0.96224 1.45703 0.84375C1.50781 0.72526 1.55859 0.623698 1.60938 0.539062C1.94792 0.928385 2.31185 1.29232 2.70117 1.63086C3.10742 1.9694 3.54753 2.25716 4.02148 2.49414C4.49544 2.73112 4.98633 2.92578 5.49414 3.07812C6.00195 3.21354 6.54362 3.28971 7.11914 3.30664C7.08529 3.27279 7.06836 3.23047 7.06836 3.17969C7.08529 3.11198 7.08529 3.0612 7.06836 3.02734C7.05143 2.97656 7.04297 2.92578 7.04297 2.875C7.04297 2.80729 7.03451 2.75651 7.01758 2.72266C7.03451 2.33333 7.11068 1.98633 7.24609 1.68164C7.38151 1.36003 7.56771 1.08073 7.80469 0.84375C8.05859 0.589844 8.34635 0.395182 8.66797 0.259766C8.98958 0.124349 9.33659 0.0481771 9.70898 0.03125C9.89518 0.0481771 10.0814 0.0735677 10.2676 0.107422C10.4538 0.141276 10.623 0.200521 10.7754 0.285156C10.9447 0.352865 11.1055 0.4375 11.2578 0.539062C11.4102 0.640625 11.5371 0.759115 11.6387 0.894531C11.8079 0.860677 11.9603 0.826823 12.0957 0.792969C12.2311 0.759115 12.375 0.708333 12.5273 0.640625C12.6797 0.572917 12.8151 0.513672 12.9336 0.462891C13.069 0.395182 13.2129 0.31901 13.3652 0.234375C13.2975 0.403646 13.2298 0.55599 13.1621 0.691406C13.0944 0.826823 13.0013 0.96224 12.8828 1.09766C12.7812 1.21615 12.6712 1.32617 12.5527 1.42773C12.4512 1.5293 12.3242 1.63086 12.1719 1.73242C12.3073 1.69857 12.4342 1.67318 12.5527 1.65625C12.6882 1.63932 12.8236 1.61393 12.959 1.58008C13.0944 1.5293 13.2214 1.48698 13.3398 1.45312C13.4583 1.41927 13.5853 1.36003 13.7207 1.27539C13.6191 1.42773 13.5176 1.56315 13.416 1.68164C13.3314 1.80013 13.2214 1.92708 13.0859 2.0625C12.9674 2.18099 12.849 2.29102 12.7305 2.39258C12.6289 2.47721 12.502 2.57878 12.3496 2.69727L12.375 2.67188Z" fill="currentColor"></path>
                                                    </svg>
                                                    </a>
                                                </li>
                                                <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="https://www.instagram.com/"><span>Instagram</span> <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.27881 4.20703C10.4937 4.20703 12.3218 6.03516 12.3218 8.25C12.3218 10.5 10.4937 12.293 8.27881 12.293C6.02881 12.293 4.23584 10.5 4.23584 8.25C4.23584 6.03516 6.02881 4.20703 8.27881 4.20703ZM8.27881 10.8867C9.72021 10.8867 10.8804 9.72656 10.8804 8.25C10.8804 6.80859 9.72021 5.64844 8.27881 5.64844C6.80225 5.64844 5.64209 6.80859 5.64209 8.25C5.64209 9.72656 6.8374 10.8867 8.27881 10.8867ZM13.4116 4.06641C13.4116 4.59375 12.9897 5.01562 12.4624 5.01562C11.9351 5.01562 11.5132 4.59375 11.5132 4.06641C11.5132 3.53906 11.9351 3.11719 12.4624 3.11719C12.9897 3.11719 13.4116 3.53906 13.4116 4.06641ZM16.0835 5.01562C16.1538 6.31641 16.1538 10.2188 16.0835 11.5195C16.0132 12.7852 15.7319 13.875 14.8179 14.8242C13.9038 15.7383 12.7788 16.0195 11.5132 16.0898C10.2124 16.1602 6.31006 16.1602 5.00928 16.0898C3.74365 16.0195 2.65381 15.7383 1.70459 14.8242C0.790527 13.875 0.509277 12.7852 0.438965 11.5195C0.368652 10.2188 0.368652 6.31641 0.438965 5.01562C0.509277 3.75 0.790527 2.625 1.70459 1.71094C2.65381 0.796875 3.74365 0.515625 5.00928 0.445312C6.31006 0.375 10.2124 0.375 11.5132 0.445312C12.7788 0.515625 13.9038 0.796875 14.8179 1.71094C15.7319 2.625 16.0132 3.75 16.0835 5.01562ZM14.396 12.8906C14.8179 11.8711 14.7124 9.41016 14.7124 8.25C14.7124 7.125 14.8179 4.66406 14.396 3.60938C14.1147 2.94141 13.5874 2.37891 12.9194 2.13281C11.8647 1.71094 9.40381 1.81641 8.27881 1.81641C7.11865 1.81641 4.65771 1.71094 3.63818 2.13281C2.93506 2.41406 2.40771 2.94141 2.12646 3.60938C1.70459 4.66406 1.81006 7.125 1.81006 8.25C1.81006 9.41016 1.70459 11.8711 2.12646 12.8906C2.40771 13.5938 2.93506 14.1211 3.63818 14.4023C4.65771 14.8242 7.11865 14.7188 8.27881 14.7188C9.40381 14.7188 11.8647 14.8242 12.9194 14.4023C13.5874 14.1211 14.1499 13.5938 14.396 12.8906Z" fill="currentColor"></path>
                                                    </svg>                                                        
                                                    </a>
                                                </li>
                                                <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="https://www.pinterest.com/"><span>Pinterest</span> <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.502 4.56055C10.502 5.28841 10.4004 5.96549 10.1973 6.5918C10.0111 7.2181 9.74023 7.75977 9.38477 8.2168C9.0293 8.6569 8.60612 9.01237 8.11523 9.2832C7.62435 9.53711 7.08268 9.6556 6.49023 9.63867C6.28711 9.6556 6.08398 9.63867 5.88086 9.58789C5.69466 9.52018 5.51693 9.45247 5.34766 9.38477C5.19531 9.30013 5.0599 9.19857 4.94141 9.08008C4.82292 8.96159 4.72982 8.85156 4.66211 8.75C4.56055 9.15625 4.47591 9.49479 4.4082 9.76562C4.34049 10.0365 4.28125 10.248 4.23047 10.4004C4.19661 10.5358 4.17122 10.6374 4.1543 10.7051C4.1543 10.7559 4.1543 10.7728 4.1543 10.7559C4.10352 10.9082 4.05273 11.0521 4.00195 11.1875C3.95117 11.3229 3.89193 11.4668 3.82422 11.6191C3.75651 11.7546 3.68034 11.8815 3.5957 12C3.52799 12.1185 3.46029 12.237 3.39258 12.3555C3.18945 12.4909 3.02865 12.5501 2.91016 12.5332C2.80859 12.5332 2.72396 12.4909 2.65625 12.4062C2.60547 12.3216 2.57161 12.237 2.55469 12.1523C2.53776 12.0846 2.5293 12.0423 2.5293 12.0254C2.51237 11.9069 2.50391 11.7799 2.50391 11.6445C2.50391 11.4922 2.50391 11.3483 2.50391 11.2129C2.52083 11.0605 2.53776 10.9082 2.55469 10.7559C2.58854 10.6035 2.6224 10.4681 2.65625 10.3496C2.65625 10.3327 2.66471 10.2819 2.68164 10.1973C2.71549 10.0957 2.76628 9.90104 2.83398 9.61328C2.90169 9.30859 2.99479 8.89388 3.11328 8.36914C3.23177 7.8444 3.39258 7.15039 3.5957 6.28711C3.54492 6.18555 3.5026 6.05859 3.46875 5.90625C3.4349 5.75391 3.40951 5.62695 3.39258 5.52539C3.37565 5.4069 3.36719 5.30534 3.36719 5.2207C3.36719 5.13607 3.36719 5.10221 3.36719 5.11914C3.36719 4.83138 3.40104 4.57747 3.46875 4.35742C3.55339 4.12044 3.65495 3.91732 3.77344 3.74805C3.90885 3.56185 4.0612 3.42643 4.23047 3.3418C4.41667 3.24023 4.60286 3.18099 4.78906 3.16406C4.95833 3.18099 5.10221 3.21484 5.2207 3.26562C5.35612 3.31641 5.46615 3.40104 5.55078 3.51953C5.63542 3.63802 5.69466 3.76497 5.72852 3.90039C5.7793 4.01888 5.80469 4.16276 5.80469 4.33203C5.80469 4.48438 5.7793 4.67057 5.72852 4.89062C5.67773 5.09375 5.61849 5.30534 5.55078 5.52539C5.48307 5.74544 5.4069 5.98242 5.32227 6.23633C5.25456 6.47331 5.19531 6.70182 5.14453 6.92188C5.09375 7.14193 5.08529 7.33659 5.11914 7.50586C5.16992 7.6582 5.24609 7.81055 5.34766 7.96289C5.46615 8.09831 5.61003 8.19987 5.7793 8.26758C5.94857 8.33529 6.1263 8.3776 6.3125 8.39453C6.66797 8.3776 6.98958 8.26758 7.27734 8.06445C7.5651 7.86133 7.81055 7.57357 8.01367 7.20117C8.23372 6.82878 8.39453 6.41406 8.49609 5.95703C8.61458 5.48307 8.67383 4.9668 8.67383 4.4082C8.67383 4.01888 8.60612 3.64648 8.4707 3.29102C8.33529 2.93555 8.13216 2.63932 7.86133 2.40234C7.60742 2.14844 7.28581 1.94531 6.89648 1.79297C6.52409 1.64062 6.08398 1.57292 5.57617 1.58984C5.01758 1.57292 4.50977 1.66602 4.05273 1.86914C3.61263 2.07227 3.23177 2.33464 2.91016 2.65625C2.58854 2.97786 2.3431 3.35872 2.17383 3.79883C2.00456 4.22201 1.91992 4.66211 1.91992 5.11914C1.91992 5.30534 1.92839 5.46615 1.94531 5.60156C1.97917 5.72005 2.01302 5.84701 2.04688 5.98242C2.09766 6.10091 2.14844 6.21094 2.19922 6.3125C2.26693 6.39714 2.3431 6.4987 2.42773 6.61719C2.46159 6.63411 2.48698 6.66797 2.50391 6.71875C2.52083 6.7526 2.5293 6.77799 2.5293 6.79492C2.54622 6.81185 2.55469 6.8457 2.55469 6.89648C2.55469 6.93034 2.54622 6.96419 2.5293 6.99805C2.51237 7.04883 2.49544 7.09961 2.47852 7.15039C2.47852 7.18424 2.47005 7.23503 2.45312 7.30273C2.4362 7.37044 2.41927 7.42969 2.40234 7.48047C2.38542 7.51432 2.37695 7.55664 2.37695 7.60742C2.36003 7.64128 2.33464 7.68359 2.30078 7.73438C2.28385 7.76823 2.25846 7.79362 2.22461 7.81055C2.19076 7.81055 2.1569 7.81901 2.12305 7.83594C2.08919 7.83594 2.04688 7.81901 1.99609 7.78516C1.74219 7.68359 1.51367 7.53971 1.31055 7.35352C1.12435 7.15039 0.972005 6.93034 0.853516 6.69336C0.735026 6.45638 0.641927 6.18555 0.574219 5.88086C0.50651 5.57617 0.472656 5.27148 0.472656 4.9668C0.472656 4.42513 0.582682 3.88346 0.802734 3.3418C1.03971 2.80013 1.37826 2.30078 1.81836 1.84375C2.25846 1.38672 2.80859 1.02279 3.46875 0.751953C4.12891 0.464193 4.89909 0.311849 5.7793 0.294922C6.49023 0.311849 7.13346 0.438802 7.70898 0.675781C8.30143 0.895833 8.80078 1.20898 9.20703 1.61523C9.61328 2.02148 9.92643 2.47852 10.1465 2.98633C10.3835 3.47721 10.502 4.00195 10.502 4.56055Z" fill="currentColor"></path>
                                                    </svg>                                                                                                                
                                                    </a>
                                                </li>
                                            </ul>
                                            </li>
                                            <li class="listing__details--action__list">
                                            <a class="listing__details--action__btn" href="listing.html">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.855 0C5.77166 0 3.77371 0.82758 2.30076 2.30076C0.82758 3.77375 0 5.77171 0 7.855C0 9.9383 0.82758 11.9363 2.30076 13.4092C3.77375 14.8824 5.7717 15.71 7.855 15.71C9.9383 15.71 11.9363 14.8824 13.4092 13.4092C14.8824 11.9363 15.71 9.9383 15.71 7.855C15.7073 5.77252 14.8789 3.77621 13.4062 2.30395C11.9338 0.831315 9.93743 0.00286936 7.85518 0.000182413L7.855 0ZM7.855 14.1388C6.18845 14.1388 4.59008 13.4767 3.41151 12.2983C2.23313 11.1197 1.571 9.52132 1.571 7.85482C1.571 6.18832 2.23313 4.5899 3.41151 3.41133C4.59008 2.23295 6.1885 1.57082 7.855 1.57082C9.5215 1.57082 11.1199 2.23295 12.2985 3.41133C13.4769 4.5899 14.139 6.18832 14.139 7.85482C14.1376 9.521 13.4751 11.1187 12.2969 12.2967C11.1189 13.4749 9.52118 14.1374 7.855 14.1388Z" fill="currentColor"></path>
                                                    <path d="M11.5835 7.06853H8.64034V4.12541C8.64034 3.84469 8.49072 3.58552 8.24772 3.44511C8.00471 3.30475 7.70514 3.30475 7.46213 3.44511C7.21912 3.58547 7.06951 3.84467 7.06951 4.12541V7.06853H4.12639C3.84567 7.06853 3.58649 7.21815 3.44609 7.46115C3.30573 7.70416 3.30573 8.00373 3.44609 8.24674C3.58645 8.48975 3.84564 8.63936 4.12639 8.63936H7.06951V11.5825C7.06951 11.8632 7.21912 12.1224 7.46213 12.2628C7.70513 12.4031 8.00471 12.4031 8.24772 12.2628C8.49072 12.1224 8.64034 11.8632 8.64034 11.5825V8.63936H11.5835C11.8642 8.63936 12.1234 8.48975 12.2638 8.24674C12.4041 8.00374 12.4041 7.70416 12.2638 7.46115C12.1234 7.21815 11.8642 7.06853 11.5835 7.06853Z" fill="currentColor"></path>
                                                </svg>                                                   
                                                <span class="visually-hidden">listing</span>
                                            </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing__details--content__step">
                                        <h2 class="listing__details--title mb-25">House In Foxhall Ave, Kingston</h2>
                                        <!-- <div class="listing__details--price__id d-flex align-items-center">
                                            <div class="listing__details--price d-flex">
                                                <span class="listing__details--price__new">$13000</span>
                                                <span class="listing__details--price__old">$16000</span>
                                            </div>
                                            <span class="listing__details--property__id">Property ID: HZ24</span>
                                        </div> -->
                                        <p class="listing__details--location__text"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#A8894D"/>
                                            </svg>
                                            1421 San Pedro St, Los Angeles, CA</p>
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="listing__details--main__content">
                                        <div class="listing__details--content__step mb-80">
                                            <h3 class="listing__details--content__title">Description:</h3>
                                            <p class="listing__details--content__desc">Description It is a long established fact that a reader will be distrac by any websites look for ways
                                                prevent AdBlock from blocking annoying ads. As a result, we've focused on improving our funct
                                                so that we can overcome these anti-ad blocking attempts. Of course, you can help us continue to
                                                improve our ad blocking ability by reporting any time you run into a website that won't allow you
                                                to block the readable content of a page when looking at its layout. It is a long established fact</p>
                                            <div class="apartment__info listing__d--info">
                                                <div class="apartment__info--wrapper d-flex">
                                                    <!-- <div class="apartment__info--list">
                                                        <span class="apartment__info--icon"><img src="images/bed.png" alt="img"></span>
                                                        <p>
                                                            <span class="apartment__info--count">3</span>
                                                            <span class="apartment__info--title">Price</span>
                                                        </p>
                                                    </div> -->
                                                    <div class="apartment__info--list">
                                                        <span class="apartment__info--icon"><img src="images/modern-car.png" alt="img"></span>
                                                        <p>
                                                            <span class="apartment__info--count">3</span>
                                                            <span class="apartment__info--title">Location</span>
                                                        </p>
                                                    </div>
                                                    <div class="apartment__info--list">
                                                        <span class="apartment__info--icon"><img src="images/set-square.png" alt="img"></span>
                                                        <p>
                                                            <span class="apartment__info--count">3</span>
                                                            <span class="apartment__info--title">Land Area</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                         <!-- DEscription End -->
                                    <div class="listing__details--content__step properties__info mb-80">
                                        <h3 class="listing__details--content__title mb-40">Properties Details:</h3>
                                        <ul class="properties__details--info__wrapper d-flex">
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Total Floor :</span>
                                                <span class="properties__details--info__subtitle">22 FLOOR</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Total Towers :</span>
                                                <span class="properties__details--info__subtitle">Th26157096</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Total Units :</span>
                                                <span class="properties__details--info__subtitle">400 SqFt</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Possession :</span>
                                                <span class="properties__details--info__subtitle">1300 Sq Ft</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Project area :</span>
                                                <span class="properties__details--info__subtitle">03</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Status :</span>
                                                <span class="properties__details--info__subtitle">03</span>
                                            </li>
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Contact Person :</span>
                                                <span class="properties__details--info__subtitle">04</span>
                                            </li>
                                            <!-- <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">ROI Investment :</span>
                                                <span class="properties__details--info__subtitle">04</span>
                                            </li> -->
                                            <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">Contact Numbers :</span>
                                                <span class="properties__details--info__subtitle">04</span>
                                            </li>
                                            <!-- <li class="properties__details--info__list d-flex justify-content-between">
                                                <span class="properties__details--info__title">PSF :</span>
                                                <span class="properties__details--info__subtitle">04</span>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <h3 class="listing__details--content__title mb-40">Unit Details</h3>
                                    <table>
        <thead>
      <tr>
        <th>Unit Name </th>
        <th>Unit Price</th>
        <th>Unit size</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <!-- <td>The Making</td> -->
        <td>May 23</td>
        <td>Drama</td>
        <td>4.2</td>
      </tr>
      <tr>
        <!-- <td>Final Hour</td> -->
        <td>May 28</td>
        <td>Thriller</td>
        <td>3.8</td>
      </tr>
      <tr>
        <!-- <td>Springland</td> -->
        <td>June 2</td>
        <td>Comedy</td>
        <td>4.4</td>
</tr>
    </tbody>
  </table>

                                    <div class="listing__details--content__step properties__amenities mb-80">
                                        <h3 class="listing__details--content__title mb-40">Properties Amenities</h3>
                                        <div class="properties__amenities--wrapper d-flex">
                                            <ul class="properties__amenities--step">
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Air Conditioning</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Microwave</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Central Heating</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Washer</span>
                                                </li>
                                            </ul>
                                            <ul class="properties__amenities--step">
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Laundry</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Outdoor Shower</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Swimming Pool</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Wifi</span>
                                                </li>
                                            </ul>
                                            <ul class="properties__amenities--step">
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Window Covering</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Refrigerator</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Alarm System</span>
                                                </li>
                                                <li class="properties__amenities--list d-flex align-items-center">
                                                    <span class="properties__amenities--mark__icon"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.794 2.174C14.426 3.422 13.094 4.874 11.798 6.53C10.67 7.958 9.656 9.422 8.756 10.922C7.94 12.266 7.346 13.418 6.974 14.378C6.962 14.414 6.938 14.444 6.902 14.468C6.866 14.504 6.824 14.522 6.776 14.522C6.764 14.534 6.752 14.54 6.74 14.54C6.656 14.54 6.596 14.516 6.56 14.468L0.134 7.934C0.122 7.922 0.278 7.766 0.602 7.466C0.926 7.154 1.244 6.872 1.556 6.62C1.904 6.332 2.09 6.2 2.114 6.224L5.642 8.996C6.674 7.784 7.832 6.584 9.116 5.396C11.048 3.62 13.04 2.108 15.092 0.86C15.128 0.86 15.266 1.028 15.506 1.364L15.866 1.886C15.878 1.934 15.878 1.988 15.866 2.048C15.854 2.096 15.83 2.138 15.794 2.174Z" fill="currentColor"/>
                                                        </svg>
                                                    </span>
                                                    <span class="properties__amenities--text">Window Coverings</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="listing__details--content__step mb-80">
                                        <div class="properties__floor--plans d-flex">
                                            <div class="properties__floor--plans__content">
                                                <h3 class="listing__details--content__title mb-40">Floor Plans</h3>
                                                <ul class="properties__floor--plans__info" style = color:#DAD9D7>
                                                    <li>
                                                        <img src="images/properties-icon1.png" alt="icon">
                                                        <span>Total Size: 900 </span>
                                                    </li>
                                                    <li>
                                                        <img src="images/properties-icon2.png" alt="icon">
                                                        <span>Bedrooms: 2 </span>
                                                    </li>
                                                    <li>
                                                        <img src="images/properties-icon3.png" alt="icon">
                                                        <span>Bathrooms: 2 </span>
                                                    </li>
                                                    <li>
                                                        <img src="images/properties-icon4.png" alt="icon">
                                                        <span>Price: $800,000</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="properties__floor--plans__gallery">
                                                <ul class="nav floor__plans--tab__btn">
                                                    <li class="nav-item floor__plans--tab__btn--list">
                                                        <button class="floor__plans--tab__btn--field active" data-bs-toggle="tab" data-bs-target="#floor1" type="button"> 
                                                            First Floor                                               
                                                        </button>
                                                    </li>
                                                    <li class="nav-item floor__plans--tab__btn--list">
                                                        <button class="floor__plans--tab__btn--field " data-bs-toggle="tab" data-bs-target="#floor2" type="button">
                                                            2nd Floor
                                                        </button>
                                                    </li>
                                                    <li class="nav-item floor__plans--tab__btn--list">
                                                        <button class="floor__plans--tab__btn--field " data-bs-toggle="tab" data-bs-target="#floor3" type="button">
                                                            3nd Floor
                                                        </button>
                                                    </li>
                                                </ul>
                                                <br>
                                                <br>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="floor1">
                                                        <div class="properties__floor--plans__display">
                                                            <img src="images/floor-display.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade " id="floor2">
                                                        <div class="properties__floor--plans__display">
                                                            <img src="images/floor-display.png" alt="img">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade " id="floor3">
                                                        <div class="properties__floor--plans__display">
                                                            <img src="images/floor-display.png" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="listing__details--content__step mb-80">
                                        <div class="listing__details--location__header d-flex justify-content-between mb-40">
                                            <div class="listing__details--location__header--left">
                                                <h3 class="listing__details--content__title m-0">Location & Google Maps</h3>
                                            </div>
                                            <div class="location__google--maps">
                                                <details>
                                                    <summary>Open on Google Maps</summary>
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20227915.86434928!2d1.2189515269861546!3d38.76296158058813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6f73e994d3fb5891%3A0x783ff0a076fdb99!2sCosing%20Connect%20Ltd%2C%20United%20Kingdom!5e0!3m2!1sen!2sbd!4v1699676848803!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </details>
                                            </div>
                                        </div>
                                        <div class="location__google--maps__info d-flex" style="color: #ffff;">
                                            <ul class="location__google--maps__info--step" style="color: #ffff;">
                                                <li class="location__google--maps__info--list d-flex">
                                                    <span class="location__google--maps__info--title">Address:</span>
                                                    <span class="location__google--maps__info--subtitle" style="color: #ffff; font-size:15px;">289 Foxhall Ave, Kingston</span>
                                                </li>
                                                <li class="location__google--maps__info--list d-flex">
                                                    <span class="location__google--maps__info--title">Country: </span>
                                                    <span class="location__google--maps__info--subtitle" style="color: #ffff; font-size:15px;">United States</span>
                                                </li>
                                                <li class="location__google--maps__info--list d-flex">
                                                    <span class="location__google--maps__info--title">Province/State: </span>
                                                    <span class="location__google--maps__info--subtitle" style="color: #ffff; font-size:15px;">New Work</span>
                                                </li>
                                            </ul>
                                            <ul class="location__google--maps__info--step">
                                                <li class="location__google--maps__info--list d-flex">
                                                    <span class="location__google--maps__info--title">City/Town:</span>
                                                    <span class="location__google--maps__info--subtitle" style="color: #ffff; font-size:15px;">United States</span>
                                                </li>
                                                <li class="location__google--maps__info--list d-flex">
                                                    <span class="location__google--maps__info--title">Neighborhood:  </span>
                                                    <span class="location__google--maps__info--subtitle" style="color: #ffff; font-size:15px;">United States</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="listing__details--content__step mb-80">
                                        <h3 class="listing__details--content__title mb-40">Video</h3>
                                        <div class="listing__details--video__thumbnail position-relative">
                                            <img src="images/property-video-thumbnail.png" alt="img">
                                            <div class="bideo__play">
                                                <a class="bideo__play--icon glightbox" href="https://vimeo.com/115041822" data-gallery="video">
                                                    <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.9358 7.28498C12.5203 7.67662 12.5283 8.53339 11.9512 8.93591L1.99498 15.8809C1.33555 16.3409 0.430441 15.8741 0.422904 15.0701L0.294442 1.36797C0.286904 0.563996 1.1831 0.0802964 1.85104 0.527837L11.9358 7.28498Z" fill="currentColor"/>
                                                    </svg>                                        
                                                    <span class="visually-hidden">Video Play</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="listing__details--content__step mb-80">
                                        <h3 class="listing__details--content__title mb-40">Property Review</h3>
                                        <div class="listing__details--review d-flex">
                                            <div class="details__review--box">
                                                <h3 class="details__review--box__point">4.5</h3>
                                                <h5 class="details__review--box__subtitle">out of <span>5.0</span></h5>
                                                <div class="details__review--box__rating">
                                                    <img src="assets/img/icon/rating.png" alt="icon">
                                                </div>
                                            </div>
                                            <div class="details__review--wrapper d-flex">
                                                <div class="details__review--step">
                                                    <div class="details__review--list d-flex align-items-center justify-content-between">
                                                        <span class="review__list--title">Property (4.5)</span>
                                                        <ul class="listing__details--rating d-flex">
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                </svg>                                                
                                                            </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="details__review--list d-flex align-items-center justify-content-between">
                                                        <span class="review__list--title">Property (4.5)</span>
                                                        <ul class="listing__details--rating d-flex">
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                </svg>                                                
                                                            </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="details__review--step">
                                                    <div class="details__review--list d-flex align-items-center justify-content-between">
                                                        <span class="review__list--title">Property (4.5)</span>
                                                        <ul class="listing__details--rating d-flex">
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                </svg>                                                
                                                            </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="details__review--list d-flex align-items-center justify-content-between">
                                                        <span class="review__list--title">Property (4.5)</span>
                                                        <ul class="listing__details--rating d-flex">
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                            </svg>
                                                            </span>
                                                            </li>
                                                            <li>
                                                            <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                </svg>                                                
                                                            </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing__details--content__step">
                                        <div class="properties__reviews--comment mb-80">
                                            <h3 class="listing__details--content__title mb-30">Recent Comment</h3>
                                        <div class="properties__reviews--comment__display mb-50 d-flex align-items-center justify-content-between">
                                                <div class="reviews__comment--display__left d-flex align-items-center">
                                                    <span class="reviews__comment--display__text">6 Reviews</span>
                                                    <ul class="reviews__comment--display__rating d-flex">
                                                        <li>
                                                        <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                        </svg>
                                                        </span>
                                                        </li>
                                                        <li>
                                                        <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                        </svg>
                                                        </span>
                                                        </li>
                                                        <li>
                                                        <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                        </svg>
                                                        </span>
                                                        </li>
                                                        <li>
                                                        <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                        </svg>
                                                        </span>
                                                        </li>
                                                        <li>
                                                        <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                            </svg>                                                
                                                        </span>
                                                        </li>
                                                    </ul>
                                                    <span class="reviews__comment--display__text">(5 out of 5)</span>
                                                </div>
                                                
                                                <a class="reviews__comment--write" href="#">Write a Review</a>
                                        </div>
                                        <div class="properties__reviews--comment__inner">
                                                <div class="reviews__comment--step d-flex">
                                                    <div class="reviews__comment--thumb">
                                                        <img src="assets/img/other/comment-author1.jpg" alt="img">
                                                    </div>
                                                    <div class="reviews__comment--content">
                                                        <div class="reviews__comment--top d-flex ">
                                                            <div class="reviews__comment--author__title">
                                                                <h3 class="reviews__comment--author__name">Rohan De Spond</h3>
                                                                <span class="reviews__comment--author__date">25 january 2021</span>
                                                            </div>
                                                            <ul class="reviews__comment--rating d-flex">
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                    </svg>                                                
                                                                </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <p class="reviews__comment--desc">I live in a villa in the Caribbean and I love it. The villa is located on a beautiful stretch
                                                            I am a huge fan of the outdoors and I want to make my villa as nature-friendly as
                                                            I wanted to make a list of the things I've done to make my villa sustainable and so</p>
                                                    </div>
                                                </div>
                                                <div class="reviews__comment--step d-flex">
                                                    <div class="reviews__comment--thumb">
                                                        <img src="assets/img/other/comment-author2.png" alt="img">
                                                    </div>
                                                    <div class="reviews__comment--content">
                                                        <div class="reviews__comment--top d-flex ">
                                                            <div class="reviews__comment--author__title">
                                                                <h3 class="reviews__comment--author__name">
                                                                    Laura Johnson</h3>
                                                                <span class="reviews__comment--author__date">25 january 2021</span>
                                                            </div>
                                                            <ul class="reviews__comment--rating d-flex">
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                    </svg>                                                
                                                                </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <p class="reviews__comment--desc">I live in a villa in the Caribbean and I love it. The villa is located on a beautiful stretch
                                                            I am a huge fan of the outdoors and I want to make my villa as nature-friendly as
                                                            I wanted to make a list of the things I've done to make my villa sustainable and so</p>
                                                    </div>
                                                </div>
                                                <div class="reviews__comment--step d-flex">
                                                    <div class="reviews__comment--thumb">
                                                        <img src="assets/img/other/comment-author3.png" alt="img">
                                                    </div>
                                                    <div class="reviews__comment--content last__content">
                                                        <div class="reviews__comment--top d-flex ">
                                                            <div class="reviews__comment--author__title">
                                                                <h3 class="reviews__comment--author__name">
                                                                    Richard Smith</h3>
                                                                <span class="reviews__comment--author__date">25 january 2021</span>
                                                            </div>
                                                            <ul class="reviews__comment--rating d-flex">
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                                </svg>
                                                                </span>
                                                                </li>
                                                                <li>
                                                                <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                                    </svg>                                                
                                                                </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <p class="reviews__comment--desc">I live in a villa in the Caribbean and I love it. The villa is located on a beautiful stretch
                                                            I am a huge fan of the outdoors and I want to make my villa as nature-friendly as
                                                            I wanted to make a list of the things I've done to make my villa sustainable and so</p>
                                                    </div>
                                                </div>
                                        </div>
                                        </div>

                                        <div class="properties__reviews--comment">
                                            <h3 class="listing__details--content__title mb-30">Leave A Comment</h3>
                                        <div class="properties__reviews--comment__display mb-30">
                                                <div class="reviews__comment--display__left d-flex align-items-center">
                                                    <span class="reviews__comment--display__text">6 Reviews</span>
                                                    <ul class="reviews__comment--display__rating d-flex">
                                                        <li>
                                                        <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                        </svg>
                                                        </span>
                                                        </li>
                                                        <li>
                                                        <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                        </svg>
                                                        </span>
                                                        </li>
                                                        <li>
                                                        <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                        </svg>
                                                        </span>
                                                        </li>
                                                        <li>
                                                        <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#FFB820"></path>
                                                        </svg>
                                                        </span>
                                                        </li>
                                                        <li>
                                                        <span><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.71289 1.40234L5.80859 5.29883L1.50195 5.91406C0.740234 6.03125 0.447266 6.96875 1.00391 7.52539L4.08008 10.543L3.34766 14.791C3.23047 15.5527 4.05078 16.1387 4.72461 15.7871L8.5625 13.7656L12.3711 15.7871C13.0449 16.1387 13.8652 15.5527 13.748 14.791L13.0156 10.543L16.0918 7.52539C16.6484 6.96875 16.3555 6.03125 15.5938 5.91406L11.3164 5.29883L9.38281 1.40234C9.06055 0.728516 8.06445 0.699219 7.71289 1.40234Z" fill="#D8D4CB"></path>
                                                            </svg>                                                
                                                        </span>
                                                        </li>
                                                    </ul>
                                                    <span class="reviews__comment--display__text">(5 out of 5)</span>
                                                </div>
                                        </div>
                                        <div class="reviews__comment--form">
                                                <form action="#">
                                                    <div class="row mb--n30">
                                                        <div class="col-lg-6 mb-30">
                                                            <div class="reviews__comment--input">
                                                                <input class="reviews__comment--input__field" placeholder="Enter your name*" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-30">
                                                            <div class="reviews__comment--input">
                                                                <input class="reviews__comment--input__field" placeholder="Enter your mail*" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-30">
                                                            <div class="reviews__comment--input">
                                                                <input class="reviews__comment--input__field" placeholder="Enter your  number*" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-30">
                                                            <div class="reviews__comment--input">
                                                                <input class="reviews__comment--input__field" placeholder="Website*" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-30">
                                                            <div class="reviews__comment--textarea">
                                                                <textarea class="reviews__comment--textarea__field" placeholder="Write Your Review*"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="reviews__comment--btn solid__btn">Post Review <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 15.9992C12.4111 15.9992 16 12.4105 16 7.99962C16 3.58875 12.411 0 8 0C3.58901 0 0 3.58875 0 7.99962C0 12.4105 3.58901 15.9992 8 15.9992ZM4.19508 7.57155H7.57197V4.19439C7.57197 3.95805 7.76381 3.76636 8 3.76636C8.23634 3.76636 8.42804 3.95821 8.42804 4.19439V7.57155H11.8049C12.0413 7.57155 12.233 7.7634 12.233 7.99958C12.233 8.23592 12.0411 8.42762 11.8049 8.42762H8.42804V11.8046C8.42804 12.041 8.23619 12.2327 8 12.2327C7.76366 12.2327 7.57197 12.0408 7.57197 11.8046V8.42762H4.19508C3.95874 8.42762 3.76704 8.23577 3.76704 7.99958C3.76704 7.76324 3.9586 7.57155 4.19508 7.57155Z" fill="white"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                        </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="listing__widget">

                                
                                <div class="widget__step mb-30">
                                    <h2 class="widget__step--title">Enquire Now</h2>
                                    <div class="widget__form">
                                        <form action="#">
                                            <div class="widget__form--input mb-20">
                                                <input class="widget__form--input__field" placeholder="Full name" type="text">
                                            </div>
                                            <div class="widget__form--input mb-20">
                                                <input class="widget__form--input__field" placeholder="Phone Number" type="text">
                                            </div>
                                            <div class="widget__form--input mb-20">
                                                <input class="widget__form--input__field" placeholder="Email Address" type="email">
                                            </div>
                                            <div class="widget__form--input">
                                                <textarea class="widget__form--textarea__field" placeholder="Write You Messege"></textarea>
                                            </div>
                                            <button class="widget__form--btn solid__btn" type="submit">Send Messege</button>
                                        </form>
                                    </div>
                                </div>

                                <!-- <div class="widget__step mb-30">
                                    <h2 class="widget__step--title">Mortage Calculator</h2>
                                    <div class="widget__form calculator">
                                        <form action="#">
                                            <div class="widget__form--input mb-20">
                                                <input class="widget__form--input__field" placeholder="Price Range" type="text">
                                                <span class="widget__form--input__position--icon"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.19546 6.88512V3.38847C5.94346 3.51464 6.64877 3.82157 7.25175 4.28249C7.37196 4.36493 7.51301 4.40965 7.65904 4.41162C8.1269 4.41162 8.50837 4.03513 8.51332 3.56726C8.51431 3.36661 8.43584 3.1739 8.29479 3.03085C7.4236 2.28482 6.33089 1.84477 5.18553 1.77921V0.607017C5.18553 0.272237 4.91435 0.00105104 4.57957 0.00105104C4.57262 6.74772e-05 4.56564 6.74772e-05 4.5587 6.74772e-05C4.21897 -0.0049118 3.93884 0.266305 3.93386 0.607017V1.73946C1.69878 1.8984 0.178928 3.2792 0.178928 5.11692C0.178928 7.37186 2.09614 7.99771 3.93386 8.49438V12.4679C2.96431 12.3377 2.05043 11.9354 1.30142 11.3056C1.16037 11.1934 0.98551 11.1308 0.804719 11.1269C0.346779 11.1586 -0.00585836 11.5421 7.37487e-05 12.001C-0.000909813 12.2017 0.0775597 12.3944 0.218609 12.5374C1.24477 13.4613 2.56397 13.9927 3.94376 14.0374V15.1301C3.94376 15.1371 3.94474 15.1441 3.94474 15.151C3.96063 15.4907 4.2497 15.753 4.58943 15.7361C4.92421 15.7361 5.1954 15.4649 5.1954 15.1301V14.0176C7.90729 13.8388 9 12.1898 9 10.4414C9.00006 8.09705 7.03322 7.38182 5.19546 6.88512ZM3.94382 6.56725C2.86104 6.24937 2.01668 5.92157 2.01668 4.99773C2.01668 4.07389 2.78159 3.40832 3.94382 3.31894V6.56725ZM5.19546 12.4877V8.87188C6.31798 9.18976 7.19212 9.6169 7.18219 10.6599C7.18219 11.4149 6.66564 12.3089 5.19546 12.4877Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="widget__form--input mb-20">
                                                <input class="widget__form--input__field" placeholder="Down Payment" type="text">
                                                <span class="widget__form--input__position--icon"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.19546 6.88512V3.38847C5.94346 3.51464 6.64877 3.82157 7.25175 4.28249C7.37196 4.36493 7.51301 4.40965 7.65904 4.41162C8.1269 4.41162 8.50837 4.03513 8.51332 3.56726C8.51431 3.36661 8.43584 3.1739 8.29479 3.03085C7.4236 2.28482 6.33089 1.84477 5.18553 1.77921V0.607017C5.18553 0.272237 4.91435 0.00105104 4.57957 0.00105104C4.57262 6.74772e-05 4.56564 6.74772e-05 4.5587 6.74772e-05C4.21897 -0.0049118 3.93884 0.266305 3.93386 0.607017V1.73946C1.69878 1.8984 0.178928 3.2792 0.178928 5.11692C0.178928 7.37186 2.09614 7.99771 3.93386 8.49438V12.4679C2.96431 12.3377 2.05043 11.9354 1.30142 11.3056C1.16037 11.1934 0.98551 11.1308 0.804719 11.1269C0.346779 11.1586 -0.00585836 11.5421 7.37487e-05 12.001C-0.000909813 12.2017 0.0775597 12.3944 0.218609 12.5374C1.24477 13.4613 2.56397 13.9927 3.94376 14.0374V15.1301C3.94376 15.1371 3.94474 15.1441 3.94474 15.151C3.96063 15.4907 4.2497 15.753 4.58943 15.7361C4.92421 15.7361 5.1954 15.4649 5.1954 15.1301V14.0176C7.90729 13.8388 9 12.1898 9 10.4414C9.00006 8.09705 7.03322 7.38182 5.19546 6.88512ZM3.94382 6.56725C2.86104 6.24937 2.01668 5.92157 2.01668 4.99773C2.01668 4.07389 2.78159 3.40832 3.94382 3.31894V6.56725ZM5.19546 12.4877V8.87188C6.31798 9.18976 7.19212 9.6169 7.18219 10.6599C7.18219 11.4149 6.66564 12.3089 5.19546 12.4877Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="widget__form--input mb-20">
                                                <input class="widget__form--input__field" placeholder="Term[Years]" type="email">
                                                <span class="widget__form--input__position--icon"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.7188 2.75H10.3125V1.22656C10.3125 1.05078 10.1367 0.875 9.96094 0.875H8.78906C8.58398 0.875 8.4375 1.05078 8.4375 1.22656V2.75H4.6875V1.22656C4.6875 1.05078 4.51172 0.875 4.33594 0.875H3.16406C2.95898 0.875 2.8125 1.05078 2.8125 1.22656V2.75H1.40625C0.615234 2.75 0 3.39453 0 4.15625V14.4688C0 15.2598 0.615234 15.875 1.40625 15.875H11.7188C12.4805 15.875 13.125 15.2598 13.125 14.4688V4.15625C13.125 3.39453 12.4805 2.75 11.7188 2.75ZM11.543 14.4688H1.58203C1.46484 14.4688 1.40625 14.4102 1.40625 14.293V5.5625H11.7188V14.293C11.7188 14.4102 11.6309 14.4688 11.543 14.4688Z" fill="currentColor"/>
                                                    </svg>                                            
                                                </span>
                                            </div>
                                            <div class="widget__form--input">
                                                <textarea class="widget__form--textarea__field" placeholder="Interest Rate in"></textarea>
                                                <span class="widget__form--textarea__position--icon">
                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_427_298)">
                                                    <path d="M12.8204 0.180805C12.5822 -0.0576641 12.1958 -0.0576641 11.9576 0.180805L0.182682 11.9558C-0.0556855 12.194 -0.0556855 12.5802 0.182682 12.8184C0.301814 12.9377 0.458018 12.9973 0.614119 12.9973C0.770221 12.9973 0.926424 12.9377 1.04545 12.8184L12.8204 1.04348C13.0588 0.805211 13.0588 0.41907 12.8204 0.180805Z" fill="currentColor"/>
                                                    <path d="M2.89819 0.00683594C1.3002 0.00683594 0 1.30714 0 2.90513C0 4.50311 1.3002 5.80331 2.89819 5.80331C4.49627 5.80331 5.79637 4.50301 5.79637 2.90502C5.79637 1.30704 4.49617 0.00683594 2.89819 0.00683594ZM2.89819 4.58294C1.97295 4.58294 1.22027 3.83016 1.22027 2.90502C1.22027 1.97989 1.97305 1.22711 2.89819 1.22711C3.82342 1.22711 4.5761 1.97989 4.5761 2.90502C4.5761 3.83016 3.82342 4.58294 2.89819 4.58294Z" fill="currentColor"/>
                                                    <path d="M10.1023 7.2002C8.5043 7.2002 7.2041 8.5004 7.2041 10.0984C7.2041 11.6964 8.5043 12.9966 10.1023 12.9966C11.7003 12.9966 13.0005 11.6965 13.0005 10.0984C13.0005 8.5003 11.7003 7.2002 10.1023 7.2002ZM10.1023 11.7762C9.17705 11.7762 8.42437 11.0234 8.42437 10.0983C8.42437 9.17315 9.17715 8.42037 10.1023 8.42037C11.0274 8.42037 11.7802 9.17315 11.7802 10.0983C11.7802 11.0234 11.0275 11.7762 10.1023 11.7762Z" fill="currentColor"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_427_298">
                                                    <rect width="13" height="13" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>    
                                                </span>                                        
                                            </div>
                                            <button class="widget__form--btn solid__btn" type="submit">Calculate Interest</button>
                                        </form>
                                    </div>
                                </div> -->
                                <div class="widget__step mb-30">
                                    <h2 class="widget__step--title">Featured Properties</h2>
                                    <div class="widget__featured--properties">
                                        <div class="widget__featured--properties__thumbnail position-relative">
                                            <img src="assets/img/property/property-sidebar.png" alt="img">
                                            <div class="featured__badge">
                                                <span class="badge__field">Featured</span>
                                            </div>
                                        </div>
                                        <div class="widget__featured--properties__content">
                                            <div class="widget__featured--properties__content--top d-flex align-items-center justify-content-between">
                                                <div class="widget__featured--properties__author">
                                                    <img src="assets/img/property/properties-author2.png" alt="img">
                                                </div>
                                                <ul class="widget__featured--properties__share d-flex">
                                                    <li class="widget__featured--properties__share--list position-relative">
                                                    <a class="widget__featured--properties__share--btn" href="#" aria-label="share button"  aria-expanded="false" data-bs-toggle="dropdown"><svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.5111 11.2118C11.5684 11.2118 10.7529 11.6195 10.1923 12.282L5.86064 10.0396C6.06451 9.63191 6.16636 9.17334 6.16636 8.68916C6.16636 8.20498 6.03892 7.74642 5.86064 7.33868L10.1923 5.09633C10.7529 5.75879 11.5938 6.16652 12.5111 6.16652C14.1929 6.16652 15.5944 4.79065 15.5944 3.08326C15.5944 1.40149 14.2185 0 12.5111 0C10.8038 0.000355502 9.42786 1.45268 9.42786 3.13445C9.42786 3.54218 9.50429 3.89892 9.63173 4.25565L5.2236 6.52344C4.66302 5.96286 3.89856 5.63152 3.05765 5.63152C1.40149 5.63152 0 7.03301 0 8.71478C0 10.3966 1.37587 11.798 3.08326 11.798C3.92413 11.798 4.6886 11.4667 5.24922 10.9061L9.65734 13.1739C9.5299 13.5306 9.45347 13.8874 9.45347 14.2951C9.45347 15.9769 10.8293 17.3784 12.5367 17.3784C14.2439 17.3784 15.62 16.0025 15.62 14.2951C15.6196 12.5879 14.1928 11.2118 12.5112 11.2118L12.5111 11.2118ZM12.5111 1.09595C13.6323 1.09595 14.575 2.01325 14.575 3.15984C14.575 4.28104 13.6577 5.22374 12.5111 5.22374C11.3644 5.22391 10.447 4.28099 10.447 3.13441C10.447 2.01321 11.3644 1.0959 12.5111 1.0959V1.09595ZM3.08324 10.7786C1.96204 10.7786 1.01934 9.86132 1.01934 8.71474C1.01934 7.59354 1.93665 6.65084 3.08324 6.65084C4.20444 6.65084 5.14714 7.56815 5.14714 8.71474C5.14731 9.83593 4.20439 10.7786 3.08324 10.7786ZM12.5111 16.3334C11.3899 16.3334 10.4472 15.4161 10.4472 14.2695C10.4472 13.123 11.3645 12.2056 12.5111 12.2056C13.6577 12.2056 14.575 13.123 14.575 14.2695C14.575 15.4161 13.6321 16.3334 12.5111 16.3334Z" fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">Share</span>
                                                    </a>
                                                    <ul class="dropdown-menu share__dropdown--menu" style="margin: 0px;">
                                                        <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="https://www.facebook.com/"><span>Facebook</span> <svg width="8" height="15" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.52148 5.07812L6.29297 7.3125H4.49023V13.8125H1.82422V7.3125H0.478516V5.07812H1.79883V3.73242C1.79883 3.27539 1.84115 2.86914 1.92578 2.51367C2.02734 2.14128 2.19661 1.83659 2.43359 1.59961C2.67057 1.3457 2.9668 1.15104 3.32227 1.01562C3.69466 0.880208 4.15169 0.8125 4.69336 0.8125H6.49609V3.04688H5.37891C5.15885 3.04688 4.98958 3.07227 4.87109 3.12305C4.7526 3.1569 4.65951 3.21615 4.5918 3.30078C4.54102 3.36849 4.50716 3.46159 4.49023 3.58008C4.47331 3.68164 4.46484 3.80859 4.46484 3.96094V5.07812H6.49609H6.52148Z" fill="currentColor" fill-opacity="1"></path>
                                                            </svg>
                                                            </a>
                                                        </li>
                                                        <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="#modalToggle3"><span>Twitter</span> <svg width="15" height="12" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.375 2.67188C12.375 2.70573 12.375 2.73958 12.375 2.77344C12.3919 2.79036 12.3919 2.81576 12.375 2.84961C12.375 2.88346 12.375 2.91732 12.375 2.95117C12.3919 2.9681 12.3919 2.99349 12.375 3.02734C12.3919 3.89062 12.2311 4.7793 11.8926 5.69336C11.554 6.60742 11.0632 7.42839 10.4199 8.15625C9.79362 8.86719 9.00651 9.45964 8.05859 9.93359C7.11068 10.3906 6.02734 10.6107 4.80859 10.5938C4.41927 10.6107 4.04688 10.5938 3.69141 10.543C3.33594 10.4753 2.98047 10.3991 2.625 10.3145C2.26953 10.2129 1.93099 10.0859 1.60938 9.93359C1.30469 9.76432 1 9.59505 0.695312 9.42578C0.763021 9.40885 0.813802 9.40885 0.847656 9.42578C0.898438 9.44271 0.957682 9.45117 1.02539 9.45117C1.0931 9.43424 1.14388 9.43424 1.17773 9.45117C1.22852 9.45117 1.28776 9.44271 1.35547 9.42578C1.66016 9.44271 1.96484 9.42578 2.26953 9.375C2.57422 9.30729 2.86198 9.23112 3.13281 9.14648C3.40365 9.06185 3.66602 8.94336 3.91992 8.79102C4.19076 8.63867 4.4362 8.47786 4.65625 8.30859C4.36849 8.29167 4.08919 8.24089 3.81836 8.15625C3.54753 8.07161 3.30208 7.94466 3.08203 7.77539C2.87891 7.58919 2.69271 7.39453 2.52344 7.19141C2.37109 6.97135 2.26107 6.71745 2.19336 6.42969C2.21029 6.46354 2.24414 6.48047 2.29492 6.48047C2.3457 6.46354 2.38802 6.46354 2.42188 6.48047C2.45573 6.4974 2.49805 6.50586 2.54883 6.50586C2.59961 6.48893 2.63346 6.48893 2.65039 6.50586C2.73503 6.48893 2.80273 6.48893 2.85352 6.50586C2.9043 6.50586 2.96354 6.4974 3.03125 6.48047C3.09896 6.46354 3.1582 6.45508 3.20898 6.45508C3.25977 6.43815 3.31901 6.42122 3.38672 6.4043C3.0651 6.35352 2.77734 6.24349 2.52344 6.07422C2.26953 5.90495 2.04102 5.71029 1.83789 5.49023C1.65169 5.27018 1.50781 5.01628 1.40625 4.72852C1.30469 4.42383 1.24544 4.11914 1.22852 3.81445C1.24544 3.7806 1.24544 3.77214 1.22852 3.78906C1.24544 3.77214 1.24544 3.76367 1.22852 3.76367C1.22852 3.76367 1.23698 3.75521 1.25391 3.73828C1.32161 3.80599 1.40625 3.85677 1.50781 3.89062C1.60938 3.92448 1.70247 3.95833 1.78711 3.99219C1.88867 4.02604 1.9987 4.05143 2.11719 4.06836C2.23568 4.06836 2.33724 4.08529 2.42188 4.11914C2.26953 3.98372 2.10872 3.83984 1.93945 3.6875C1.78711 3.53516 1.66016 3.35742 1.55859 3.1543C1.47396 2.95117 1.39779 2.74805 1.33008 2.54492C1.26237 2.3418 1.23698 2.11328 1.25391 1.85938C1.23698 1.75781 1.23698 1.64779 1.25391 1.5293C1.28776 1.39388 1.31315 1.27539 1.33008 1.17383C1.36393 1.07227 1.40625 0.96224 1.45703 0.84375C1.50781 0.72526 1.55859 0.623698 1.60938 0.539062C1.94792 0.928385 2.31185 1.29232 2.70117 1.63086C3.10742 1.9694 3.54753 2.25716 4.02148 2.49414C4.49544 2.73112 4.98633 2.92578 5.49414 3.07812C6.00195 3.21354 6.54362 3.28971 7.11914 3.30664C7.08529 3.27279 7.06836 3.23047 7.06836 3.17969C7.08529 3.11198 7.08529 3.0612 7.06836 3.02734C7.05143 2.97656 7.04297 2.92578 7.04297 2.875C7.04297 2.80729 7.03451 2.75651 7.01758 2.72266C7.03451 2.33333 7.11068 1.98633 7.24609 1.68164C7.38151 1.36003 7.56771 1.08073 7.80469 0.84375C8.05859 0.589844 8.34635 0.395182 8.66797 0.259766C8.98958 0.124349 9.33659 0.0481771 9.70898 0.03125C9.89518 0.0481771 10.0814 0.0735677 10.2676 0.107422C10.4538 0.141276 10.623 0.200521 10.7754 0.285156C10.9447 0.352865 11.1055 0.4375 11.2578 0.539062C11.4102 0.640625 11.5371 0.759115 11.6387 0.894531C11.8079 0.860677 11.9603 0.826823 12.0957 0.792969C12.2311 0.759115 12.375 0.708333 12.5273 0.640625C12.6797 0.572917 12.8151 0.513672 12.9336 0.462891C13.069 0.395182 13.2129 0.31901 13.3652 0.234375C13.2975 0.403646 13.2298 0.55599 13.1621 0.691406C13.0944 0.826823 13.0013 0.96224 12.8828 1.09766C12.7812 1.21615 12.6712 1.32617 12.5527 1.42773C12.4512 1.5293 12.3242 1.63086 12.1719 1.73242C12.3073 1.69857 12.4342 1.67318 12.5527 1.65625C12.6882 1.63932 12.8236 1.61393 12.959 1.58008C13.0944 1.5293 13.2214 1.48698 13.3398 1.45312C13.4583 1.41927 13.5853 1.36003 13.7207 1.27539C13.6191 1.42773 13.5176 1.56315 13.416 1.68164C13.3314 1.80013 13.2214 1.92708 13.0859 2.0625C12.9674 2.18099 12.849 2.29102 12.7305 2.39258C12.6289 2.47721 12.502 2.57878 12.3496 2.69727L12.375 2.67188Z" fill="currentColor"></path>
                                                            </svg>
                                                            </a>
                                                        </li>
                                                        <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="https://www.instagram.com/"><span>Instagram</span> <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.27881 4.20703C10.4937 4.20703 12.3218 6.03516 12.3218 8.25C12.3218 10.5 10.4937 12.293 8.27881 12.293C6.02881 12.293 4.23584 10.5 4.23584 8.25C4.23584 6.03516 6.02881 4.20703 8.27881 4.20703ZM8.27881 10.8867C9.72021 10.8867 10.8804 9.72656 10.8804 8.25C10.8804 6.80859 9.72021 5.64844 8.27881 5.64844C6.80225 5.64844 5.64209 6.80859 5.64209 8.25C5.64209 9.72656 6.8374 10.8867 8.27881 10.8867ZM13.4116 4.06641C13.4116 4.59375 12.9897 5.01562 12.4624 5.01562C11.9351 5.01562 11.5132 4.59375 11.5132 4.06641C11.5132 3.53906 11.9351 3.11719 12.4624 3.11719C12.9897 3.11719 13.4116 3.53906 13.4116 4.06641ZM16.0835 5.01562C16.1538 6.31641 16.1538 10.2188 16.0835 11.5195C16.0132 12.7852 15.7319 13.875 14.8179 14.8242C13.9038 15.7383 12.7788 16.0195 11.5132 16.0898C10.2124 16.1602 6.31006 16.1602 5.00928 16.0898C3.74365 16.0195 2.65381 15.7383 1.70459 14.8242C0.790527 13.875 0.509277 12.7852 0.438965 11.5195C0.368652 10.2188 0.368652 6.31641 0.438965 5.01562C0.509277 3.75 0.790527 2.625 1.70459 1.71094C2.65381 0.796875 3.74365 0.515625 5.00928 0.445312C6.31006 0.375 10.2124 0.375 11.5132 0.445312C12.7788 0.515625 13.9038 0.796875 14.8179 1.71094C15.7319 2.625 16.0132 3.75 16.0835 5.01562ZM14.396 12.8906C14.8179 11.8711 14.7124 9.41016 14.7124 8.25C14.7124 7.125 14.8179 4.66406 14.396 3.60938C14.1147 2.94141 13.5874 2.37891 12.9194 2.13281C11.8647 1.71094 9.40381 1.81641 8.27881 1.81641C7.11865 1.81641 4.65771 1.71094 3.63818 2.13281C2.93506 2.41406 2.40771 2.94141 2.12646 3.60938C1.70459 4.66406 1.81006 7.125 1.81006 8.25C1.81006 9.41016 1.70459 11.8711 2.12646 12.8906C2.40771 13.5938 2.93506 14.1211 3.63818 14.4023C4.65771 14.8242 7.11865 14.7188 8.27881 14.7188C9.40381 14.7188 11.8647 14.8242 12.9194 14.4023C13.5874 14.1211 14.1499 13.5938 14.396 12.8906Z" fill="currentColor"></path>
                                                            </svg>                                                        
                                                            </a>
                                                        </li>
                                                        <li class="social__share--list"><a class="social__share--link" data-bs-toggle="modal" href="https://www.pinterest.com/"><span>Pinterest</span> <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.502 4.56055C10.502 5.28841 10.4004 5.96549 10.1973 6.5918C10.0111 7.2181 9.74023 7.75977 9.38477 8.2168C9.0293 8.6569 8.60612 9.01237 8.11523 9.2832C7.62435 9.53711 7.08268 9.6556 6.49023 9.63867C6.28711 9.6556 6.08398 9.63867 5.88086 9.58789C5.69466 9.52018 5.51693 9.45247 5.34766 9.38477C5.19531 9.30013 5.0599 9.19857 4.94141 9.08008C4.82292 8.96159 4.72982 8.85156 4.66211 8.75C4.56055 9.15625 4.47591 9.49479 4.4082 9.76562C4.34049 10.0365 4.28125 10.248 4.23047 10.4004C4.19661 10.5358 4.17122 10.6374 4.1543 10.7051C4.1543 10.7559 4.1543 10.7728 4.1543 10.7559C4.10352 10.9082 4.05273 11.0521 4.00195 11.1875C3.95117 11.3229 3.89193 11.4668 3.82422 11.6191C3.75651 11.7546 3.68034 11.8815 3.5957 12C3.52799 12.1185 3.46029 12.237 3.39258 12.3555C3.18945 12.4909 3.02865 12.5501 2.91016 12.5332C2.80859 12.5332 2.72396 12.4909 2.65625 12.4062C2.60547 12.3216 2.57161 12.237 2.55469 12.1523C2.53776 12.0846 2.5293 12.0423 2.5293 12.0254C2.51237 11.9069 2.50391 11.7799 2.50391 11.6445C2.50391 11.4922 2.50391 11.3483 2.50391 11.2129C2.52083 11.0605 2.53776 10.9082 2.55469 10.7559C2.58854 10.6035 2.6224 10.4681 2.65625 10.3496C2.65625 10.3327 2.66471 10.2819 2.68164 10.1973C2.71549 10.0957 2.76628 9.90104 2.83398 9.61328C2.90169 9.30859 2.99479 8.89388 3.11328 8.36914C3.23177 7.8444 3.39258 7.15039 3.5957 6.28711C3.54492 6.18555 3.5026 6.05859 3.46875 5.90625C3.4349 5.75391 3.40951 5.62695 3.39258 5.52539C3.37565 5.4069 3.36719 5.30534 3.36719 5.2207C3.36719 5.13607 3.36719 5.10221 3.36719 5.11914C3.36719 4.83138 3.40104 4.57747 3.46875 4.35742C3.55339 4.12044 3.65495 3.91732 3.77344 3.74805C3.90885 3.56185 4.0612 3.42643 4.23047 3.3418C4.41667 3.24023 4.60286 3.18099 4.78906 3.16406C4.95833 3.18099 5.10221 3.21484 5.2207 3.26562C5.35612 3.31641 5.46615 3.40104 5.55078 3.51953C5.63542 3.63802 5.69466 3.76497 5.72852 3.90039C5.7793 4.01888 5.80469 4.16276 5.80469 4.33203C5.80469 4.48438 5.7793 4.67057 5.72852 4.89062C5.67773 5.09375 5.61849 5.30534 5.55078 5.52539C5.48307 5.74544 5.4069 5.98242 5.32227 6.23633C5.25456 6.47331 5.19531 6.70182 5.14453 6.92188C5.09375 7.14193 5.08529 7.33659 5.11914 7.50586C5.16992 7.6582 5.24609 7.81055 5.34766 7.96289C5.46615 8.09831 5.61003 8.19987 5.7793 8.26758C5.94857 8.33529 6.1263 8.3776 6.3125 8.39453C6.66797 8.3776 6.98958 8.26758 7.27734 8.06445C7.5651 7.86133 7.81055 7.57357 8.01367 7.20117C8.23372 6.82878 8.39453 6.41406 8.49609 5.95703C8.61458 5.48307 8.67383 4.9668 8.67383 4.4082C8.67383 4.01888 8.60612 3.64648 8.4707 3.29102C8.33529 2.93555 8.13216 2.63932 7.86133 2.40234C7.60742 2.14844 7.28581 1.94531 6.89648 1.79297C6.52409 1.64062 6.08398 1.57292 5.57617 1.58984C5.01758 1.57292 4.50977 1.66602 4.05273 1.86914C3.61263 2.07227 3.23177 2.33464 2.91016 2.65625C2.58854 2.97786 2.3431 3.35872 2.17383 3.79883C2.00456 4.22201 1.91992 4.66211 1.91992 5.11914C1.91992 5.30534 1.92839 5.46615 1.94531 5.60156C1.97917 5.72005 2.01302 5.84701 2.04688 5.98242C2.09766 6.10091 2.14844 6.21094 2.19922 6.3125C2.26693 6.39714 2.3431 6.4987 2.42773 6.61719C2.46159 6.63411 2.48698 6.66797 2.50391 6.71875C2.52083 6.7526 2.5293 6.77799 2.5293 6.79492C2.54622 6.81185 2.55469 6.8457 2.55469 6.89648C2.55469 6.93034 2.54622 6.96419 2.5293 6.99805C2.51237 7.04883 2.49544 7.09961 2.47852 7.15039C2.47852 7.18424 2.47005 7.23503 2.45312 7.30273C2.4362 7.37044 2.41927 7.42969 2.40234 7.48047C2.38542 7.51432 2.37695 7.55664 2.37695 7.60742C2.36003 7.64128 2.33464 7.68359 2.30078 7.73438C2.28385 7.76823 2.25846 7.79362 2.22461 7.81055C2.19076 7.81055 2.1569 7.81901 2.12305 7.83594C2.08919 7.83594 2.04688 7.81901 1.99609 7.78516C1.74219 7.68359 1.51367 7.53971 1.31055 7.35352C1.12435 7.15039 0.972005 6.93034 0.853516 6.69336C0.735026 6.45638 0.641927 6.18555 0.574219 5.88086C0.50651 5.57617 0.472656 5.27148 0.472656 4.9668C0.472656 4.42513 0.582682 3.88346 0.802734 3.3418C1.03971 2.80013 1.37826 2.30078 1.81836 1.84375C2.25846 1.38672 2.80859 1.02279 3.46875 0.751953C4.12891 0.464193 4.89909 0.311849 5.7793 0.294922C6.49023 0.311849 7.13346 0.438802 7.70898 0.675781C8.30143 0.895833 8.80078 1.20898 9.20703 1.61523C9.61328 2.02148 9.92643 2.47852 10.1465 2.98633C10.3835 3.47721 10.502 4.00195 10.502 4.56055Z" fill="currentColor"></path>
                                                            </svg>                                                                                                                
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    </li>
                                                    <li class="widget__featured--properties__share--list">
                                                    <a class="widget__featured--properties__share--btn" href="listing.html">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.855 0C5.77166 0 3.77371 0.82758 2.30076 2.30076C0.82758 3.77375 0 5.77171 0 7.855C0 9.9383 0.82758 11.9363 2.30076 13.4092C3.77375 14.8824 5.7717 15.71 7.855 15.71C9.9383 15.71 11.9363 14.8824 13.4092 13.4092C14.8824 11.9363 15.71 9.9383 15.71 7.855C15.7073 5.77252 14.8789 3.77621 13.4062 2.30395C11.9338 0.831315 9.93743 0.00286936 7.85518 0.000182413L7.855 0ZM7.855 14.1388C6.18845 14.1388 4.59008 13.4767 3.41151 12.2983C2.23313 11.1197 1.571 9.52132 1.571 7.85482C1.571 6.18832 2.23313 4.5899 3.41151 3.41133C4.59008 2.23295 6.1885 1.57082 7.855 1.57082C9.5215 1.57082 11.1199 2.23295 12.2985 3.41133C13.4769 4.5899 14.139 6.18832 14.139 7.85482C14.1376 9.521 13.4751 11.1187 12.2969 12.2967C11.1189 13.4749 9.52118 14.1374 7.855 14.1388Z" fill="currentColor"></path>
                                                            <path d="M11.5835 7.06853H8.64034V4.12541C8.64034 3.84469 8.49072 3.58552 8.24772 3.44511C8.00471 3.30475 7.70514 3.30475 7.46213 3.44511C7.21912 3.58547 7.06951 3.84467 7.06951 4.12541V7.06853H4.12639C3.84567 7.06853 3.58649 7.21815 3.44609 7.46115C3.30573 7.70416 3.30573 8.00373 3.44609 8.24674C3.58645 8.48975 3.84564 8.63936 4.12639 8.63936H7.06951V11.5825C7.06951 11.8632 7.21912 12.1224 7.46213 12.2628C7.70513 12.4031 8.00471 12.4031 8.24772 12.2628C8.49072 12.1224 8.64034 11.8632 8.64034 11.5825V8.63936H11.5835C11.8642 8.63936 12.1234 8.48975 12.2638 8.24674C12.4041 8.00374 12.4041 7.70416 12.2638 7.46115C12.1234 7.21815 11.8642 7.06853 11.5835 7.06853Z" fill="currentColor"></path>
                                                        </svg>                                                   
                                                        <span class="visually-hidden">listing</span>
                                                    </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="widget__featured--properties__desc"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#F23B3B"></path>
                                                </svg>
                                                1421 San Pedro St, Los Angeles, CA</p>
                                            <h3 class="widget__featured--properties__title">Single Family Home</h3>
                                            <div class="widget__featured--propertie__price d-flex">
                                                <span class="new__price">$13000</span>
                                                <span class="old__price">$16000</span>
                                            </div>    
                                        </div>
                                    </div>
                                </div>

                                <div class="widget__step">
                                    <h2 class="widget__step--title">Featured Items</h2>
                                    <div class="widget__featured">
                                        <div class="widget__featured--items d-flex">
                                            <div class="widget__featured--thumb">
                                                <a class="widget__featured--thumb__link" href="listing-details.html"><img class="widget__featured--media" src="assets/img/property/featured1.jpg" alt="img"></a>
                                            </div>
                                            <div class="widget__featured--content">
                                                <h3 class="widget__featured--title"><a href="listing-details.html">am tempus turpis ametus</a></h3>
                                                <span class="widget__featured--price">$2,745 /mo</span>
                                            </div>
                                        </div>
                                        <div class="widget__featured--items d-flex">
                                            <div class="widget__featured--thumb">
                                                <a class="widget__featured--thumb__link" href="listing-details.html"><img class="widget__featured--media" src="assets/img/property/featured2.jpg" alt="img"></a>
                                            </div>
                                            <div class="widget__featured--content">
                                                <h3 class="widget__featured--title"><a href="listing-details.html">tos lobortis des mollis ut risus</a></h3>
                                                <span class="widget__featured--price">$4,749 /mo</span>
                                            </div>
                                        </div>
                                        <div class="widget__featured--items d-flex">
                                            <div class="widget__featured--thumb">
                                                <a class="widget__featured--thumb__link" href="listing-details.html"><img class="widget__featured--media" src="assets/img/property/featured3.jpg" alt="img"></a>
                                            </div>
                                            <div class="widget__featured--content">
                                                <h3 class="widget__featured--title"><a href="listing-details.html">ut labore et dolore magna aliqua.</a></h3>
                                                <span class="widget__featured--price">$2,745 /mo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Listing page section . -->


         <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start--> 
</body>
</html>