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
    <link rel="stylesheet" href="css/rent.css">

    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Lexend&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>


</head>
<style>
    /* get in touch */
.contact-section {
    padding: 115px 0;
    background-color: #050F17;
}

.contact-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.form-container {
    flex: 1;
    padding: 40px;
    border: 1px solid #6c6c6c;
    max-width: 550px;
}

.input-group {
    display: flex;
    gap: 20px; 
    margin-bottom: 20px;
    
}

.email-group{
    margin-bottom: 20px;
}

.input-group input {
    width: 47%; /* Make both input fields take up equal space */
    font-size: 14px;
    font-family: 'Lexend', sans-serif;
    font-weight: 300;
    line-height: 1.7em;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    color: #fff;
    font-family: 'Lexend', sans-serif;
    font-size: 14px;
}

input::placeholder, textarea::placeholder {
    color: #fff;
}

textarea {
    height: 120px; /* Adjust the height of the message box */
    resize: vertical; /* Make the textarea resizable */
}

button {
    padding: 15px 30px; /* Increase the padding for a larger button */
    background-color: #a38755;
    color: #050F17;
    border: none;
    cursor: pointer;
    margin-top: 20px; /* Adjust margin for space between form elements */
    font-family: 'Lexend', sans-serif;
}

button:hover {
    background-color: #fff;
}

.contact-info {
    flex: 1;
    padding: 20px;
    max-width: 555px;
}

.contact-info h2 {
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;
    margin-bottom: 20px;
    color: #e8e8e8;
    font-family: "Italiana", Sans-serif;
}

.contact-info p {
    margin-bottom: 20px;
    font-size: 14px;
    line-height: 1.7em;
    font-weight: 300;
    font-family: "Lexend", Sans-serif;
    text-align: left;
}

.contact-info ul {
    list-style: none;
    padding-left: 0;

}

.contact-info ul li {
    color: #e8e8e8  ;
    margin-bottom: 10px;
    font-size: 14px;
    font-family: "Lexend", Sans-serif;
    font-weight: 300;
    line-height: 1.7em;
}

.contact-info ul li i {
    margin-right: 10px;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .contact-container {
        flex-direction: column;
    }

    .form-container, .contact-info {
        width: 100%;
    }

    .input-group {
        flex-direction: column; /* Make first and last name stack on top of each other on mobile */
    }

    .contact-info h2 {
        font-size: 28px;
    }
}




/*end  get in touch */
</style>
<body>

<!-- navbar -->

<?php include("include/header.php");?>

 <!-- end navbar -->


  <!-- banner -->
  <section id="banner-main">
    <div class="banner1" >
        <div class="banner-content">
            <h2 style="">Rent Agreement</h2>
            <p style="text-align: center;"><a href="index.php" class="banner-bread">Home</a> &gt; <a href="#" class="banner-bread">Rent Agreement</a></p>
        </div>
    </div>
</section>


<div class="client-success-section">
  <img src="images/blog2.jpg" alt="Meeting with clients" class="client-success-image">
  <div class="client-success-content">
    <h2><span style=" color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;">Rent Agreement</span></h2>
    <p>
    A rent agreement is a legally binding document that outlines the terms and conditions of the rental arrangement between the landlord and the tenant. Tenant details, property address, mode of payment, security deposit etc., are some key contents of the agreement. A rental agreement is drafted on a stamp paper and can be prepared for residential and commercial property. These agreements are also called rent deeds or lease deeds. Typically, they are drafted for 11 months to avoid the legal registration.
    </p>
  </div>
</div>


        
        <!-- Button -->
        <!-- <a href="#" class="start-button">Begin Your Rent Agreement Process</a> -->
    </div>
</div>
+
<!-- how it works section -->

