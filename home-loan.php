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
    justify-content: space-around;
    align-items: center;
    /* background-color: #f7f8fc; */
    padding: 50px;
    color: #1a1a1a;
}

.content-wrapper {
    max-width: 600px;
}

h1 {
    font-size: 36px;
    line-height: 1.4;
    font-weight: 400;
    margin-bottom: 20px;
    color: #333;
}

.highlight {
    color: #4a3aff;
    font-weight: bold;
}

.input-group {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    color:#fff;
}

.input-field {
    width: calc(50% - 10px);
    padding: 10px 15px;
    font-size: 16px;
    background:transparent;
    border: 1px solid #dcdcdc;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    color:#fff;
}

.input-field:focus {
    outline: none;
    /* border-color: #4a3aff; */;
    /* box-shadow: 0 0 5px rgba(74, 58, 255, 0.5); */;
    color:#fff;
}

.checkbox-wrapper {
    display: flex;
    align-items: flex-start;
    font-size: 14px;
    margin-bottom: 20px;
    color: #666;
}

.checkbox-wrapper input {
    margin-right: 10px;
    margin-top: 2px;
}

.checkbox-wrapper a {
    color: #4a3aff;
    text-decoration: none;
}

.checkbox-wrapper a:hover {
    text-decoration: underline;
}

.get-quote-button {
    background-color: #4a3aff;
    color: #fff;
    border: none;
    padding: 10px 25px;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s;
}

.get-quote-button:hover {
    background-color: #382fcc;
}

