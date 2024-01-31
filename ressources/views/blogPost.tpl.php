<?php
//include '../ressources/views/layouts/header.tpl.php';

if (!isset($article)) : ?>
    <p>Aucun Article trouvé</p>
<?php else : ?>
    <?php foreach ($article as $post) : ?>
        <?= $post ['id'];
        echo '<br>' ?>
        <?= $post ['title'];
        echo '<br>'; ?>
        <?= $post ['post'];
        echo '<br>' ?>
        <?= $post ['pseudo'];
        echo '<br>' ?>
        <?= $post ['startPublicationDate'] . "     <br>"; ?>
    <?php endforeach; ?>
<?php endif; ?>

