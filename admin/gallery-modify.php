<?php

$extra_css = "../css/form.css";

require_once('./includes/head.inc.php');

require_once('../includes/init.inc.php');

require_once('../php/data-gallery.php');

$pdostatement = $pdo->query("SELECT * FROM gallery ORDER BY id_position ASC ");
$totalrow = $pdostatement->rowCount();

$i = 1;

while ($gallery = $pdostatement->fetch(PDO::FETCH_ASSOC)) {

    if ($gallery['id_position'] != $i) {
        $pdo->query("UPDATE gallery SET id_position = $i WHERE id_position = $i+1 ");
    }
    $i++;
}

$pdostatement = $pdo->query("SELECT * FROM gallery WHERE id_position = $_GET[select] ");

$image = $pdostatement->fetch(PDO::FETCH_ASSOC);
?>

<section class="wrap">

    <div class="container container-modify">
        <h2>Modify this image : <br><span>[<?php echo $image['selectname'] ?>]</span></h2>
        <a href="gallery-select.php" class="form-option">Go back to the image selection</a>
        <form method="post">
            <label for="decision">Change/swap position or delete</label>
            <div class="err-select-empty"><p>You have not selected any image</p></div>
            <div class="err-select-exist"><p>The image you have selected doesn't exist</p></div>
            <select id="decision" name="decision">
                <option value="modify">Change position</option>
                <option value="swap">Swap with another image</option>
                <option value="delete">Delete</option>
            </select>
            <label class="disabled" for="selectname">This image name.</label>
            <input type="text" name="selectname" id="selectname" value="<?php echo $image['selectname'] ?>">
            <div id="modify">
                <label for="id_position">position must be from 1 to <?php echo $totalrow ?></label>
                <div class="err-position-high"><p>Your position number is too high</p></div>
                <div class="err-position-low"><p>Your position number is too low</p></div>
                <div class="err-position-empty"><p>No position was selected</p></div>
                <input type="text" name="id_position" id="id_position"
                       placeholder="originally <?php echo $image['id_position'] ?>">
            </div>
            <div id="modify-yes">
                <input type="submit" value="Move">
            </div>
        </form>
        <div id="delete" class="hide">
            <input type="submit" value="Delete" id="verify">
        </div>

    </div>

    <div class="img-preview">
        <div>
            <img src="../img/gallery/<?php echo $image['filename'] ?>" alt="The image you selected">
        </div>
        <div><p>This image is in position number <?php echo $image['id_position'] ?>.</p></div>
    </div>


</section>

<?php
require_once('./includes/footer.inc.php');
?>