.image-wrapper img {
    max-width: 650px;
    height: auto;
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

/* button:hover {
    background-color: #e68a00;
} */

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

<!-- about section -->
<section class="business-loan" style = "background-color: #050f17;">
        <div class="image-container" style="height:400px;">
            <img src="images/home.jpg" alt="People in a business setting">
        </div>
        <div class="content">
            <h2 style ="color: #A8894D;
            font-size: 50px;
            font-family: 'Italiana', Sans-serif;
            font-weight: 400;
            line-height: 1.3em;">About Home Loan</h2>
            <p>Step into your dream home with Knowhere Money – where family laughter fills the air and pride of ownership swells in your heart. We understand that a home loan is more than a financial transaction; it's the key to your life's next exciting chapter.</p>
            <p>At Knowhere Money, we craft personalized journeys towards homeownership. Our extensive network of trusted banks offers agile, hassle-free mortgage solutions tailored to your unique story. We're your committed partner from the first conversation to the final signature, ensuring a smooth, stress-free process.</p>
            <ul class="checklist" style="font-size:16px;">
                <div class="list-left">
                    <li><span>✔</span> Competitive interest rates</li>
                    <li><span>✔</span> Flexible EMIs</li>
                    <li><span>✔</span> Streamlined application process</li>
                    <li><span>✔</span> Personalized mortgage options</li>
                    <li><span>✔</span> Access to reputable lenders</li>
                    <li><span>✔</span> Expert guidance throughout</li>

                </div>
                <div class="list-right">
                    <li><span>✔</span> Transparency and Trust </li>
                    
                </div>
            </ul>
            <button id="consultationButton" class="home-loan-button" >APPLY FOR A LOAN →</button>
        </div>
</section>

<!-- emnd about -->

<!-- why choose us -->

    <section class="why-choose-us" style = "background-color: #050f17;">
            <h3 style =  "color: #A8894D;
                font-family: 'Italiana', Sans-serif;
                font-size: 50px;
                font-weight: 400;
                line-height: 1.3em; padding-top:100px; padding-bottom:50PX;">Why Choose Us</h3>
            <div class="features">
                <div class="feature">
                    <div style= ""><img src="images/star.png" alt="" style="width: 50px; margin-bottom: 10PX;
                        height: 50px;
                        "></div>
                        <h3>GREAT RATES</h3>
                        <p style = "text-align:center; font-size:16px;"><span style="font-weight:500;font-size:20px;">Looking for affordable home financing?</span><br><br><span style="font-size:15px;">Our extensive network of lenders offers competitive rates, helping you save money over the life of your loan. Compare optiGREAT RATES</span></p>
                    </div>
                <div class="feature">
                <div style= ""><img src="images/convenience.png" alt="" style="width: 50px; margin-bottom: 10PX;
                    height: 50px;
                    "></div>
                    <h3>CONVENIENT</h3>
                    <p style = "text-align:center; font-size:16px;"><span style="font-weight:500;font-size:20px;">Want a stress-free home loan experience?</span><br><br><span style="font-size:15px;">We've streamlined the process to make it convenient for you. From application to approval, our team ensures a smooth journey towards homeownership.</span></p>
                </div>
                <div class="feature">
                <div style= ""><img src="images/simple-data-format.png" alt="" style="width: 50px; margin-bottom: 10PX;
        height: 50px;"></div>
                    <h3>SIMPLE</h3>
                    <p style = "text-align:center; font-size:16px;"><span style="font-weight:500;font-size:20px;">Confused by complex loan jargon?</span><br><br><span style="font-size:15px;">We believe in keeping things simple. Our transparent approach and clear communication make understanding your home loan easy, allowing you to make informed decisions with confidence.</span></p>
                </div>
            </div>
    </section>

<!-- end why chose us  -->







<!-- form -->

<div class="loan-offer-section" id="loanOfferSection">
    <div class="content-wrapper">
        <h2 style="color: #A8894D; font-family: 'Italiana', Sans-serif; font-size: 50px; font-weight: 400; line-height: 1.3em;">
            Unlock Best Home Loan Offers From 10+ Lenders
        </h2><br>

        <div class="input-group">
            <input type="text" id="loanAmount" placeholder="Required Loan Amount" class="input-field" />
            <input type="text" id="monthlySalary" placeholder="Monthly Net Salary" class="input-field" />
        </div>
        <div class="input-group">
            <input type="text" id="occupationType" placeholder="Occupation Type" class="input-field" />
            <input type="text" id="chooseCity" placeholder="Choose City" class="input-field" />
        </div>

        <div class="checkbox-wrapper">
            <input type="checkbox" id="terms-checkbox" />
            <label for="terms-checkbox">
                I hereby appoint UrbanMoney as my authorised representative to receive my credit information from CIBIL. I hereby accept terms & conditions.
            </label>
        </div>

        <button class="home-loan-button" id="getQuotesBtn">Get Quotes →</button>
    </div>

    <div class="image-wrapper">
        <img src="images/homeLeadFrom.svg" alt="Home illustration" />
    </div>
</div>

 <!-- form end -->






 <!-- banks -->
 <div class="loan-container">
    <div class="loan-heading">
        <h2 style="color: #A8894D; font-family: 'Italiana', Sans-serif; font-size: 50px; font-weight: 400; line-height: 1.3em;">
            Top Banks For Home Loan
        </h2>
    </div>
    <br>
    <div class="tabs">
        <button class="tab-button active" onclick="showLoans('private')">Private Bank</button>
        <button class="tab-button" onclick="showLoans('nationalized')">Nationalized Bank</button>
        <button class="tab-button" onclick="showLoans('nbfc')">NBFC</button>
    </div>

    <div id="private" class="loan-list">
        <div class="loan-card">
            <div class="loan-header">
                <div class="loan-title">
                    <img src="images/bank.svg" alt="Bank Icon" width="20"> HDFC Home Loan
                </div>
                <a href="#loanOfferSection" class="action-button">Apply Now</a>
                </div>
            <div class="loan-info">
                <div><strong>Interest Rate</strong><br> 8.5% - 10.5%</div>
                <div><strong>Loan Amount</strong><br> ₹10L - ₹2Cr</div>
                <div><strong>EMI Per Lakh</strong><br> ₹1,987 - ₹2,275</div>
                <div><strong>Processing Fees</strong><br> 0.5%</div>
            </div>
        </div>

        <div class="loan-card">
            <div class="loan-header">
                <div class="loan-title">
                    <img src="images/bank.svg" alt="Bank Icon" width="20"> Axis Home Loan
                </div>
                <a href="#loanOfferSection" class="action-button">Apply Now</a>
                </div>
            <div class="loan-info">
                <div><strong>Interest Rate</strong><br> 8.5% - 10.5%</div>
                <div><strong>Loan Amount</strong><br> ₹10L - ₹2Cr</div>
                <div><strong>EMI Per Lakh</strong><br> ₹1,987 - ₹2,275</div>
                <div><strong>Processing Fees</strong><br> 0.5%</div>
            </div>
        </div>

        <div class="loan-card">
            <div class="loan-header">
                <div class="loan-title">
                    <img src="images/bank.svg" alt="Bank Icon" width="20"> ICICI Home Loan
                </div>
                <a href="#loanOfferSection" class="action-button">Apply Now</a>
                </div>
            <div class="loan-info">
                <div><strong>Interest Rate</strong><br> 8.5% - 10.5%</div>
                <div><strong>Loan Amount</strong><br> ₹10L - ₹2Cr</div>
                <div><strong>EMI Per Lakh</strong><br> ₹1,987 - ₹2,275</div>
                <div><strong>Processing Fees</strong><br> 0.5%</div>
            </div>
        </div>


        <div class="loan-card">
            <div class="loan-header">
                <div class="loan-title">
                    <img src="images/bank.svg" alt="Bank Icon" width="20"> Bajaj Finance Home Loan
                </div>
                <a href="#loanOfferSection" class="action-button">Apply Now</a>
                </div>
            <div class="loan-info">
                <div><strong>Interest Rate</strong><br> 8.5% - 10.5%</div>
                <div><strong>Loan Amount</strong><br> ₹10L - ₹2Cr</div>
                <div><strong>EMI Per Lakh</strong><br> ₹1,987 - ₹2,275</div>
                <div><strong>Processing Fees</strong><br> 0.5%</div>
            </div>
        </div>
    </div>

    <div id="nationalized" class="loan-list" style="display: none;">
        <div class="loan-card">
            <div class="loan-header">
                <div class="loan-title">
                    <img src="images/bank.svg" alt="Bank Icon" width="20"> SBI Home Loan
                </div>
                <a href="#loanOfferSection" class="action-button">Apply Now</a>
                </div>
            <div class="loan-info">
                <div><strong>Interest Rate</strong><br> 7.9% - 9.8%</div>
                <div><strong>Loan Amount</strong><br> ₹5L - ₹1.5Cr</div>
                <div><strong>EMI Per Lakh</strong><br> ₹1,895 - ₹2,150</div>
                <div><strong>Processing Fees</strong><br> 0.3%</div>
            </div>
        </div>

        <div class="loan-card">
            <div class="loan-header">
                <div class="loan-title">
                    <img src="images/bank.svg" alt="Bank Icon" width="20"> PNB Home Loan
                </div>
                <a href="#loanOfferSection" class="action-button">Apply Now</a>
                </div>
            <div class="loan-info">
                <div><strong>Interest Rate</strong><br> 7.9% - 9.8%</div>
                <div><strong>Loan Amount</strong><br> ₹5L - ₹1.5Cr</div>
                <div><strong>EMI Per Lakh</strong><br> ₹1,895 - ₹2,150</div>
                <div><strong>Processing Fees</strong><br> 0.3%</div>
            </div>
        </div>
    </div>

    <div id="nbfc" class="loan-list" style="display: none;">
        <div class="loan-card">
            <div class="loan-header">
                <div class="loan-title">
                    <img src="images/bank.svg" alt="Bank Icon" width="20"> Grihum Bank
                </div>
                <a href="#loanOfferSection" class="action-button">Apply Now</a>
                </div>
            <div class="loan-info">
                <div><strong>Interest Rate</strong><br> 9.5% - 14%</div>
                <div><strong>Loan Amount</strong><br> ₹5L - ₹1Cr</div>
                <div><strong>EMI Per Lakh</strong><br> ₹2,112 - ₹2,500</div>
                <div><strong>Processing Fees</strong><br> 1%</div>
            </div>
        </div>
    </div>
</div>

<script>
    function showLoans(type) {
        document.querySelectorAll('.loan-list').forEach(el => el.style.display = 'none');
        document.getElementById(type).style.display = 'block';
        
        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        event.target.classList.add('active');
    }
</script>

 <!-- end banks -->








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




 <!-- Enquire Button -->
 <div id="enquireButtonContainer">
    <button id="enquireButton">
        Book A Demo
    </button>
</div>

<!-- Enquiry Modal -->

<div id="enquiryModal" style="display:none;">
    <div class="form-container" style="position: relative; padding: 20px; background: #eaeaea; border-radius: 8px;">
        <span id="closeModal" style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 20px;">&times;</span>
        <h3>Enquiry Form</h3>

        <div id="fullFormErrorMessage" class="full-form-message" style="color: red; font-size: 16px;font-weight:500; margin-bottom: 10px; display: none;"></div>
        <div id="fullFormFeedback" class="full-form-message" style="color: #d18d0a; font-size: 16px;font-weight:500; margin-bottom: 10px; display: none;"></div>
                
        
        <form id="enquiryForm" method="POST">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <small class="error-message" id="nameError"></small>

            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <small class="error-message" id="emailError"></small>

            <input type="text" id="phone" name="phone" placeholder="Your Contact Number" required maxlength="10">
            <small class="error-message" id="contactError"></small>

            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
            <small class="error-message" id="messageError"></small>

            <!-- CAPTCHA Section -->
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
                <span id="captchaQuestion" style="font-size: 16px; font-weight: bold; width: 15%;"></span>
                <input type="text" id="captchaAnswer" name="captchaAnswer" placeholder="Enter Answer" required style="width: 100%;margin-bottom:0;">
            </div>
            <small class="error-message" id="captchaError"></small>

            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<style>
    .error-message {
        color: red;
        font-size: 12px;
        display: none;
    }
    .full-form-message {
        font-size: 14px;
        font-weight: bold;
        margin-top: 10px;
        display: none;
        color:
    }
</style>

<script>
    let correctCaptchaAnswer = 0;

    function generateCaptcha() {
        let num1 = Math.floor(Math.random() * 10) + 1;
        let num2 = Math.floor(Math.random() * 10) + 1;
        correctCaptchaAnswer = num1 + num2;
        document.getElementById("captchaQuestion").innerText = `${num1} + ${num2} = `;
    }

    function showErrorMessage(elementId, message) {
        const errorElement = document.getElementById(elementId);
        errorElement.innerText = message;
        errorElement.style.display = "block";
    }

    function hideErrorMessage(elementId) {
        document.getElementById(elementId).style.display = "none";
    }

    function openModal() {
        generateCaptcha();
        document.getElementById("enquiryModal").style.display = "block";
    }

    document.getElementById("getQuotesBtn").addEventListener("click", function () {
        let loanAmount = document.getElementById("loanAmount").value.trim();
        let monthlySalary = document.getElementById("monthlySalary").value.trim();
        let occupationType = document.getElementById("occupationType").value.trim();
        let chooseCity = document.getElementById("chooseCity").value.trim();
        let termsChecked = document.getElementById("terms-checkbox").checked;

        let fullFormMessage = document.getElementById("fullFormErrorMessage");
        fullFormMessage.style.display = "none";

        if (!loanAmount || !monthlySalary || !occupationType || !chooseCity) {
            fullFormMessage.innerText = "Please fill in all required fields.";
            fullFormMessage.style.display = "block";
            return;
        }

        if (!termsChecked) {
            fullFormMessage.innerText = "You must accept the terms & conditions.";
            fullFormMessage.style.display = "block";
            return;
        }

        sessionStorage.setItem("loanData", JSON.stringify({ loanAmount, monthlySalary, occupationType, chooseCity }));

        openModal();
    });

    document.getElementById("closeModal").addEventListener("click", function () {
        document.getElementById("enquiryModal").style.display = "none";
    });

    // Add event listeners for Enquire and Consultation buttons
    document.getElementById("enquireButton").onclick = openModal;
    document.getElementById("consultationButton").onclick = openModal;

    document.getElementById("enquiryForm").addEventListener("submit", function (event) {
        event.preventDefault();

        let isValid = true;
        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let phone = document.getElementById("phone").value.trim();
        let message = document.getElementById("message").value.trim();
        let captchaInput = document.getElementById("captchaAnswer").value.trim();

        let fullFormMessage = document.getElementById("fullFormFeedback");
        fullFormMessage.style.display = "none";

        if (!/^[a-zA-Z\s]{3,}$/.test(name)) {
            showErrorMessage("nameError", "Enter a valid name (min 3 letters).");
            isValid = false;
        } else {
            hideErrorMessage("nameError");
        }

        if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
            showErrorMessage("emailError", "Enter a valid email.");
            isValid = false;
        } else {
            hideErrorMessage("emailError");
        }

        if (!/^\d{10}$/.test(phone)) {
            showErrorMessage("contactError", "Enter a valid 10-digit phone number.");
            isValid = false;
        } else {
            hideErrorMessage("contactError");
        }

        if (message.length < 10) {
            showErrorMessage("messageError", "Message must be at least 10 characters.");
            isValid = false;
        } else {
            hideErrorMessage("messageError");
        }

        if (parseInt(captchaInput) !== correctCaptchaAnswer) {
            showErrorMessage("captchaError", "Incorrect captcha answer.");
            isValid = false;
        } else {
            hideErrorMessage("captchaError");
        }

        if (!isValid) return;

        let loanData = JSON.parse(sessionStorage.getItem("loanData")) || {};
        let formData = { name, email, phone, message, ...loanData };

        fetch("forms/homeloan_submit.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                fullFormMessage.innerText = "Form submitted successfully!";
                fullFormMessage.style.color = "green";
                fullFormMessage.style.display = "block";
                document.getElementById("enquiryForm").reset();
                setTimeout(() => window.location.reload(), 2000);
            } else {
                fullFormMessage.innerText = "Error: " + data.error;
                fullFormMessage.style.color = "red";
                fullFormMessage.style.display = "block";
            }
        })
        .catch(() => {
            fullFormMessage.innerText = "Something went wrong. Please try again later.";
            fullFormMessage.style.color = "red";
            fullFormMessage.style.display = "block";
        });
    });
</script>

<!-- end enquirty -->



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
