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







<!--	Footer   start-->
    <?php include("include/footer.php");?>
    <!--	Footer   start-->
    
</body>
</html>