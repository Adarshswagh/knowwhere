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

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>

<style>
.body{
    font-family: "Lexend", Sans-serif;
}

    .loan-offer-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #050f17; /* Dark background color */
    padding: 50px;
    color: #fff; /* White text color for contrast */
    margin-left: 150px;
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
    color: #615dfa; /* Highlight color for 'Home Loan Offers' */
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
    color: #615dfa;
    text-decoration: underline;
}

.get-quote-button {
    padding: 15px 30px;
    background-color: #615dfa; /* Button color */
    color: #fff;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.get-quote-button:hover {
    background-color: #4b49e1; /* Darker shade on hover */
}

.image-wrapper img {
    max-width: 400px;
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
            <p><a href="#" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Home Loan</a></p>
        </div>
    </div>
</section>

<!--end banner  -->

<!-- why choose us -->
<body>
    <section class="why-choose-us" style = "background-color: #050f17;">
        <h2>WHY CHOOSE US?</h2>
        <div class="features">
            <div class="feature">
                <div class="icon" style="color: green;">&#37;</div>
                <h3>GREAT RATES</h3>
                <p style = "text-align:center;">There are many variations of passages of Lorem Ipsum available, alteration in some form.</p>
            </div>
            <div class="feature">
                <div class="icon" style="color: orange;">&#9679;</div>
                <h3>CONVENIENT</h3>
                <p style = "text-align:center;">There are many variations of passages of Lorem Ipsum available, alteration in some form.</p>
            </div>
            <div class="feature">
                <div class="icon" style="color: blue;">&#128187;</div>
                <h3>SIMPLE</h3>
                <p style = "text-align:center;">There are many variations of passages of Lorem Ipsum available, alteration in some form.</p>
            </div>
        </div>
    </section>
</body>

<!-- about section -->
<section class="business-loan" style = "background-color: #050f17;">
        <div class="image-container" style="height:400px;">
            <img src="images/bannerabout.jpg" alt="People in a business setting">
        </div>
        <div class="content">
            <h2>About Business Loan</h2>
            <p>Make your dream home a reality with our leading home loan services. Urban Money has tied knots with an array of banks providing nimble and hassle-free mortgage loans. Unlock home credit loans with a host of benefits, like low housing loan interest rates and smaller EMIs to space out your payments over a longer tenure.</p>
            <ul class="checklist">
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
            <button>APPLY FOR A LOAN</button>
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
            <input type="text" placeholder="Required Loan Amount" class="input-field" />
            <input type="text" placeholder="Monthly Net Salary" class="input-field" />
        </div>

        <div class="input-group">
            <select class="input-field">
                <option>Select</option>
                <!-- Add more options here -->
            </select>
            <select class="input-field">
                <option>Choose City</option>
                <!-- Add more options here -->
            </select>
        </div>

        <div class="checkbox-wrapper">
            <input type="checkbox" id="authorize" />
            <label for="authorize">
                I hereby appoint UrbanMoney as my authorised representative to receive my credit information from CIBIL. I hereby accept terms & conditions. <a href="#">Read More.</a>
            </label>
        </div>

        <button class="get-quote-button">Get Quotes →</button>
    </div>
    
    <div class="image-wrapper">
        <img src="images/blog3.jpg" alt="Home illustration" />
    </div>
</div>
 <!-- form end -->


<!-- call to action -->
<section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nibh eu ullam corper luctus, lacus ex consequat ipsum, ultricies interdum ex ante.</p>
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
