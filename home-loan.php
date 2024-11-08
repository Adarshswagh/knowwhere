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
    <link rel="stylesheet" href="css/homeloan.css">
    <!-- <link rel="stylesheet" href="css/knowhome1.css"> -->

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>

<style>
.body{
    font-family: "Lexend", Sans-serif;
}

    .loan-offer-section {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: #050f17; /* Dark background color */
    padding: 50px;
    color: #fff; /* White text color for contrast */
    /* margin-left: 150px; */
    padding-top: 100px;
}

.content-wrapper {
    max-width: 600px;
}

h1 {
    font-size: 32px;
    line-height: 1.2;
    font-weight: 400;
    margin-bottom: 20px;
}

.highlight {
    color: #A8894D; /* Highlight color for 'Home Loan Offers' */
    font-weight: bold;
}

.input-group {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.input-field {
    padding: 12px;
    font-size: 16px;
    width: 100%;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.checkbox-wrapper {
    display: flex;
    align-items: center;
    font-size: 14px;
    margin-bottom: 30px;
}

.checkbox-wrapper label {
    margin-left: 10px;
    color: #ccc;
}

.checkbox-wrapper a {
    color: #A8894D;
    text-decoration: underline;
}

.get-quote-button {
    padding: 11px 18px;
    background-color: #A8894D; /* Button color */
    color: #fff;
    font-size: 18px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.get-quote-button:hover {
    background-color: white; /* Darker shade on hover */
    color: black;
}

.image-wrapper img {
    max-width: 600px;
}


/* business loan */

/* Default styles (for desktop view) */
.business-loan {
    display: flex;
    align-items: center;
    max-width: 100%;
    background-color: #050f17;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* border-radius: 8px; */
    overflow: hidden;
    width: 100%;
    margin: 20px;
    padding: 50px 100px;
    padding-top: 100px;
}

.image-container {
    flex: 1;
}

.image-container img {
    width: 80%;
    height: 100%;
    object-fit: cover;
}

.content {
    flex: 1;
    padding: 20px;
}

.content h2 {
    font-size: 40px;
    color: #A8894D;
    margin: 0 0 10px;
}

.content p {
    font-size: 16px;
    color: #ffffff;
    line-height: 1.5;
    margin-bottom: 20px;
}

button {
    padding: 12px 24px;
    background-color: #ff9900;
    color: #ffffff;
    border: none;
    /* border-radius: 4px; */
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
}

button:hover {
    background-color: #e68a00;
}

/* Responsive Styles for Tablet */
@media (max-width: 1024px) {
    .business-loan {
        flex-direction: column;
        padding: 30px 50px;
        text-align: center;
    }

    .image-container {
        width: 100%;
        height: 300px;
        padding:20px;
    }

    .content h2 {
        font-size: 30px;
    }

    .content p {
        font-size: 14px;
    }

    .checklist {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .checklist .list-left, .checklist .list-right {
        display: inline-block;
        text-align: left;
    }
}

/* Responsive Styles for Mobile */
@media (max-width: 768px) {
    .business-loan {
        flex-direction: column;
        padding: 20px;
        text-align: center;
    }

    .image-container {
        width: 100%;
        height: 250px;
    }

    .content h2 {
        font-size: 24px;
    }

    .content p {
        font-size: 13px;
    }

    .checklist {
        display: block;
        text-align: left;
        padding-left: 20;
    }

    .checklist .list-left, .checklist .list-right {
        display: block;
    }

    button {
        width: 100%;
        padding: 12px;
        font-size: 16px;
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
            <h2>Home Loan</h2>
            <p style = "text-align: center;"><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Home Loan</a></p>
        </div>
    </div>
</section>

<!--end banner  -->

<!-- why choose us -->
<body>
    <section class="why-choose-us" style = "background-color: #050f17;">
        <h3 style =  "color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em; padding-top:100px; padding-bottom:50PX;">Why Choose Us</h2>
        <div class="features">
            <div class="feature">
            <div style= ""><img src="images/star.png" alt="" style="width: 50px; margin-bottom: 10PX;
    height: 50px;
    "></div>
                <h3>GREAT RATES</h3>
                <p style = "text-align:center; font-size:16px;">There are many variations of passages of Lorem Ipsum available, alteration in some form.</p>
            </div>
            <div class="feature">
            <div style= ""><img src="images/convenience.png" alt="" style="width: 50px; margin-bottom: 10PX;
    height: 50px;
    "></div>
                <h3>CONVENIENT</h3>
                <p style = "text-align:center; font-size:16px;">There are many variations of passages of Lorem Ipsum available, alteration in some form.</p>
            </div>
            <div class="feature">
            <div style= ""><img src="images/simple-data-format.png" alt="" style="width: 50px; margin-bottom: 10PX;
    height: 50px;
    "></div>
                <h3>SIMPLE</h3>
                <p style = "text-align:center; font-size:16px;">There are many variations of passages of Lorem Ipsum available, alteration in some form.</p>
            </div>
        </div>
    </section>


<!-- about section -->
<section class="business-loan" style = "background-color: #050f17;">
        <div class="image-container" style="height:400px;">
            <img src="images/home.jpg" alt="People in a business setting">
        </div>
        <div class="content">
            <h2 style ="color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;">About Home Loan</h2>
            <p>Make your dream home a reality with our leading home loan services. Urban Money has tied knots with an array of banks providing nimble and hassle-free mortgage loans. Unlock home credit loans with a host of benefits, like low housing loan interest rates and smaller EMIs to space out your payments over a longer tenure.</p>
            <ul class="checklist" style="font-size:16px;">
                <div class="list-left">
                    <li><span>✔</span> Turning Dreams into Reality</li>
                    <li><span>✔</span> Industry Leadership</li>
                    <li><span>✔</span> Lasting Relationships</li>
                    <li><span>✔</span> Client-Centered Approach</li>
                </div>
                <div class="list-right">
                    <li><span>✔</span> Transparency and Trust </li>
                    
                </div>
            </ul>
            <button style= "border-radius: 0;
    font-size: 15px;
    color: #050f17;
    background-color: #a8894d;
    font-weight: 200;">APPLY FOR A LOAN →</button>
        </div>
    </section>


<!-- faq section -->
<!-- <div class="faq-section">
    <div class="faq-content">
        <h2>Frequently asked questions.</h2>
        <p>Maecenas velit et ut malesuada amet tempor velit dui. Nullam amet commodo gravida gravida.</p>
        <div class="faq-questions">
            <div class="question" onclick="toggleAnswer(this)">
                Curabitur non nulla sit amet nisl tempus?
                <div class="answer">This is the answer to the first question.</div>
            </div>
            <div class="question" onclick="toggleAnswer(this)">
                Quisque velit nisi pretium ut lacinia in?
                <div class="answer">This is the answer to the second question.</div>
            </div>
            <div class="question" onclick="toggleAnswer(this)">
                Quam at scelerisque in velit nisi ultrices neque fames?
                <div class="answer">This is the answer to the third question.</div>
            </div>
        </div>
    </div>
    <div class="faq-image">
        <img src="images/bannerabout.jpg" alt="FAQ Image">
    </div>
</div> -->

<!-- faq section end -->

<!-- form -->

<div class="loan-offer-section">
    <div class="content-wrapper">
        <h1>Unlock Best <span class="highlight">Home Loan Offers</span><br />From 10+ Lenders</h1>
        
        <div class="input-group">
        <input type="text" placeholder=" Full Name" class="input-field" />
        <input type="text" placeholder="Contact Number" class="input-field" />
            <input type="text" placeholder="Required Loan Amount" class="input-field" />
            <input type="text" placeholder="Monthly Net Salary" class="input-field" />
        </div>

        <!-- <div class="input-group">
            <select class="input-field">
                <option>Select</option>
                
            </select>
            <select class="input-field">
                <option>Choose City</option>
                
            </select>
        </div> -->

        <!-- <div class="checkbox-wrapper">
            <input type="checkbox" id="authorize" />
            <label for="authorize">
                I hereby appoint UrbanMoney as my authorised representative to receive my credit information from CIBIL. I hereby accept terms & conditions. <a href="#">Read More.</a>
            </label>
        </div> -->

        <button class="get-quote-button" style= "border-radius: 0;
    font-size: 15px;
    color: #050f17;
    background-color: #a8894d;
    font-weight: 200;">Get Quotes →</button>
    </div>
    
    <div class="image-wrapper">
        <img src="images/homel.png" alt="Home illustration" />
    </div>
</div>
 <!-- form end -->


<!-- call to action -->
<section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p style="text-align:center;">Thank you for choosing Knowhere. Let us turn your real estate dreams into reality.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- end call to action -->

<script>
function toggleAnswer(element) {
    const answer = element.querySelector('.answer');
    if (answer.style.display === 'none' || answer.style.display === '') {
        answer.style.display = 'block';
    } else {
        answer.style.display = 'none';
    }
}
</script>

 <!-- footer -->

   <!--	Footer   start-->
   <?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->
</body>
</html>
