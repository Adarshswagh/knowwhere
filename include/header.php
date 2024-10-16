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
                <li><a href="knowhome.php">Home</a></li>
                <li><a href="knowabout.php">About</a></li>
                <li class="dropdown">
                    <a href="knowproperties.php">Property</a>
                    <!-- <ul class="dropdown-menu">
                        <li><a href="#">Property 1</a></li>
                        <li><a href="#">Property 2</a></li>
                    </ul> -->
                </li>
                <li class="dropdown">
                    <a href="#">Pages</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="navbar-investor">
                <a href="#">FOR INVESTOR</a>
            </div>
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