<?php
    require_once './includes/session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <title>!smB | Regiment</title>
        <!-- CHECK CSS STYLES FOR SEASONS -->
    <link rel="stylesheet" href="./styles/main.css?<?php echo time(); ?>" />
        <!-- ACTIVATE ON CSS FILE -->
    <!-- <script src="./js/snow.js"></script> -->
    <script src="./js/index.js"></script>
    <script src="https://kit.fontawesome.com/d2256f7f6b.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <ul class="nav__ul--main">
            <figure>
                <img class="nav__logo" src="./assets/smb-logo.png">
            </figure>
            <li class="nav__li">
                <a class="nav__a underline" href="./index.php">HOME</a>
            </li>
            <li class="nav__li">
                <a class="nav__a underline" href="./roster.php">ROSTER</a>
            </li>
            <li class="nav__li">
                <a class="nav__a underline" href="./about.php">ABOUT US</a>
            </li>
            <li class="nav__li">
                <a class="nav__a underline" href="./contact.php">CONTACT US</a>
            </li>
        </ul>
        <script> 
            function openMenu() {
            document.body.classList += " menu--open"
            }

            function closeMenu() {
            document.body.classList.remove('menu--open')
            }
        </script>
        <button class="btn__menu" onclick="openMenu()">
          <img class="nav__logo" src="./assets/smb-logo.png">
          <i class="fas fa-bars"></i>
        </button>
        <div class="menu__backdrop">
          <button class="btn__menu btn__menu--close" onclick="closeMenu()">
            <i class="fas fa-times"></i>
          </button>
          <ul class="menu__links">
            <li class="menu__list">
              <a href="./index.php" class="menu__link" onclick="closeMenu()">HOME</a>
            </li>
            <li class="menu__list">
              <a href="./roster.php" class="menu__link" onclick="closeMenu()">ROSTER</a>
            </li>
            <li class="menu__list">
              <a href="./about.php" class="menu__link" onclick="closeMenu()">ABOUT US</a>
            </li>
            <li class="menu__list">
              <a href="./contact.php" class="menu__link" onclick="closeMenu()">CONTACT US</a>
            </li>
          </ul>
        </div>
        <ul class="nav__ul--login">
            <?php
                if (isset($_SESSION['useruid'])) {
                    echo '<li class="nav__li"><a class="nav__a underline" href="./admin.php">ADMIN</a></li>';
                    echo '<li class="nav__li"><a class="nav__a underline" href="./includes/logout.inc.php">LOGOUT</a></li>';
                }
                else {  
                    echo '<li class="nav__li"><a class="nav__a underline" href="./login.php">LOGIN</a></li>'; 
                }
            ?>
        </ul>
        <ul id="nav__ul--mobile">
            <figure>
                <img class="nav__logo" src="./assets/smb-logo.png">
            </figure>
            <li>
                <a href="./navbar.php"><i class="fa fa-bars"></i></a>
            </li>
        </ul>
    </nav>
