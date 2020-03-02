<?php


$extra_css = "../css/form.css";
require_once('./includes/head.inc.php');

require_once('../includes/init.inc.php');


?>

    <script src="./js/textboxio.js"></script>
    <div class="container">
        <h2>Add an article to your blog :</h2>
        <a href="./blog-select.php" class="form-option">Want to modify an Article ? Click here !</a>
        <form enctype="multipart/form-data" method="post">
            <label for="title">Title of the article</label>
            <div class="err-title-taken"><p>Your title is already taken</p></div>
            <div class="err-title-empty"><p>This field is empty</p></div>

            <input type="text" name="title" id="title"
                   placeholder="The title of the article">

            <label for="date">Date of the article or update</label>
            <div class="err-date-empty"><p>This field is empty</p></div>
            <input type="date" name="date" id="date">

            <label for="img">Your image for the article (please use a square shaped image)</label>
            <div class="err-img-empty"><p>You have not uploaded any image </p></div>
            <div class="err-img-type"><p>You tried to upload something else than a .jpg .png or .gif file</p></div>
            <input type="file" name="img" id="img">

            <label for="description">Short description of the article</label>
            <div class="err-description-empty"><p>This field is empty</p></div>
            <input type="text" name="description" id="description">

            <label for="subject">Subject of article</label>
            <div class="err-subject-empty"><p>This field is empty</p></div>
            <input type="text" name="subject" id="subject" placeholder="Must be 1 - 5 words">

            <label for="content">Content of the article</label>
            <div class="err-content-empty"><p>This field is empty</p></div>
            <div class="err-content-length"><p>You have exceeded 10 000 characters</p></div>
            <textarea name="content" id="content" placeholder="10 000 characters max"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

    <script type="text/javascript">
        var editor = textboxio.replace('#content');
    </script>
<?php
require_once('./includes/footer.inc.php');
?>