<?php
require_once('./includes/head.inc.php');
require_once('./includes/init.inc.php');


$pdostatement = $pdo->query("SELECT * FROM blog WHERE id_article = $_GET[id]");

$article = $pdostatement->fetch(PDO::FETCH_ASSOC);


?>

<section id="content">

    <div class="heading">
        <div class="title">
            <h2><?php echo $article['title'] ?></h2>
        </div>
        <div class="subject">
            <h3><?php echo $article['subject'] ?></h3>
        </div>
        <div class="description">
            <p><?php echo $article['description'] ?></p>
        </div>
        <div class="date">
            <p>[<?php echo $article['date'] ?>]</p>
        </div>
            <img src="./img/blog/<?php echo $article['img'] ?>" alt="Header image of this article">
    </div>
    <div class="content">
        <?php echo $article['content'] ?>
    </div>
</section>

<?php
require_once('./includes/footer.inc.php');
?>