<?php
require_once('./includes/head.inc.php');

require_once('../includes/init.inc.php');
$pdostatement = $pdo->query("SELECT * FROM blog  
ORDER BY RAND ( )  
LIMIT 1  ");

$blog = $pdostatement->fetch(PDO::FETCH_ASSOC);

$pdostatement = $pdo->query("SELECT * FROM gallery  
ORDER BY RAND ( )  
LIMIT 1  ");

$gallery = $pdostatement->fetch(PDO::FETCH_ASSOC);


?>


    <div class="welcome">

        <h2>
            Welcome to your admin page !
        </h2>
        <h3>Here you can add/adjust your content !</h3>

        <div class="content">
            <div class="card">
                <a href="./gallery.php">
                    <div class="gallery">
                        <h3>GALLERY</h3>
                        <img src="../img/gallery/<?php echo $gallery['filename'] ?>" alt="Random gallery image">
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="./contact.php">
                    <div class="contact">
                        <h3>CONTACT</h3>
                        <img src="./img/close-envelope.png" alt="envelope">
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="./blog.php">
                    <div class="blog">
                        <h3>BLOG</h3>
                        <img src="../img/blog/<?php echo $blog['img'] ?>" alt="random blog image">
                    </div>
                </a>
            </div>
        </div>

    </div>


<?php
require_once('./includes/footer.inc.php');
?>