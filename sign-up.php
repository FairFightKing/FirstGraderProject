<?php
$extra_css = "form.css";
require_once('./includes/head.inc.php');
require_once('./includes/init.inc.php');
?>


<div class="container">
    <h2>Sign up to our Website</h2>
    <a href="sign-in.php" class="form-option">Have an account ? Sign in here !</a>
    <form class="sign-up" method="post">
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
            <div class="err-nickname-taken">
                <p>Your nickname is taken</p>
            </div>
            <input type="text" name="nickname" id="nickname" placeholder="Your nickname..">

            <label for="password">Password</label>
            <div class="err-password-empty">
                <p>This field is empty</p>
            </div>
            <div class="err-password-short">
                <p>Your password needs to be at least 5 characters</p>
            </div>

            <input type="password" name="password" id="password" placeholder="Your password..">

            <label for="firstname">First Name</label>
            <div class="err-firstname-empty">
                <p>This field is empty</p>
            </div>

            <input type="text" name="firstname" id="firstname" placeholder="Your first name..">

            <label for="lastname">Last Name</label>
            <div class="err-lastname-empty">
                <p>This field is empty</p>
            </div>

            <input type="text" name="lastname" id="lastname" placeholder="Your last name..">
            <input type="submit" value="Sign up">
        </div>
    </form>
</div>


<?php require_once('./includes/footer.inc.php') ?>