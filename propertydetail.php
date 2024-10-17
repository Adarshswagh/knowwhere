<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags --><!-- FOR MORE PROJECTS visit:  .com -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">


<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/propstyle.css">
<link rel="stylesheet" type="text/css" href="css/knowproperties.css">

<!--	Title
	=========================================================-->
<title>Real Estate PHP</title>

</head>
<body style="background-color: black;">





<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Detail</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Property Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->

		
        <div class="full-row">
            <div class="container">
                <div class="row"><!-- FOR MORE PROJECTS visit:  .com -->
				
					<?php
						$id=$_REQUEST['pid']; 
						$query=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
						while($row=mysqli_fetch_array($query))
						{
					  ?>
				  
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <!-- <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080"      class="ls-bg" alt="" /> </div> -->
                                    
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
                        </div><!-- FOR MORE PROJECTS visit:  .com -->


                        

                        <div class="listing__details--main__content">
                                    <div class="listing__details--content__step mb-80">
                                        <h3 class="listing__details--content__title">Description:</h3>
                                        <p class="listing__details--content__desc" style= "text-align: left">Description It is a long established fact that a reader will be distrac by any websites look for ways
                                            prevent AdBlock from blocking annoying ads. As a result, we've focused on improving our funct
                                            so that we can overcome these anti-ad blocking attempts. Of course, you can help us continue to
                                            improve our ad blocking ability by reporting any time you run into a website that won't allow you
                                            to block the readable content of a page when looking at its layout. It is a long established fact</p>
                                        <div class="apartment__info listing__d--info">
                                            <div class="apartment__info--wrapper d-flex">
                                                <div class="apartment__info--list">
                                                    <span class="apartment__info--icon"><img src="images/bed.png" alt="img"></span>
                                                    <p>
                                                        <span class="apartment__info--count">3</span>
                                                        <span class="apartment__info--title" style = "color:black;">Bedrooms</span>
                                                    </p>
                                                </div>
                                                <div class="apartment__info--list">
                                                    <span class="apartment__info--icon"><img src="images/modern-car.png" alt="img"></span>
                                                    <p>
                                                        <span class="apartment__info--count">3</span>
                                                        <span class="apartment__info--title" style = "color:black;"> Car Parking</span>
                                                    </p>
                                                </div>
                                                <div class="apartment__info--list">
                                                    <span class="apartment__info--icon"><img src="images/set-square.png" alt="img"></span>
                                                    <p>
                                                        <span class="apartment__info--count">3</span>
                                                        <span class="apartment__info--title" style = "color:black;">1249 Sqft</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <!-- property details -->
                                <div class="listing__details--content__step properties__info mb-80">
                                    <h3 class="listing__details--content__title mb-40">Properties Details:</h3>
                                    <ul class="properties__details--info__wrapper d-flex">
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Price:</span>
                                            <span class="properties__details--info__subtitle">$268,000</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Property ID:</span>
                                            <span class="properties__details--info__subtitle">Th26157096</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Area Size:</span>
                                            <span class="properties__details--info__subtitle">400 SqFt</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Land Area Size:</span>
                                            <span class="properties__details--info__subtitle">1300 Sq Ft</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Rooms:</span>
                                            <span class="properties__details--info__subtitle">03</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Washroom:</span>
                                            <span class="properties__details--info__subtitle">03</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Garage:</span>
                                            <span class="properties__details--info__subtitle">04</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- property details end -->


                                <!-- property amenities -->

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

                                <!-- Property amenities end -->

                                <!-- Floor Plans -->

                                <div class="listing__details--content__step mb-80">
                                    <div class="properties__floor--plans d-flex">
                                        <div class="properties__floor--plans__content">
                                            <h3 class="listing__details--content__title mb-40">Floor Plans</h3>
                                            <ul class="properties__floor--plans__info">
                                                <li>
                                                    <img src="images/properties-icon1.png" alt="icon" style="width: 20px;">
                                                    <span>Total Size: 900 </span>
                                                </li>
                                                <li>
                                                    <img src="images/bedroom.png" alt="icon" style="width: 20px;">
                                                    <span>Bedrooms: 2 </span>
                                                </li>
                                                <li>
                                                    <img src="images/bathroom.png" alt="icon" style="width: 20px;">
                                                    <span>Bathrooms: 2 </span>
                                                </li>
                                                <li>
                                                    <img src="images/price.png" alt="icon" style="width: 20px;">
                                                    <span>Price: 800,000</span>
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
                                </div>

                                <!-- Floor Plans end -->

                                <!-- Location -->
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
                                    <div class="location__google--maps__info d-flex">
                                        <ul class="location__google--maps__info--step">
                                            <li class="location__google--maps__info--list d-flex">
                                                <span class="location__google--maps__info--title">Address:</span>
                                                <span class="location__google--maps__info--subtitle">289 Foxhall Ave, Kingston</span>
                                            </li>
                                            <li class="location__google--maps__info--list d-flex">
                                                <span class="location__google--maps__info--title">Country: </span>
                                                <span class="location__google--maps__info--subtitle">United States</span>
                                            </li>
                                            <li class="location__google--maps__info--list d-flex">
                                                <span class="location__google--maps__info--title">Province/State: </span>
                                                <span class="location__google--maps__info--subtitle">New Work</span>
                                            </li>
                                        </ul>
                                        <ul class="location__google--maps__info--step">
                                            <li class="location__google--maps__info--list d-flex">
                                                <span class="location__google--maps__info--title">City/Town:</span>
                                                <span class="location__google--maps__info--subtitle">United States</span>
                                            </li>
                                            <li class="location__google--maps__info--list d-flex">
                                                <span class="location__google--maps__info--title">Neighborhood:  </span>
                                                <span class="location__google--maps__info--subtitle">United States</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- location end -->

                                <div class="listing__details--content__step mb-80">
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
                                </div>
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
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <!-- <div class="bg-success d-table px-3 py-2 rounded text-white text-capitalize">For <?php echo $row['5'];?></div>
                                <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['1'];?></h5>
                                <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-success font-12"></i> &nbsp;<?php echo $row['14'];?></span>
							</div>
                            <div class="col-md-6">
                                <div class="text-success text-left h5 my-2 text-md-right">₹<?php echo $row['13'];?></div>
                                <div class="text-left text-md-right">Price</div> -->
                            </div>
                        </div>
                        <div class="property-details">
                            <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                <!-- <ul>
                                    <li><span class="text-secondary"><?php echo $row['12'];?></span> Sqft</li>
                                    <li><span class="text-secondary"><?php echo $row['6'];?></span> Bedroom</li>
                                    <li><span class="text-secondary"><?php echo $row['7'];?></span> Bathroom</li>
                                    <li><span class="text-secondary"><?php echo $row['8'];?></span> Balcony</li>
                                    <li><span class="text-secondary"><?php echo $row['10'];?></span> Hall</li>
                                    <li><span class="text-secondary"><?php echo $row['9'];?></span> Kitchen</li>
                                </ul> -->
                            </div>
                            <!-- <h4 class="text-secondary my-4">Description</h4> -->
                            <p><?php echo $row['2'];?></p>
                            
                            <!-- <h5 class="mt-5 mb-4 text-secondary">Property Summary</h5> -->
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100">
                                    <!-- <tbody>
                                        <tr>
                                            <td>BHK :</td>
                                            <td class="text-capitalize"><?php echo $row['4'];?></td>
                                            <td>Property Type :</td>
                                            <td class="text-capitalize"><?php echo $row['3'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Floor :</td>
                                            <td class="text-capitalize"><?php echo $row['11'];?></td>
                                            <td>Total Floor :</td>
                                            <td class="text-capitalize"><?php echo $row['28'];?></td>
                                        </tr>
                                        <tr>
                                            <td>City :</td>
                                            <td class="text-capitalize"><?php echo $row['15'];?></td>
                                            <td>State :</td>
                                            <td class="text-capitalize"><?php echo $row['16'];?></td>
                                        </tr>
                                        
                                    </tbody> -->
                                </table>
                            </div>
                            <!-- <h5 class="mt-5 mb-4 text-secondary">Features</h5> -->
                            <div class="row">
								<?php echo $row['17'];?>
								
                            </div>   
							<!-- FOR MORE PROJECTS visit:  .com -->
                            <!-- <h5 class="mt-5 mb-4 text-secondary">Floor Plans</h5>
                            <div class="accordion" id="accordionExample">
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Floor Plans </button>
                                <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['25'];?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Basement Floor</button>
                                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['26'];?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Ground Floor</button>
                                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['27'];?>" alt="Not Available"> </div>
                            </div> -->

                            <!-- <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contact Agent</h5> -->
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <div class="col-sm-4 col-lg-3"> <img src="admin/user/<?php echo $row['uimage']; ?>" alt="" height="200" width="170"> </div>
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-success text-capitalize"><?php echo $row['uname'];?></h6>
                                            <!-- <ul class="mb-3">
                                                <li><?php echo $row['uphone'];?></li>
                                                <li><?php echo $row['uemail'];?></li>
                                            </ul> -->
                                            
                                            <div class="mt-3 text-secondary hover-text-success">
                                                <!-- <ul>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fas fa-rss"></i></a></li>
                                                </ul> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FOR MORE PROJECTS visit:  .com -->
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php } ?>
					
                    <div class="col-lg-4">
                        <div class="widget__step mb-30">
                                    <h2 class="widget__step--title">Send Messege</h2>
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


                                <div class="widget__step mb-30">
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
                                </div>

                        <!-- <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4> -->
                        <!-- <form class="d-inline-block w-100" action="calc.php" method="post">
                            <label class="sr-only">Property Amount</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" name="amount" placeholder="Property Price">
                            </div>
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" name="month" placeholder="Duration Year">
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="text" class="form-control" name="interest" placeholder="Interest Rate">
                            </div>
                            <button type="submit" value="submit" name="calc" class="btn btn-danger mt-4">Calclute Instalment</button>
                        </form> -->
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Featured Property</h4>
                        <ul class="property_list_widget">
							
                            <?php 
                            $query=mysqli_query($con,"SELECT * FROM `property` WHERE isFeatured = 1 ORDER BY date DESC LIMIT 3");
                                    while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                            <li> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                <h6 class="text-secondary hover-text-success text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['14'];?></span>
                                
                            </li>
                            <?php } ?>

                        </ul>

                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently Added Property</h4>
                            <ul class="property_list_widget">
							
								<?php 
								$query=mysqli_query($con,"SELECT * FROM `property` ORDER BY date DESC LIMIT 7");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                <li> <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['14'];?></span>
                                    
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script> 

</body>

</html>