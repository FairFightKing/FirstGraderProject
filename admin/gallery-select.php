<?php


$extra_css = "../css/gallery-style.css";

require_once('./includes/head.inc.php');

require_once('../includes/init.inc.php');

require_once('../php/data-gallery.php');

$pdostatement = $pdo->query("SELECT * FROM gallery ORDER BY id_position ASC ");
$totalrow = $pdostatement->rowCount();


?>
<div class="info">
    <h2>
        Here you can select the image you want to modify, just click it !
    </h2>
    <a href="gallery.php" class="option">Want to add an image to the gallery ? Click here !</a>
</div>


<div class="container">
    <?php foreach ($new_images as $groups): ?>
        <?php foreach ($groups as $group): ?>
            <div class="columns gallery-4rows">
                <?php foreach ($group as $image): ?>
                    <a href="./gallery-modify.php?select=<?php echo $image['id_position'] ?>">
                        <div class="filter">
                            <img src='../img/gallery/<?php echo $image['name'] ?>' alt='<?php echo $image['alt'] ?>'>
                        </div>
                    </a>
                    <div class="position"><p>Position : <span><?php echo $image['id_position'] ?></span></p></div>


                <?php endforeach; ?>
            </div>
        <?php endforeach;
    endforeach;
    foreach ($new_images_row2 as $images): ?>
        <div class="columns gallery-2rows">
            <?php foreach ($images as $image) : ?>
                <img src="../img/gallery/<?php echo $image['name'] ?>" alt="<?php $image['alt'] ?>">
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
    <div class="columns gallery-1row">
        <?php foreach ($new_images_row1 as $image): ?>
            <img src="../img/gallery/<?php echo $image['name'] ?>" alt="<?php $image['alt'] ?>">
        <?php endforeach; ?>
    </div>
</div>

<?php
require_once('./includes/footer.inc.php');
?>