<section class="how-it-works-section">
    <h2 style=" color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em;">How it Works</h2>
    <div class="how-it-works-container">
        <div class="how-it-works-item">
            <div class="icon-container">
                <img src="images/h1.png" alt="Step 1 Icon"> <!-- Replace with actual icon URL -->
            </div>
            <p style="text-align: center;"> Fill in the details online and make the payment</p>
        </div>
        <div class="how-it-works-item">
            <div class="icon-container">
                <img src="images/h2.png" alt="Step 2 Icon"> <!-- Replace with actual icon URL -->
            </div>
            <p style="text-align: center;">Digitally sign the agreement at your convenience</p>
        </div>
        <div class="how-it-works-item">
            <div class="icon-container">
                <img src="images/h3.png" alt="Step 3 Icon"> <!-- Replace with actual icon URL -->
            </div>
            <p style="text-align: center;">Get an e-stamped agreement in your mail instantly</p>
        </div>
    </div>
</section>








<!-- para -->

<div class="rent-agreement-section" style="padding-bottom:100px;">
  <h3 style="font-size: 2.0em;">Why is a Rent Agreement Necessary?</h3>
  <p>
    It is always a wise decision to document any arrangement between two parties. Mere verbal contract has no legal value. However, a written rent agreement is admissible in court and can be used in case of any possible disputes. In essence, it is a form of establishing transparency and accountability in the landlord-tenant relationship. It plays a critical role in ensuring that no party is exploited in any form by the other.
  </p>

  <h3 style="font-size: 2.0em;">Registered Rent Agreement</h3>
  <p>
    Property is a precious asset, and every step should be taken to safeguard it. Formally registering an agreement provides legal validation for the setup. Moreover, a registered rent agreement is often required for various official and financial transactions, making it an essential document for both parties involved in the rental transaction. The Registration Act, 1908, mandates the lease out of all properties for more than 11 months to be legally registered. Properties rented for less than 11 months may not require registration, but can be notarised. Once the draft agreement is prepared, the landlord and the tenant must be present at the sub-registrar’s office. If the two can’t be present simultaneously, the present party can sign a Power of Attorney. This grants the attorney the right to close the agreement.
  </p>
  <h3 style="font-size: 2.0em;">Terms & Conditions for Rent Agreement</h3>
  <p>
  An online rent agreement consists of the various terms and conditions that govern the tenant's occupancy of the property during the specified period of time. Some of the key elements of the rent agreement format are listed below: Rent Amount: The monthly amount to be paid by the tenant to the landlord. Time Period: The duration for which the existing agreement applies. Deposits: Any and every form of deposit required, or made, is clearly highlighted in this section. Usage: The agreement also highlights the purpose for which the property should be used (residential, commercial, etc.) Insurance: Commercial properties typically elaborate on the tenant’s contribution to the property’s insurance, if any. Other terms: These include the manner in which any monetary returns or adjustments shall be made. It also highlights how repairs, maintenance, bill payments, parking space use, and other details will be dealt with. Termination policy: All possible termination scenarios, such as the completion of the contract and premature termination, should be duly elaborated upon in the document. Signature Clause: The agreement should be signed by the landlord and the tenant to indicate mutual acceptance.
  </p>
</div>


<!-- key benefits -->
<div>
<h2 style=" color: #A8894D;
    font-family: 'Italiana', Sans-serif;
    font-size: 50px;
    font-weight: 400;
    line-height: 1.3em; text-align:center; padding-top:50px;">Key Benefits of a Rent Agreement</h2>

