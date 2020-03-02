<?php

$pdostatement = $pdo->query("SELECT * FROM gallery ORDER BY id_position ASC ");

$i = 0;
$a = 1;

while ($gallery = $pdostatement->fetch(PDO::FETCH_ASSOC)) {

    if ($gallery['id_position'] != $a){
        $pdo->query("UPDATE gallery SET id_position = $a WHERE filename = '$gallery[filename]' ");
    }
    $a++;

    $images[$i]['name'] = $gallery['filename'];
    $images[$i]['alt'] = $gallery['alt'];
    $images[$i]['id_position'] = $gallery['id_position'];
    $i++;

}

$i = 0;
$a = 0;
$b = 0;
foreach ($images as $image) {

    if ($i == 0) {
        $new_images[0][0][$a]['name'] = $image['name'];
        $new_images[0][0][$a]['alt'] = $image['alt'];
        $new_images[0][0][$a]['id_position'] = $image['id_position'];
        $i++;
        $a++;
    } else if ($i == 1) {
        $new_images[0][1][$a]['name'] = $image['name'];
        $new_images[0][1][$a]['alt'] = $image['alt'];
        $new_images[0][1][$a]['id_position'] = $image['id_position'];
        $i++;
        $a++;
    } else if ($i == 2) {
        $new_images[1][0][$b]['name'] = $image['name'];
        $new_images[1][0][$b]['alt'] = $image['alt'];
        $new_images[1][0][$b]['id_position'] = $image['id_position'];
        $i++;
        $b++;
    } else if ($i == 3) {
        $new_images[1][1][$b]['name'] = $image['name'];
        $new_images[1][1][$b]['alt'] = $image['alt'];
        $new_images[1][1][$b]['id_position'] = $image['id_position'];
        $i = 0;
        $b++;
    }
}


$i = 0;
$a = 0;
$b = 0;
foreach ($images as $image) {
    if ($i == 0) {
        $new_images_row2[0][$a]['name'] = $image['name'];
        $new_images_row2[0][$a]['alt'] = $image['alt'];
        $new_images_row2[0][$a]['id_position'] = $image['id_position'];
        $a++;
        $i++;
    } else if ($i == 1) {
        $new_images_row2[1][$b]['name'] = $image['name'];
        $new_images_row2[1][$b]['alt'] = $image['alt'];
        $new_images_row2[1][$b]['id_position'] = $image['id_position'];
        $b++;
        $i = 0;
    }
}
$new_images_row1 = $images;

?>