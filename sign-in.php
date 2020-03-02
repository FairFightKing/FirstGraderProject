<?php
$extra_css = "form.css";
require_once('./includes/head.inc.php');
require_once('./includes/init.inc.php');

?>


<?php


if (userConnect()) { //si l'internaute est connecté, redirection vers le profil

    //redirection
    header('location:index.php');
    exit();
}
?>

<div class="container">

    <h2>Sign in to your account</h2>
    <a href="sign-up.php" class="form-option">Don't have an account ? Sign up here !</a>

    <form class="sign-in" method="post">
        <div>
            <label for="nickname">Nickname</label>
            <div class="err-nickname-empty">
                <p>This field is empty</p>
            </div>
            <div class="err-nickname-long">
                <p>This field exceed 20 characters</p>
            </div>
            <div class="err-nickname-short">
                <p>This field is at least 3 characters</p>
            </div>
            <div class="err-nickname-wrong">
                <p>Wrong nickname or doesnt exist</p>
            </div>
            <input type="text" name="nickname" id="nickname" placeholder="Your nickname..">

            <label for="password">Password</label>
            <div class="err-password-empty">
                <p>This field is empty</p>
            </div>
            <div class="err-password-short">
                <p>Your password needs to be at least 5 characters</p>
            </div>
            <div class="err-password-wrong">
                <p>Wrong password</p>
            </div>
            <input type="password" name="password" id="password" placeholder="Your password..">

            <input type="submit" value="Sign in">
        </div>
    </form>

</div>


<?php require_once('./includes/footer.inc.php') ?>