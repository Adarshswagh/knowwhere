<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="include/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
</head>
<body>
<header id="header">
    <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo Section -->
            <div class="navbar-logo">
                <a href="index.php">
                    <img src="images/logo/logofm.svg" alt="Mantision Real Estate logo" class="img-fluid logo">
                </a>
            </div>

            <!-- Toggle Button for Mobile -->
            <div class="navbar-toggle" id="navbarToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Navbar Menu -->
            <div class="navbar-menu-container" id="navbarMenuContainer">
                <ul class="navbar-menu" id="navbarMenu">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown" id="dropdown2">
                        <a href="#">About</a>
                        <span class="dropdown-arrow"></span>
                        <!-- Dropdown Menu -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-menu-a" href="about.php">About Us</a></li>
                            <li><a class="dropdown-menu-a" href="gallery.php">Our Gallery</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" id="dropdown1">
                        <a href="properties.php">Property</a>
                        <span class="dropdown-arrow"></span>
                        <!-- Dropdown Menu -->
                        <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-menu-a" href="residential.php">Residential Project</a>
                        </li>
                            <li><a class="dropdown-menu-a" >Commercial Project</a>
                                <!-- Sub-dropdown for Residential Project -->
                                <ul class="sub-dropdown-menu">
                                    <li><a href="commercial.php"> Buy </a></li>
                                    <li><a href="commercialleasing.php"> Leasing </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-menu-a" href="plotting.php">Plotting Project</a></li>
                        </ul>
                    </li>

                    <li class="dropdown" id="dropdown2">
                        <a href="#">Cities</a>
                        <span class="dropdown-arrow"></span>
                        <!-- Dropdown Menu -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-menu-a" href="pune.php">Pune</a></li>
                            <li><a class="dropdown-menu-a" href="mumbai.php">Mumbai</a></li>
                            <li><a class="dropdown-menu-a" href="bangalore.php">Bangalore</a></li>
                            <li><a class="dropdown-menu-a" href="nagpur.php">Nagpur</a></li>
                            <li><a class="dropdown-menu-a" href="hyderabad.php">hyderabad</a></li>
                            <li><a class="dropdown-menu-a" href="goa.php">Goa</a></li>
                            <li><a class="dropdown-menu-a" href="delhi-ncr.php">Delhi-Ncr</a></li>
                            <li><a class="dropdown-menu-a" href="ahmedabad.php">Ahmedabad</a></li>
                        </ul>
                    </li>


                    <li class="dropdown" id="dropdown2">
                        <a href="#">Services</a>
                        <span class="dropdown-arrow"></span>
                        <!-- Dropdown Menu -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-menu-a" href="home-loan.php">Home Loan</a></li>
                            <li><a class="dropdown-menu-a" href="rent.php">Rent Agreement</a></li>
                            <li><a class="dropdown-menu-a" href="sale-rent.php">Sale Or Rent</a></li>
                            <li><a class="dropdown-menu-a" href="bamboo.php">Bamboo</a></li>
                            <li><a class="dropdown-menu-a" href="construction.php">Construction</a></li>
                            <li><a class="dropdown-menu-a" href="interior.php">Interior</a></li>
                            <li><a class="dropdown-menu-a" href="digital.php">Digital Marketing</a></li>
                        </ul>
                    </li>
                    <li><a href="Emicalculator.php">EMI Calculator</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="compare.php" class="navbar-compare">COMPARE</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<script>
    // Toggle Navbar for Mobile
    // Mobile Navbar Toggle
const toggleButton = document.querySelector('.navbar-toggle');
const menuContainer = document.querySelector('.navbar-menu-container');
const dropdowns = document.querySelectorAll('.dropdown');
const dropdownArrows = document.querySelectorAll('.dropdown-arrow');

// Toggle the mobile navbar menu
toggleButton.addEventListener('click', () => {
    menuContainer.classList.toggle('show');
});

// Toggle dropdown menu visibility on mobile
dropdownArrows.forEach((arrow, index) => {
    arrow.addEventListener('click', (e) => {
        const dropdown = dropdowns[index];
        const menu = dropdown.querySelector('.dropdown-menu');

        // Toggle active state of the dropdown and arrow direction
        dropdown.classList.toggle('active');
        if (dropdown.classList.contains('active')) {
            arrow.textContent = '▲'; // Change arrow to up
        } else {
            arrow.textContent = '▼'; // Change arrow to down
        }
    });
});

</script>

</body>
</html>
