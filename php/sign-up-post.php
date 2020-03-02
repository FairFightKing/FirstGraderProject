<?php session_start();

require_once('../includes/init.inc.php');


if ($_POST) {

    $errors = [];


    $r = $pdo->query("SELECT * FROM membre WHERE nickname = '$_POST[nickname]' ");
    $r1 = $r->rowCount();

    if (empty($_POST['nickname'])) {
        $nicknameok = false;
        $errors['nickname'] = 'empty';
    } else {

        if (strlen($_POST['nickname']) >= 20) {
            $nicknameok = false;
            $errors['nickname'] = 'too long';
        } elseif (strlen($_POST['nickname']) <= 3) {
            $nicknameok = false;
            $errors['nickname'] = 'too short';
        }
        if ($r1 >= 1) {
            $nicknameok = false;
            $errors['nickname'] = 'taken';
        } else {
            $nicknameok = true;
        }
    }




    if (empty($_POST['password'])) {
        $passwordok = false;
        $errors['password'] = 'empty';
    } elseif (strlen($_POST['password']) <= 5) {
        $passwordok = false;
        $errors['password'] = 'too short';
    } else {
        $passwordok = true;
    }


    if (empty($_POST['firstname'])) {
        $firstnameok = false;
        $errors['firstname'] = 'empty';
    } else {
        $firstnameok = true;
    }


    if (empty($_POST['lastname'])) {
        $lastnameok = false;
        $errors['lastname'] = 'empty';
    } else {
        $lastnameok = true;
    }


    if ($nicknameok && $passwordok && $firstnameok && $lastnameok) {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $pdostatement = $pdo->query("INSERT INTO membre(nickname, password, firstname, lastname) VALUES ( '$_POST[nickname]', '$_POST[password]', '$_POST[firstname]', '$_POST[lastname]'  ) ");
        $errors['status'] = 200;

    } else {
        $errors['status'] = 400;
    }

    header('Content-type: application/json');
    echo json_encode($errors);

}


?>