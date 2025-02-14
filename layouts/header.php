<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>J'S</title>
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .homepage-padding {
            padding-top: 40px;
        }

        .header {
            height: 70px;
            padding: 5px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header .logo img {
            height: 70px;
            width: auto;
        }

        .header__menu ul {
            display: flex;
            align-items: center;
        }

        .header__menu ul li a {
            font-size: 14px;
            padding: 5px 10px;
            color: white;
        }

        .header__menu ul li a:hover {
            color: white !important;
        }

        .header__nav__option {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header__nav__option a img,
        .header__nav__option a i {
            height: 20px;
            width: auto;
            color: white;
        }

        .mobile-menu-toggle {
            font-size: 18px;
        }

        @media (max-width: 768px) {
            .header {
                padding: 10px 15px;
            }

            .mobile-menu-toggle {
                font-size: 16px;
            }

            .header__nav__option {
                position: absolute;
                right: 60px;
                display: flex;
                align-items: center;
                gap: 10px;
            }
        }
    </style>
</head>

<body <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { echo 'class="homepage-padding"'; } ?>>

    <header class="header">
        <div class="logo">
            <a href="../index.php"><img src="assets/img/logo_black.jpg" alt="Logo" width="100"></a>
        </div>
    
        <nav class="header__menu">
            <ul>
                <li <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?> class="active" <?php   }  ?>><a href="../index.php">Home</a></li>
                <li <?php if ($_SERVER['SCRIPT_NAME'] == "/shop.php") { ?> class="active" <?php   }  ?>><a href="../shop.php">Shop</a></li>
                <li <?php if ($_SERVER['SCRIPT_NAME'] == "/about.php") { ?> class="active" <?php   }  ?>><a href="../about.php">About Us</a></li>
                <li <?php if ($_SERVER['SCRIPT_NAME'] == "/policy.php") { ?> class="active" <?php   }  ?>><a href="../policy.php">Our Policy</a></li>
                <li <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?> class="active" <?php   }  ?>><a href="../contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="header__nav__option">
            <a href="../account.php"><i class="fa fa-user"></i></a>
            <a href="../shopping-cart.php"><i class="fa fa-cart-plus"></i></a>
        </div>
        <button class="mobile-menu-toggle" onclick="toggleMenu()">
            <i class="fa fa-bars" id="menu-icon"></i>
        </button>
    </header>
    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/index.php") { ?> class="active" <?php   }  ?>><a href="../index.php">Home</a></li>
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/shop.php") { ?> class="active" <?php   }  ?>><a href="../shop.php">Shop</a></li>
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/about.php") { ?> class="active" <?php   }  ?>><a href="../about.php">About Us</a></li>
            <li <?php if ($_SERVER['SCRIPT_NAME'] == "/contact.php") { ?> class="active" <?php   }  ?>><a href="../contact.php">Contact</a></li>
        </ul>
    </div>
</body>
</html>
