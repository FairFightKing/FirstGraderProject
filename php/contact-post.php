<?php

require_once('../includes/init.inc.php');


if ($_POST) {

    $errors = [];

    if (empty($_POST['email'])) {

        $emailok = false;
        $errors['email'] = 'email field empty normally impossible';
    } else {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $emailok = true;
        }
    }


    if (empty($_POST['name'])) {

        $nameok = false;
        $errors['name'] = 'name field is empty';
    } else {
        $nameok = true;
    }


    if (empty($_POST['subject'])) {
        $subjectok = false;
        $errors['subject'] = 'empty';
    } elseif (strlen($_POST['subject']) >= 100) {
        $subjectok = false;
        $errors['subject'] = 'too long';
    } else {
        $subjectok = true;
    }


    if (empty($_POST['content'])) {
        $contentok = false;
        $errors['content'] = 'empty';
    } elseif (strlen($_POST['content']) >= 255) {
        $contentok = false;
        $errors['content'] = 'too long';
    } else {
        $contentok = true;
    }


    if ($contentok && $subjectok && $emailok && $nameok) {
        $pdostatement = $pdo->query("INSERT INTO contact(name, email, subject, content, date) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[content]', NOW() ) ");
        $errors['status'] = 200;
    } else {
        $errors['status'] = 400;
    }

    header('Content-type: application/json');
    echo json_encode($errors);

}


?>