<?php
require_once('../../includes/init.inc.php');

require_once('./gallery-debug.php');

$pdostatement = $pdo->query("SELECT * FROM gallery ORDER BY id_position ASC ");
$totalrow = $pdostatement->rowCount();


if ($_POST) {

    $errors = [];

    $n = $pdo->query("SELECT * FROM gallery WHERE selectname = '$_POST[selectname]' ");

    $n1 = $n->rowCount();


    if (!empty($_POST['selectname'])) {
        if ($n1 >= 1) {
            $image1 = $n->fetch(PDO::FETCH_ASSOC);
            $swapname1 = $image1['filename'];
            $deletefile = $image1['filename'];
            $swapposition1 = $image1['id_position'];
            $selectnameok = true;
        } else {
            $selectnameok = false;
            $errors['select'] = 'file dont exist';
        }
    } else {
        $selectnameok = false;
        $errors['select'] = 'empty';
    }


    if ($_POST['decision'] == 'modify') {

        $r = $pdo->query("SELECT * FROM gallery WHERE id_position = '$_POST[id_position]' ");
        $r1 = $r->rowCount();

        if (!empty($_POST['id_position'])) {

            if ($r1 >= 1) {
                $positionok = true;
            } else if ($totalrow  < $_POST['id_position']) {
                $positionok = false;
                $errors['position'] = 'too high';
            } else if ($_POST['id_position'] < 0) {
                $positionok = false;
                $errors['position'] = 'too low';
            }
        } else {
            $positionok = false;
            $errors['position'] = 'empty';
        }
    }

    if ($_POST['decision'] == 'swap') {

        $n2 = $pdo->query("SELECT * FROM gallery WHERE id_position = '$_POST[id_position]' ");
        $n3 = $n2->rowCount();

        if (!empty($_POST['id_position'])) {

            if ($n3 >= 1) {
                $image2 = $n2->fetch(PDO::FETCH_ASSOC);
                $swapname2 = $image2['filename'];
                $swapposition2 = $image2['id_position'];
                $positionok = true;
                $swapok = true;
            } else if ($totalrow + 1 < $_POST['id_position']) {
                $positionok = false;
                $errors['position'] = 'too high';
                $swapok = false;

            } else if ($_POST['id_position'] < 0) {
                $positionok = false;
                $errors['position'] = 'too low';
                $swapok = false;
            }
        } else {
            $swapok = false;
            $positionok = false;
            $errors['position'] = 'empty';
        }
    }

    if ($_POST['decision'] == 'delete' && $selectnameok) {
        unlink("../../img/gallery/$deletefile");
        $pdo->query("DELETE FROM `gallery` WHERE selectname = '$_POST[selectname]' ");
        $errors['status'] = 200;
    } else if ($_POST['decision'] == 'modify' && $positionok && $selectnameok) {
        $udpated = $pdo->query("UPDATE gallery SET id_position = id_position+1 WHERE id_position >= '$_POST[id_position]' ");
        $pdo->query("UPDATE gallery SET id_position = '$_POST[id_position]' WHERE selectname = '$_POST[selectname]'");
        $errors['status'] = 200;
        $errors['action'] = 'move';
    } else if ($_POST['decision'] == 'swap' && $positionok && $selectnameok && $swapok) {
        $udpated = $pdo->query("UPDATE gallery SET id_position = $swapposition2 WHERE filename = '$swapname1' ");
        $udpated = $pdo->query("UPDATE gallery SET id_position = $swapposition1 WHERE filename = '$swapname2' ");
        $errors['status'] = 200;
        $errors['action'] = 'swap';
    } else {
        $errors['status'] = 400;
    }


    header('Content-type: application/json');
    echo json_encode($errors);

}


?>