<?php session_start();

require_once('./includes/init.inc.php');

$pdostatement = $pdo->query("SELECT * FROM gallery ORDER BY id_position ASC ");

$totalrow = $pdostatement->rowCount();

$pdostatement = $pdo->query("SELECT * FROM gallery WHERE id_position = $_GET[id]");

$image = $pdostatement->fetch(PDO::FETCH_ASSOC);

if ($totalrow == $image['id_position']) {
    $next_img = 1;
    $previous_img = $image['id_position'] - 1;

} elseif ($image['id_position'] == 1) {
    $previous_img = $totalrow;
    $next_img = $image['id_position'] + 1;
} else {
    $next_img = $image['id_position'] + 1;
    $previous_img = $image['id_position'] - 1;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/gallery-single-style.css" type="text/css">
    <title>Bloodhound | Gallery</title>
    <link rel="icon" type="image/png" href="./img/icon.jpg">
</head>

<body>

<div id="btn-back"><a class="back" href="./gallery.php">&#9547;</a></div>

<div class="nav left-nav">
    <a href="./gallery-single.php?id=<?php echo $previous_img ?>" class="link">Previous</a>
    <div class="previous">
        <p>P</p>
        <p>R</p>
        <p>E</p>
        <p>V</p>
        <p>I</p>
        <p>O</p>
        <p>U</p>
        <p>S</p>
    </div>
    <img src="./img/btnBG/double-angle-pointing-to-right.png" alt="left arrow">
</div>

<div class="nav right-nav">
    <a href="./gallery-single.php?id=<?php echo $next_img ?>" class="link">Next</a>
    <div class="next">
        <p>N</p>
        <p>E</p>
        <p>X</p>
        <p>T</p>
    </div>
    <img src="./img/btnBG/double-angle-pointing-to-right.png" alt="right arrow">
</div>

<div class="nav source">
    <a href="<?php echo $image['source'] ?>" target="_blank">
        Source
    </a>
</div>

<div class="container">
        <img src="./img/gallery/<?php echo $image['filename'] ?>" alt="<?php echo $image['alt'] ?>">
</div>

</body>

</html>