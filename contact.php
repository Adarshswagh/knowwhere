<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/knowcontact.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




    <title>Document</title>
</head>
<body>
    
<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->


  <!-- banner -->
  <section id="banner-contact1">
    <div class="banner-contact" >
        <div class="contact-content">
            <h2 class="contact-heading">Contact US</h2>
            <p class="contact-para"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">About Us</a></p>
        </div>
    </div>
</section>

<!--end banner  -->

 <!-- get in touch -->


 <section class="contact-section">
    <div class="contact-container">
        <div class="form-container">
            <form style="text-align:center">
                <div class="input-group" style="width:102%">
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullamcorper luctus, lacus ex consequat ipsum.</p>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> 918 Abner Road, Hudson</li>
                <li><i class="fas fa-envelope"></i> example@mail.com</li>
                <li><i class="fas fa-phone-alt"></i> +1 234 567 890</li>
                <li><i class="fas fa-clock"></i> 07.00 AM - 23.00 PM</li>
            </ul>
            <div class="social-icon facebook">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="social-icon twitter">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="social-icon youtube">
                <i class="fab fa-youtube"></i>
            </div>
            <div class="social-icon linkedin">
                <i class="fab fa-linkedin-in"></i>
            </div>

        </div>

        

    </div>
</section>


 <!-- end get iin touch -->

 <!-- map -->
 <div class="map-container">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.85175304397!2d73.69835373134883!3d18.52346201558182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9c942ac6da1%3A0xaf0c3b2d5db3b890!2sKnowhere%20Real%20Estate%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1729160471039!5m2!1sen!2sin" width="1400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        width="100%"
        height="450"
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

  <!-- end map -->

   <!--	Footer   start-->
 <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>