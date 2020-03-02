<?php
require_once('./includes/head.inc.php');
require_once('./includes/init.inc.php');
require_once('./php/data-gallery.php');

?>


    <section>

        <div class="container">
            <?php foreach ($new_images as $groups): ?>
                <?php foreach ($groups as $group): ?>
                    <div class="columns gallery-4rows">
                        <?php foreach ($group as $image): ?>
                            <a href="./gallery-single.php?id=<?php echo $image['id_position'] ?>">
                                <img src='./img/gallery/<?php echo $image['name'] ?>' alt='<?php echo $image['alt'] ?>'>
                            </a>

                        <?php endforeach; ?>
                    </div>
                <?php endforeach;
            endforeach;
            foreach ($new_images_row2 as $images): ?>
                <div class="columns gallery-2rows">
                    <?php foreach ($images as $image) : ?>
                        <a href="./gallery-single.php?id=<?php echo $image['id_position'] ?>">
                            <img src="./img/gallery/<?php echo $image['name'] ?>" alt="<?php $image['alt'] ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            <div class="columns gallery-1row">
                <?php foreach ($new_images_row1 as $image): ?>
                    <a href="./gallery-single.php?id=<?php echo $image['id_position'] ?>">
                        <img src="./img/gallery/<?php echo $image['name'] ?>" alt="<?php $image['alt'] ?>">
                    </a>
                <?php endforeach; ?>
            </div>


        </div>


    </section>


<?php require_once('./includes/footer.inc.php'); ?>