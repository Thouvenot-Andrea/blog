

<?php if (empty($resultPosts)) : ?>
    <p>Aucun Article trouvé</p>
<?php else : ?>
    <?php foreach ($resultPosts as $post) : ?>
        <?= $post ['title'] ?>
    <?php endforeach; ?>
<?php endif; ?>



<!---->
<!--if (isset($post)){-->
<!--    echo ("Aucun Article")-->
<!--}-->
<!--else{-->
<!--foreach ($resultPosts  as $post ){-->
<!---->
<!--    echo '<br>';-->
<!--    echo "Titre : ".-->
<!--        $post ['title'] ." //  ";-->
<!--    echo "Auteur : ".-->
<!--        $post ['Authors_id']." //  ";-->
<!--    echo "Texte : ".-->
<!--        $post ['text']." //  ";}-->
<!--}-->

<!--include ('../ressources/views/layouts/header.tpl.php');-->
<!--include ('../ressources/views/layouts/footer.tpl.php');-->