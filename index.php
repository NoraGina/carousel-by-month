<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css'>
    <link href='https://fonts.googleapis.com/css2?family=Anton&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,400;1,500;1,600;1,700&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <script  async defer src='toggleMenu.js'></script>
    <script async defer src='displayCarousel.js'></script>
     
</head>
<body>
<header>
        <nav class='navbar-nav' id='menu'>

            <div class='logo-box'>
                <img src='img/HandMadeCarousel.png' alt='Logo..missing' class='logo-img'>

            </div>


            <div class='left-items'>
                <a class='nav-link ' aria-current='page' href='home'>
                    <i class='bi bi-house-fill'>Home</i></a>

                <a href='about' class='nav-link'>
                    <i class='bi bi-people-fill'>About</i></a>

                <a href='contact' class='nav-link'>
                    <i class='bi bi-mailbox2'>Contact</i>
                </a>
                <a href='shop' class='nav-link'>
                    <i class='bi bi-shop'>Shop</i>
                </a>
            </div>
          
            <div class='right-items'>
                <button type='button' class='btn-link' id='loginBtn' onclick='openLoginModal()'>
                    <i class='bi bi-door-open-fill'>Login</i></button>


                <button type='button' class='btn-link' id='registerBtn' onclick='openSignupModal()'>
                    <i class='bi bi-people-fill'></i>Register</button>


                <button type='button' class='btn-link' id='logoutBtn'>
                    <i class='bi bi-door-closed-fill'></i>Logout</button>
            </div>
            <div class='menu-toglle' >
                <button class='navbar-toggler-btn' type='button'  onclick='toggleMenu()'>
                    <i class='bi bi-list'></i>
                </button>
            </div>

        </nav>
</header>
    <main>
    <?php
    include_once 'CarouselClass.php' ;
    
     $carouselClass = new CarouselClass;
     $carousel =$carouselClass->showCarousel();
     echo $carousel;
    ?>
    </main>
</body>
</html>