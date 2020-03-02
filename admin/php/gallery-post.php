<?php
require_once('../../includes/init.inc.php');

require_once('./gallery-debug.php');


$pdostatement = $pdo->query("SELECT * FROM gallery ORDER BY id_position ASC ");
$totalrow = $pdostatement->rowCount();


if ($_POST) {

    $errors = [];
    // si il y as une correspondance de pseudo dans la table 'membre", $r reverra '1' ligne de resultat

    if ($_FILES['file']['name']) {
        $file_type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if ($file_type == "png" || $file_type == "jpg" || $file_type || "gif") {
            $fileok = true;
            $filename = $_FILES['file']['name'];
            $filename = preg_replace('/\s/', '',$filename);
            $uploadpath = $_SERVER['DOCUMENT_ROOT'] . "/Website/img/gallery/$filename";
        } else {
            $fileok = false;
            $errors['file'] = 'wrong type';
        }
    } else {
        $fileok = false;
        $errors['file'] = 'empty';
    }

    if ($_POST['alt']) {
        $altok = true;
    } else {
        $altok = false;
        $errors['alt'] = 'empty';
    }
    if ($_POST['source']) {
        $sourceok = true;
        $_POST['source'] = preg_replace('/\s/', '',$_POST['source']);
    } else {
        $sourceok = false;
        $errors['source'] = 'empty';
    }


    $n = $pdo->query("SELECT * FROM gallery WHERE selectname = '$_POST[selectname]' ");

    $n1 = $n->rowCount();

    if (!empty($_POST['selectname'])) {
        if ($n1 >= 1) {
            $selectnameok = false;
            $errors['select'] = 'taken';
        } else {
            $selectnameok = true;
        }
    } else {
        $_POST['selectname'] = $_FILES['file']['name'];
        $errors['select'] = 'empty';
        $selectnameok = true;
    }


    $r = $pdo->query("SELECT * FROM gallery WHERE id_position = '$_POST[id_position]' ");
    $r1 = $r->rowCount();
    if ($r1 >= 1) {
        $positionok = true;
    } else if ($totalrow + 1 < $_POST['id_position']) {
        $positionok = false;
        $errors['position'] = 'too high';

    } else if ($_POST['id_position'] < 0) {
        $positionok = false;
        $errors['position'] = 'too low';
    } else {
        $_POST['id_position'] = 0;
        $_POST['id_position'] = $totalrow + 1;
        $positionok = true;
        $errors['position'] = 'empty';
    }

    if ($positionok && $fileok && $altok && $selectnameok && $sourceok) {

        if ($r1 >= 1) {
            $udpated = $pdo->query("UPDATE gallery SET id_position = id_position+1 WHERE id_position >= '$_POST[id_position]' ");
        }
        copy($_FILES['file']['tmp_name'], $uploadpath);
        $pdo->query("INSERT INTO gallery(id_position, alt, filename, selectname, source) VALUES ('$_POST[id_position]','$_POST[alt]','$filename','$_POST[selectname]','$_POST[source]')");
        $errors['status'] = 200;
    } else {
        $errors['status'] = 400;
    }


    $i = 1;

    while ($gallery = $pdostatement->fetch(PDO::FETCH_ASSOC)) {

        if ($gallery['id_position'] != $i) {
            $pdo->query("UPDATE gallery SET id_position = $i WHERE filename = $gallery[name] ");
        }
        $i++;
    }

    header('Content-type: application/json');
    echo json_encode($errors);

}


?>