<?php

$extra_css = "../css/form.css";

require_once('./includes/head.inc.php');

require_once('../includes/init.inc.php');

require_once('./php/gallery-debug.php');


$pdostatement = $pdo->query("SELECT * FROM gallery ORDER BY id_position ASC ");
$totalrow = $pdostatement->rowCount();


?>

    <div class="container">
        <h2>Add an image to your gallery :</h2>
        <a href="gallery-select.php" class="form-option">Want to modify the Gallery ? Click here !</a>
        <form enctype="multipart/form-data" method="post">
            <label for="id_position">position must be from 1 to <?php echo $totalrow + 1 ?></label>
            <div class="err-position-high"><p>Your position number is too high</p></div>
            <div class="err-position-low"><p>Your position number is too low</p></div>
            <div class="err-position-empty"><p>Your Image will be at the <?php echo $totalrow + 1 ?>th position</p>
            </div>
            <input type="text" name="id_position" id="id_position"
                   placeholder="if not set, will be set to last">

            <label for="file">Your image</label>
            <div class="err-file-empty"><p>You have not uploaded any image </p></div>
            <div class="err-file-type"><p>You tried to uploaded something else than a jpg png or gif file</p></div>
            <input type="file" name="file" id="file">

            <label for="selectname">Select the name of your file to select it later</label>
            <div class="err-name-taken"><p>You have already selected this name before </p></div>
            <div class="success suc-name-empty"><p>You'll select this image with the file name you have on ur
                    computer</p></div>
            <input type="text" name="selectname" id="selectname" placeholder="If not set, will be the file name">

            <label for="alt">Short description of the image</label>
            <div class="err-alt-empty"><p>You have not filled this field </p></div>
            <input type="text" name="alt" id="alt">
            <label for="source">Source link of the image</label>
            <div class="err-source-empty"><p>You have not filled this field </p></div>
            <input type="url" name="source" id="source">

            <input type="submit" value="Submit">
        </form>
    </div>

<?php
require_once('./includes/footer.inc.php');
?>