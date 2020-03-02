<?php

require_once('../../includes/init.inc.php');


if ($_POST) {

    $errors = [];

    if ($_FILES['image']['name']) {
        $file_type = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        if ($file_type == "png" || $file_type == "jpg" || $file_type || "gif") {
            $imgok = true;
            $imgexist = true;
            $filename = $_FILES['image']['name'];
            $filename = preg_replace('/\s/', '',$filename);
            $uploadpath = $_SERVER['DOCUMENT_ROOT'] . "/Website/img/blog/$filename";
        } else {
            $imgok = false;
            $errors['img'] = 'wrong type';
            $imgexist = false;
        }
    } else {
        $imgok = true;
        $imgexist = false;
    }

    if ($_POST['selectid']) {
        $selectidok = true;
    } else {
        $selectidok = false;
        $errors['selectid'] = 'empty';
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


    $n = $pdo->query("SELECT * FROM blog WHERE id_article = $_POST[selectid] ");
    $n1 = $n->rowCount();


    if ($selectidok) {
        if ($n1 >= 1) {
            $exist = true;
            $article = $n->fetch(PDO::FETCH_ASSOC);
            $deletefile = $article['img'];
        } else {
            $exist = false;
        }
    } else {
        $errors['exist'] = 'Dont exist';
        $exist = false;

    }

    if ($_POST['decision'] == 'delete' && $exist) {
        unlink("../../img/blog/$deletefile");
       $err = $pdo->query("DELETE FROM blog WHERE id_article = '$_POST[selectid]' ");
        $errors['status'] = 200;
    } else if ($_POST['decision'] == 'update' && $titleok && $subjectok && $dateok && $descriptionok && $imgok && $contentok) {
        $content = nl2br(addslashes($_POST['content']));

        if ($imgexist) {
            unlink("../../img/blog/$deletefile");
            copy($_FILES['image']['tmp_name'], $uploadpath);
            $pdo->query("UPDATE blog SET img = '$filename' WHERE id_article = '$_POST[selectid]'");
        }

        $pdo->query("UPDATE blog SET title = '$_POST[title]',date = '$_POST[date]',description = '$_POST[description]',subject = '$_POST[subject]',content = '$_POST[content]' WHERE id_article = '$_POST[selectid]'");
        $errors['status'] = 200;
    } else {
        $errors['status'] = 400;
    }

    header('Content-type: application/json');
    echo json_encode($errors);

}


?>