<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male Fashion</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/new-style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/mobile_menu.css" type="text/css">
    <link rel="icon" href="assets/img/icon/user-secret-solid.svg" type="image/svg">
</head>

<body>

    <header class="header">
        <div class="logo">
            <a href="../index.php"><img src="assets/img/logo_black.jpg" alt="Logo" width="100"></a>
        </div>
    
        <nav class="header__menu">
            <ul>
                <li <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?> class="active" <?php   }  ?>><a href="../index.php">Home</a></li>
                <li <?php if ($_SERVER['SCRIPT_NAME'] == "/shop.php") { ?> class="active" <?php   }  ?>><a href="../shop.php">Shop</a></li>
                <!-- <li <?php if ($_SERVER['SCRIPT_NAME'] == "/blog.php") { ?>  class="active"   <?php   }  ?>><a href="../blog.php">Blog</a></li> -->
                <li <?php if ($_SERVER['SCRIPT_NAME'] == "/about.php") { ?> class="active" <?php   }  ?>><a href="../about.php">About Us</a></li>
                <li <?php if ($_SERVER['SCRIPT_NAME'] == "/Policy.php") { ?> class="active" <?php   }  ?>><a href="../policy.php">Our Policy</a></li>
                <li <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?> class="active" <?php   }  ?>><a href="../contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="header__nav__option">
            <a href="#" class="search-switch"><img src="assets/img/icon/search.png" alt="Search"></a>
            <a href="../account.php"><i class="fa fa-user col-white"></i></a>
            <a href="../shopping-cart.php"><i class="fa fa-cart-plus col-white"></i><img src="assets/img/icon/cart.png" alt="Cart"></a>
        </div>
        <button class="mobile-menu-toggle" onclick="toggleMenu()">
            <i class="fa fa-bars" id="menu-icon"></i>
        </button>
    </header>
    <div class="mobile-menu">
        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <div class="mobile-logo">
            <a href="../index.php"><img src="assets/img/logo_black.jpg" alt="Logo" width="120"></a>
        </div>
        <ul class="links">
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?> class="active" <?php   }  ?>><a href="../index.php">Home</a></li>
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/shop.php") { ?> class="active" <?php   }  ?>><a href="../shop.php">Shop</a></li>
            <!-- <li <?php if ($_SERVER['SCRIPT_NAME'] == "/blog.php") { ?>  class="active"   <?php   }  ?>><a href="../blog.php">Blog</a></li> -->
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/about.php") { ?> class="active" <?php   }  ?>><a href="../about.php">About Us</a></li>
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?> class="active" <?php   }  ?>><a href="../contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?> class="active" <?php   }  ?>><a href="../index.php">Home</a></li>
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/shop.php") { ?> class="active" <?php   }  ?>><a href="../shop.php">Shop</a></li>
            <!-- <li <?php if ($_SERVER['SCRIPT_NAME'] == "/blog.php") { ?>  class="active"   <?php   }  ?>><a href="../blog.php">Blog</a></li> -->
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/about.php") { ?> class="active" <?php   }  ?>><a href="../about.php">About Us</a></li>
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?> class="active" <?php   }  ?>><a href="../contact.php">Contact</a></li>
        </ul>
    </div>