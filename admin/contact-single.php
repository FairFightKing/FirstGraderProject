<?php


require_once('./includes/head.inc.php');

require_once('../includes/init.inc.php');


$pdostatement = $pdo->query("SELECT * FROM contact WHERE id_contact = $_GET[id] ");

$contact = $pdostatement->fetch(PDO::FETCH_ASSOC);


?>

<section class="container">
    <a href="contact.php" class="back-contact">Go back to the contact table</a>
    <div class="content">
        <div class="header">
            <p>
                Name : <span><?php echo $contact['name'] ?></span>
            </p>
            <p>
                Email : <span><?php echo $contact['email'] ?></span>

            </p>
            <p>
                Date : <span><?php echo $contact['date'] ?></span>

            </p>
        </div>
        <div class="text">
            <h2>Content : </h2>
            <p>
                <?php echo $contact['content'] ?>
            </p>
        </div>

    </div>



</section>


<?php
require_once('./includes/footer.inc.php');
?>