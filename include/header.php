<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/knowproperties.css">
    <!-- <link rel="stylesheet" href="css/headercss.css"> -->
    

    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">

</head>
<body>
<header id="header">
    <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo Section -->
            <div class="navbar-logo">
                <a href="#">
                    <img src="images/logo/logomain.png" alt="Mantision Real Estate logo" class="img-fluid logo">
                </a>
            </div>

            <!-- Toggle Button for Mobile -->
            <div class="navbar-toggle" id="navbarToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Navbar Menu -->
            <ul class="navbar-menu" id="navbarMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li class="dropdown">
                    <a href="Properties.php">Property</a>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu">
                        <li><a href="residential.php">Residential Project</a></li>
                        <li><a href="commercial.php">Commercial Project</a></li>
                        <li><a href="plotting.php">Plotting Project</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="Properties.php">Services</a>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu">
                        <li><a href="home-loan.php">Home Loan</a></li>
                        <li><a href="rent.php">Rent Agreement</a></li>
                        <li><a href="sale-rent.php">Sale Or Rent</a></li>
                        <li><a href="bamboo.php">Bamboo</a></li>
                        <li><a href="construction.php">Construction</a></li>
                        <li><a href="interior.php">Interior</a></li>
                    </ul>
                </li>
                <li><a href="emicalculator.php">Emi Calculator</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>

            <!-- Compare Button -->
            <div class="navbar-investor">
                <a href="compare.php">COMPARE</a>
            </div>
        </div>
    </nav>
</header>


    <!-- In header.php -->
<button id="headerCompareButton" onclick="window.location.href='compare.php'" style="display: none;">
    Compare Properties
</button>

</div>

    </nav>



    <script>
        const navbarToggle = document.getElementById('navbar-toggle');
        const navbarMenu = document.getElementById('navbar-menu');

        navbarToggle.addEventListener('click', () => {
            navbarMenu.classList.toggle('show');
        });

        // JavaScript to toggle mobile menu
document.getElementById('navbarToggle').addEventListener('click', function() {
    document.getElementById('navbarMenu').classList.toggle('active');
});

        </script>

</header>
</body>
</html>