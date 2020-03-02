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

if( !userConnect() ){//si l'internaute n'est pas connecté, redirection vers la page de connexion

    //redirection
    header('location:../sign-in.php');
    exit(); //exit() : termine le script courant
}
else if(userConnect() && $_SESSION['membre']['admin'] == 0 ){//si l'internaute est connecté, redirection vers le profil

    //redirection
    header('location:../sign-in.php');
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BloodHound | ADMIN | <?php echo basename($_SERVER['PHP_SELF'], ".php") ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Russo+One|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/setup-style.css" type="text/css">
    <link rel="stylesheet" href="./css/setup-style.css" type="text/css">
    <?php
    if(isset($extra_css)){
        ?>
        <link rel="stylesheet" href="<?php echo $extra_css ?>">
        <?php
    }
    ?>
    <link rel="stylesheet" href="./css/<?php echo basename($_SERVER['PHP_SELF'], ".php") ?>-style.css" type="text/css">

    <link rel="icon" type="image/png" href="./img/icon.jpg">
    <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <script src="../js/setup-script.js"></script>
    <script src="./js/<?php echo basename($_SERVER['PHP_SELF'], ".php") ?>-script.js"></script>
</head>
<body>
<header>
    <div id="header">
        <a href="../index.php" class="back">
            Go back to the Website
        </a>

        <h1>BloodHound | Admin</h1>

        <a href="#" class="disconnect">log out</a>
    </div>

    <div class="containerMenu">
        <div id="menu">
            <nav>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./gallery.php">Gallery</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./blog.php">Blog</a></li>
                </ul>
            </nav>
        </div>
        <div id="burger">
            <span>&#9776;</span>
        </div>
    </div>

</header>

<main>