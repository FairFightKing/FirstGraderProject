<?php
$extra_css = "../css/form.css";

require_once('./includes/head.inc.php');

require_once('../includes/init.inc.php');

require_once('../php/data-blog.php');

$pdostatement = $pdo->query("SELECT * FROM blog WHERE id_article = $_GET[id] ");

$article = $pdostatement->fetch(PDO::FETCH_ASSOC);

?>

    <script src="./js/textboxio.js"></script>

    <section class="wrap">

        <div class="container container-modify">
            <h2>Modify this Article : <br>
                <span>[<?php echo $article['title'] ?>]</span></h2>
            <a href="blog-select.php" class="form-input">Go back to the article selection</a>
            <form enctype="multipart/form-data" method="post">
                <label for="decision">Modify or delete</label>
                <div class="err-select-empty"><p>You have not selected any image</p></div>
                <div class="err-select-exist"><p>The image you have selected doesn't exist</p></div>
                <select id="decision" name="decision">
                    <option value="update">Update</option>
                    <option value="delete">Delete</option>
                </select>
                <div class="choice" id="flex-checkbox">
                    <h3>change :</h3>
                    <div>
                        <label for="check-title">Title</label>
                        <input type="checkbox" checked name="check-title" id="check-title" value="title">
                    </div>
                    <div>
                        <label for="check-date">Date</label>
                        <input type="checkbox" checked name="check-date" id="check-date" value="date">
                    </div>
                    <div>
                        <label for="check-subject">Subject</label>
                        <input type="checkbox" checked name="check-subejct" id="check-subject" value="subject">
                    </div>
                    <div>
                        <label for="check-description">Description</label>
                        <input type="checkbox" checked name="check-description" id="check-description"
                               value="description">
                    </div>
                    <div>
                        <label for="check-image">Image</label>
                        <input type="checkbox" checked name="check-image" id="check-image" value="image">
                    </div>
                    <div>
                        <label for="check-content">Content</label>
                        <input type="checkbox" checked name="check-content" id="check-content" value="content">
                    </div>
                </div>
                <label class="disabled" for="selectid">This article id.</label>
                <input type="text" name="selectid" id="selectid" style="display: none"
                       value="<?php echo $article['id_article'] ?>">
                <div class="modify title">
                    <label for="title">New title of this article</label>
                    <div class="err-title-empty"><p>This field is empty</p></div>
                    <input type="text" name="title" id="title"
                           value="<?php echo $article['title'] ?>">
                </div>
                <div class="modify date">
                    <label for="date">New date of this article</label>
                    <div class="err-date-empty"><p>This field is empty</p></div>
                    <input type="date" name="date" id="date"
                           value="<?php echo $article['date'] ?>">
                </div>
                <div class="modify subject">
                    <label for="subject">New subject of this article</label>
                    <div class="err-subject-empty"><p>This field is empty</p></div>
                    <input type="text" name="subject" id="subject"
                           value="<?php echo $article['subject'] ?>">
                </div>
                <div class="modify description">
                    <label for="description">New description of this article</label>
                    <div class="err-description-empty"><p>This field is empty</p></div>
                    <input type="text" name="description" id="description"
                           value="<?php echo $article['description'] ?>">
                </div>
                <div class="modify image">
                    <label for="image">New image of this article</label>
                    <div class="err-img-type"><p>You tried to upload something else than a .jpg .png or .gif file</p>
                    </div>
                    <input type="file" name="image" id="image">
                </div>
                <div class="modify content">
                    <label for="content">New content of this article</label>
                    <div class="err-content-empty"><p>This field is empty</p></div>
                    <div class="err-content-length"><p>You have exceeded 10 000 characters</p></div>
                    <textarea name="content" id="content"><?php echo $article['content'] ?></textarea>
                </div>
                <div id="modify-yes">
                    <input type="submit" value="Update">
                </div>
            </form>
            <div id="delete" class="hide">
                <input type="submit" value="Delete" id="verify">
            </div>

        </div>

        <div class="article-preview">
            <img src="../img/blog/<?php echo $article['img'] ?>" class="img-preview" alt="The article you selected">
            <div>
                <p>This article date is : </p>
                <p><span><?php echo $article['date'] ?></span></p>
            </div>
            <div>
                <p>This article subject is : </p>
                <p><span><?php echo $article['subject'] ?></span></p>
            </div>
            <div>
                <p>This article description is : </p>
                <p><span><?php echo $article['description'] ?></span></p>
            </div>
            <div>
                <p>This article content is : </p>
                <p><span><?php echo $article['content'] ?></span></p>
            </div>
        </div>


    </section>
    <script type="text/javascript">
        var editor = textboxio.replace('#content');
    </script>

<?php
require_once('./includes/footer.inc.php');
?>