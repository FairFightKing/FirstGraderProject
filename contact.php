<?php
$extra_css = 'form.css';
require_once('./includes/head.inc.php');
require_once('./includes/init.inc.php');
?>

<section>

    <div class="container">
        <h2>Contact us :</h2>
        <form class="contact" method="post">
            <div>
                <label for="email">Email address</label>
                <div class="err-mail"><p>This field is empty</p></div>
                <input type="email" id="email" name="email" placeholder="Your email..">
                <label for="name">Name</label>
                <div class="err-name"><p>This field is empty</p></div>
                <input type="text" id="name" name="name" placeholder="Your name..">
            </div>
            <div>

                <label for="subject">Subject</label>
                <div class="err-subject-empty"><p>This field is empty </p></div>
                <div class="err-subject-length"><p>This field exceed 100 characters</p></div>
                <input type="text" id="subject" name="subject" placeholder="The subject..">
            </div>
            <div>
                <label for="content">Content</label>
                <div class="err-content-empty"><p>This field is empty </p></div>
                <div class="err-content-length"><p>This field exceed 255 characters</p></div>
                <textarea id="content" name="content" placeholder="Write something.."></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</section>

<?php require_once('./includes/footer.inc.php'); ?>