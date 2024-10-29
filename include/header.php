<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/knowproperties.css">

    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">

</head>
<body>
<header id="header" class="">
    <nav class="navbar">
    <div class="navbar-container">
    <div class="navbar-logo">
        <a href="#">
            <img src="images/logo/logomain.png" alt="Mantision Real Estate logo" class="img-fluid logo">
        </a>
    </div>
    <ul class="navbar-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li class="dropdown">
            <a href="Properties.php">Property</a>
            <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
                <li style="margin-top: 10px;"><a href="residential.php">Residential Project</a></li>
                <li style="margin-top: 10px;"><a href="commercial.php">Commercial Project</a></li>
                <li style="margin-top: 10px;"><a href="plotting.php">Plotting Project</a></li>
            </ul>
        </li>
        <li><a href="emicalculator.php">Emi Calculator</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="Contact.php">Contact</a></li>
    </ul>
    <div class="navbar-investor">
        <a href="compare.php ">COMPARE</a>
    </div>

    <!-- In header.php -->
<button id="headerCompareButton" onclick="window.location.href='compare.php'" style="display: none;">
    Compare Properties
</button>

</div>

    </nav>



    <style>
        const navbarToggle = document.getElementById('navbar-toggle');
        const navbarMenu = document.getElementById('navbar-menu');

        navbarToggle.addEventListener('click', () => {
            navbarMenu.classList.toggle('show');
        });

        </style>

</header>
</body>
</html>