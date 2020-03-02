<?php session_start();


if (isset($_POST['action']) && $_POST['action'] == 'disconnect') {
//Si il y a une 'action' dans l'URL et que cette action est égale à 'deconnexion', alors on détruit la session
    session_destroy();
}

?>