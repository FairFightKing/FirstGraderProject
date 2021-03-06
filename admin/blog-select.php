<?php


$extra_css = "../css/blog-style.css";
require_once('./includes/head.inc.php');
require_once('../includes/init.inc.php');

require_once('../php/data-blog.php');

?>


<div class="info">
    <h2>
        Here you can select the Article you want to modify, just click it !
    </h2>
    <a href="blog.php" class="option">Want to add an article to the blog ? Click here !</a>
</div>

<section class="container">
    <?php foreach ($articles as $article): ?>
        <article>
            <a href="./blog-modify.php?id=<?php echo $article['id_article'] ?>">
                <div class="article-content">
                    <h2><?php echo $article['title'] ?></h2>
                    <h3>UPDATE <?php echo $article['date'] ?></h3>
                    <div class="img-height"><img src="../img/blog/<?php echo $article['img'] ?>" alt="image of the <?php echo $article['title'] ?> article"></div>                    
                    <div class="description-height">
                        <p><?php echo $article['description'] ?></p>
                        <p> Subject : <?php echo $article['subject'] ?></p>
                    </div>
                </div>
            </a>
        </article>
    <?php endforeach; ?>
</section>
<?php
require_once('./includes/footer.inc.php');
?>