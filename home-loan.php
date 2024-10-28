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
    <section class="why-choose-us">
        <h2>WHY CHOOSE US?</h2>
        <div class="features">
            <div class="feature">
                <div class="icon" style="color: green;">&#37;</div>
                <h3>GREAT RATES</h3>
                <p>There are many variations of passages of Lorem Ipsum available, alteration in some form.</p>
            </div>
            <div class="feature">
                <div class="icon" style="color: orange;">&#9679;</div>
                <h3>CONVENIENT</h3>
                <p>There are many variations of passages of Lorem Ipsum available, alteration in some form.</p>
            </div>
            <div class="feature">
                <div class="icon" style="color: blue;">&#128187;</div>
                <h3>SIMPLE</h3>
                <p>There are many variations of passages of Lorem Ipsum available, alteration in some form.</p>
            </div>
        </div>
    </section>
</body>

<!-- about section -->
<section class="business-loan">
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


<div class="loan-section">
    <h2>Top Private Banks For Home Loan - October 2024</h2>
    <div class="loan-card">
        <div class="loan-details">
            <div class="loan-icon">
                <i class="fas fa-university"></i>
            </div>
            <div class="loan-info">
                <h3>Reliance Capital Home Loan</h3>
            </div>
            <button class="apply-btn">Apply Now</button>
        </div>
        <div class="loan-terms">
            <div class="term">
                <span>Interest Rate</span>
                <span>9.75% - 13%</span>
            </div>
            <div class="term">
                <span>Loan Amount</span>
                <span>₹7.5L</span>
            </div>
            <div class="term">
                <span>EMI Per Lakh</span>
                <span>₹2,112 - ₹2,275</span>
            </div>
            <div class="term">
                <span>Processing Fees</span>
                <span>--</span>
            </div>
            <div class="term">
                <span>Pre-Payment Charges</span>
                <span>--</span>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="loan-card">
        <div class="loan-details">
            <div class="loan-icon">
                <i class="fas fa-university"></i>
            </div>
            <div class="loan-info">
                <h3>Reliance Capital Home Loan</h3>
            </div>
            <button class="apply-btn">Apply Now</button>
        </div>
        <div class="loan-terms">
            <div class="term">
                <span>Interest Rate</span>
                <span>9.75% - 13%</span>
            </div>
            <div class="term">
                <span>Loan Amount</span>
                <span>₹7.5L</span>
            </div>
            <div class="term">
                <span>EMI Per Lakh</span>
                <span>₹2,112 - ₹2,275</span>
            </div>
            <div class="term">
                <span>Processing Fees</span>
                <span>--</span>
            </div>
            <div class="term">
                <span>Pre-Payment Charges</span>
                <span>--</span>
            </div>
        </div>
    </div>
    <br>
    <br>    
    <div class="loan-card">
        <div class="loan-details">
            <div class="loan-icon">
                <i class="fas fa-university"></i>
            </div>
            <div class="loan-info">
                <h3>Reliance Capital Home Loan</h3>
            </div>
            <button class="apply-btn">Apply Now</button>
        </div>
        <div class="loan-terms">
            <div class="term">
                <span>Interest Rate</span>
                <span>9.75% - 13%</span>
            </div>
            <div class="term">
                <span>Loan Amount</span>
                <span>₹7.5L</span>
            </div>
            <div class="term">
                <span>EMI Per Lakh</span>
                <span>₹2,112 - ₹2,275</span>
            </div>
            <div class="term">
                <span>Processing Fees</span>
                <span>--</span>
            </div>
            <div class="term">
                <span>Pre-Payment Charges</span>
                <span>--</span>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="loan-card">
        <div class="loan-details">
            <div class="loan-icon">
                <i class="fas fa-university"></i>
            </div>
            <div class="loan-info">
                <h3>Reliance Capital Home Loan</h3>
            </div>
            <button class="apply-btn">Apply Now</button>
        </div>
        <div class="loan-terms">
            <div class="term">
                <span>Interest Rate</span>
                <span>9.75% - 13%</span>
            </div>
            <div class="term">
                <span>Loan Amount</span>
                <span>₹7.5L</span>
            </div>
            <div class="term">
                <span>EMI Per Lakh</span>
                <span>₹2,112 - ₹2,275</span>
            </div>
            <div class="term">
                <span>Processing Fees</span>
                <span>--</span>
            </div>
            <div class="term">
                <span>Pre-Payment Charges</span>
                <span>--</span>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="loan-card">
        <div class="loan-details">
            <div class="loan-icon">
                <i class="fas fa-university"></i>
            </div>
            <div class="loan-info">
                <h3>Reliance Capital Home Loan</h3>
            </div>
            <button class="apply-btn">Apply Now</button>
        </div>
        <div class="loan-terms">
            <div class="term">
                <span>Interest Rate</span>
                <span>9.75% - 13%</span>
            </div>
            <div class="term">
                <span>Loan Amount</span>
                <span>₹7.5L</span>
            </div>
            <div class="term">
                <span>EMI Per Lakh</span>
                <span>₹2,112 - ₹2,275</span>
            </div>
            <div class="term">
                <span>Processing Fees</span>
                <span>--</span>
            </div>
            <div class="term">
                <span>Pre-Payment Charges</span>
                <span>--</span>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="loan-card">
        <div class="loan-details">
            <div class="loan-icon">
                <i class="fas fa-university"></i>
            </div>
            <div class="loan-info">
                <h3>Reliance Capital Home Loan</h3>
            </div>
            <button class="apply-btn">Apply Now</button>
        </div>
        <div class="loan-terms">
            <div class="term">
                <span>Interest Rate</span>
                <span>9.75% - 13%</span>
            </div>
            <div class="term">
                <span>Loan Amount</span>
                <span>₹7.5L</span>
            </div>
            <div class="term">
                <span>EMI Per Lakh</span>
                <span>₹2,112 - ₹2,275</span>
            </div>
            <div class="term">
                <span>Processing Fees</span>
                <span>--</span>
            </div>
            <div class="term">
                <span>Pre-Payment Charges</span>
                <span>--</span>
            </div>
        </div>
    </div>
</div>


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
