<?php
require_once('../../includes/init.inc.php');

if ($_POST) {

    $errors = [];

    if ($_FILES['img']['name']) {
        $file_type = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        if ($file_type == "png" || $file_type == "jpg" || $file_type || "gif") {
            $imgok = true;
            $filename = $_FILES['img']['name'];
            $filename = preg_replace('/\s/', '',$filename);
            $uploadpath = $_SERVER['DOCUMENT_ROOT'] . "/Website/img/blog/$filename";
        } else {
            $imgok = false;
            $errors['img'] = 'wrong type';
        }
    } else {
        $imgok = false;
        $errors['img'] = 'empty';

    }

    if ($_POST['title']) {
        $titleok = true;
    } else {
        $titleok = false;
        $errors['title'] = 'empty';
    }
    if ($_POST['date']) {
        $dateok = true;
    } else {
        $dateok = false;
        $errors['date'] = 'empty';
    }
    if ($_POST['subject']) {
        $subjectok = true;
    } else {
        $subjectok = false;
        $errors['subject'] = 'empty';
    }
    if ($_POST['description']) {
        $descriptionok = true;
    } else {
        $descriptionok = false;
        $errors['description'] = 'empty';
    }
    if ($_POST['content']) {
        if (strlen($_POST['content']) >= 10000) {
            $contentok = false;
            $errors['content'] = 'too long';
        } else {
            $contentok = true;
        }
    } else {
        $contentok = false;
        $errors['content'] = 'empty';
    }


    $n = $pdo->query("SELECT * FROM blog WHERE title = '$_POST[title]' ");
    $n1 = $n->rowCount();

    if ($titleok) {
        if ($n1 >= 1) {
            $titleok = false;
            $errors['title'] = 'taken';
        } else {
            $titleok = true;
        }
    } else {
        $errors['title'] = 'empty';
        $titleok = false;
    }


    if ($titleok && $subjectok && $dateok && $descriptionok && $imgok && $contentok) {
        $content = nl2br(addslashes($_POST['content']));
        copy($_FILES['img']['tmp_name'], $uploadpath);
        $pdo->query("INSERT INTO blog(title, date, img, description, subject, content) VALUES ('$_POST[title]','$_POST[date]','$filename','$_POST[description]', '$_POST[subject]', '$content')");
        $errors['status'] = 200;
    } else {
        $errors['status'] = 400;
    }

    header('Content-type: application/json');
    echo json_encode($errors);

}


?>