<?php session_start();

require_once('../includes/init.inc.php');


if ($_POST) {

    if (empty($_POST['nickname'])) {
        $nicknameok = false;
        $errors['nickname'] = 'empty';
    } else {

        if (strlen($_POST['nickname']) >= 20) {
            $nicknameok = false;
            $errors['nickname'] = 'too long';
        } elseif
        (strlen($_POST['nickname']) <= 3) {
            $nicknameok = false;
            $errors['nickname'] = 'too short';
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

    if ($nicknameok && $passwordok) {
        $r = $pdo->query("SELECT * FROM membre WHERE nickname = '$_POST[nickname]' ");

        //Si il y a une correspondance d'un pseudo dans la table 'membre' , $r renverra '1' ligne de résultat
        if ($r->rowCount() >= 1) {

            $membre = $r->fetch(PDO::FETCH_ASSOC);

            //Vérification du mdp : Si le mot de passe est correct, on renseigne des infos dans notre fichier de session
            if (password_verify($_POST['password'], $membre['password'])) {

                $_SESSION['membre']['id_membre'] = $membre['id_membre'];
                $_SESSION['membre']['nickname'] = $membre['nickname'];
                $_SESSION['membre']['password'] = $membre['password'];
                $_SESSION['membre']['firstname'] = $membre['firstname'];
                $_SESSION['membre']['lastname'] = $membre['lastname'];
                $_SESSION['membre']['admin'] = $membre['admin'];

                $errors['status'] = 200;


            } else {
                $errors['password'] = 'wrong password';
                $errors['status'] = 400;

            }
        } else {
            $errors['nickname'] = 'wrong nickname';
            $errors['status'] = 400;
        }
    } else {
        $errors['status'] = 400;
    }

    header('Content-type: application/json');
    echo json_encode($errors);

}
?>