<div class="card-grid">
    
    <div class="card">
        <!-- <div class="arrow-icon">↗</div> -->
        <div class="card-icon"><img src="images/compliant.png" alt="Icon"></div>
        <h3 class="card-title"style = "padding-top:15px;">Legal Safeguard</h3>
        <p class="card-description">Protects landlord and tenant rights if disputes arise.</p>
       
        <!-- <a href="#" class="card-link">Read More</a> -->
    </div>
    
    <div class="card">
        <!-- <div class="arrow-icon">↗</div> -->
        <div class="card-icon"><img src="images/terms-and-conditions.png" alt="Icon"></div>
        <h3 class="card-title" style = "padding-top:15px;">Defined Terms</h3>
        <p class="card-description">Clearly outlines rent, payment, and deposit terms.</p>
        <!-- <a href="#" class="card-link">Read More</a> -->
    </div>
    
    <div class="card featured">
        <!-- <div class="arrow-icon">↗</div> -->
        <div class="card-icon"><img src="images/house.png" alt="Icon"></div>
        <h3 class="card-title" style = "padding-top:15px;">Rental Period</h3>
        <p class="card-description">Usually for 11 months to avoid legal registration.</p>
        <!-- <a href="#" class="card-link">Read More</a> -->
    </div>
    
    <div class="card">
        <!-- <div class="arrow-icon">↗</div> -->
        <div class="card-icon"><img src="images/online-order.png" alt="Icon"></div>
        <h3 class="card-title" style = "padding-top:15px;">Easy Online Process</h3>
        <p class="card-description">Services like Square Yards enable quick, digital agreements.</p>
        <!-- <a href="#" class="card-link">Read More</a> -->
    </div>


    </div>
    </div>
</div>
    
   <!-- features end -->

<!-- faq section -->

<section class="faq-section">
    <div class="faq-content">
        <div class="faq-text">
            <h2>Your Common Queries <span>Answered</span><br>with Additional FAQs</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel turpis sit amet turpis malesuada imperdiet. Donec facilisis urna sit amet erat consectetur, in tincidunt ligula malesuada.</p> -->
            <div class="faq-items">
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span class="faq-icon-left" style="text-align:left;"></span> How can I benefit from your startup?
                        <span class="faq-icon-right">+</span>
                    </div>
                    <div class="faq-answer">Our startup provides a range of benefits, including customized solutions to meet your unique needs...</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span class="faq-icon-left" style="text-align:left;"></span> How can I get in touch with customer support?
                        <span class="faq-icon-right">+</span>
                    </div>
                    <div class="faq-answer">You can contact our customer support team via email, phone, or live chat on our website.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span class="faq-icon-left" style="text-align:left;"></span> How do you ensure data security and privacy?
                        <span class="faq-icon-right">+</span>
                    </div>
                    <div class="faq-answer">We adhere to the highest security standards to ensure your data is protected...</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span class="faq-icon-left" style="text-align:left;"></span> How do I get started with your offerings?
                        <span class="faq-icon-right">+</span>
                    </div>
                    <div class="faq-answer">Getting started is easy! Simply reach out to us, and we'll guide you through the process...</div>
                </div>
            </div>
        </div>
        <div class="faq-image">
            <img src="images/home.jpg" alt="Customer Support" />
        </div>
    </div>
</section>




<!-- call to action -->
<section id="main-call">
    <div class="call-to-action">
        <div class="hero-section">
            <div class="overlay">
                <h2>Your Dream Home Awaits</h2>
                <p>Thank you for choosing Knowhere. Let us turn your real estate dreams into reality.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<section>
<!-- <h2 class="test-tag">Your Dream Home Awaits</h2> -->
</section>

<!-- end call to action -->

<section class="contact-section">
    <div class="contact-container">
        <div class="form-container">
            <form style="text-align:center">
                <div class="input-group" style="width:100%">
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
            <p>Ready to make your real estate dreams a reality? Get in touch with Knowhere for trusted guidance, tailored solutions, and a seamless property experience.</p>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> Wakad, Pimpri-Chinchwad, Maharashtra 411057</li>
                <li><i class="fas fa-envelope"></i> example@mail.com</li>
                <li><i class="fas fa-phone-alt"></i>+91 91122 11291</li>
                
            </ul>
        </div>
    </div>
</section>






<!--	Footer   start-->
<?php include("include/footer.php");?>
		<!--	Footer   start-->
   <!-- end footer -->


   <script>
    function toggleAnswer(element) {
    // Toggle the display of the answer
    const answer = element.nextElementSibling;
    const icon = element.querySelector(".faq-icon-right");

    if (answer.style.display === "block") {
        answer.style.display = "none";
        icon.textContent = "+"; // Change to plus icon
    } else {
        answer.style.display = "block";
        icon.textContent = "-"; // Change to minus icon
    }
}

   </script>
</body>
</html>

