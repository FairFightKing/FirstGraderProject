<?php session_start();


//Fonction userConnect() : si l'internaute est connecté
function userConnect()
{

    if (!isset($_SESSION['membre'])) { //Si la session membre n'existe pas, cela signifie que l'on nest pas connecté donc on retourne false
        return false;
    } else {//sinon, on retourne true
        return true;
    }
}


//Fonction adminConnect() : Si l'internaute est connecté ET qu'il est admin
function adminConnect()
{

    if (userConnect() && $_SESSION['membre']['admin'] == 1) { // si l'internaute est connecté ET qu'il est admin (satut = 1 !)

        return true;
    } else {
        return false;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BloodHound | <?php echo basename($_SERVER['PHP_SELF'], ".php") ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Russo+One|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/setup-style.css" type="text/css">
    <?php
    if (isset($extra_css)): ?>
        <link rel="stylesheet" href="./css/<?php echo $extra_css ?>" type="text/css">
    <?php
    endif;
    ?>

    <link rel="stylesheet" href="./css/<?php echo basename($_SERVER['PHP_SELF'], ".php") ?>-style.css" type="text/css">
    <link rel="icon" type="image/png" href="./img/icon.jpg">
    <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <script src="./js/setup-script.js"></script>
    <script src="./js/<?php echo basename($_SERVER['PHP_SELF'], ".php") ?>-script.js"></script>

    <?php if (basename($_SERVER['PHP_SELF'], ".php") == 'abilities') {

        echo '<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">';

    }
    ?>
</head>
<body>
<header>
    <div id="header">
        <h1>BloodHound</h1>
    </div>

    <div class="containerMenu">
        <div id="menu">
            <nav>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./abilities.php">Abilities</a></li>
                    <li><a href="./story.php">Story</a></li>
                    <li><a href="./blog.php">Blog</a></li>
                    <li><a href="./gallery.php">Gallery</a></li>
                    <?php if (adminConnect()) : ?>
                        <li><a href="./admin/index.php" class="admin-connect">Admin page</a></li>
                    <?php elseif (userConnect()) : ?>
                        <li><a href="#" class="disconnect">log out</a></li>
                    <?php else : ?>
                        <li><a href="./sign-up.php" class="connect">Sign up</a></li>
                    <?php endif; ?>

                </ul>
            </nav>
        </div>
        <div id="burger">
            <span>&#9776;</span>
        </div>
    </div>

</header>

<div id="btnTop"><a class="aTop" href="#header">&#129145;</a></div>
<main>