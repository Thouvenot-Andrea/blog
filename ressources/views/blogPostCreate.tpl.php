<?php

//include '../ressources/layouts/header.tpl.php'?>

<h2>Créer un nouvel POST</h2>
        <form action="index.php?action=create" method="POST">
            <label for="title">TITRE :</label>
            <input type="text" id="title" name="title" required><br>
            <label for="post">POST :</label>
            <input type ="text" id="post" name="post" required><br>
            <label for="Authors_id">ID AUTEUR :</label>
            <input type="number" id ="Authors_id" name="Authors_id" required><br>
            <input type="submit" value="Créer un ARTICLE">
        </form>
</section>

<?php
//
//    // Faire quelque chose avec les valeurs récupérées, par exemple, les afficher
//    echo "Titre : " . $title . "<br>";
//    echo "Post : " . $post . "<br>";
//    echo "ID Auteur : " . $Authors_id . "<br>";
//
//?>



<!--<section>-->
<!--<h2>Créer un nouvel POST</h2>-->
<!--    <form action="index.php?action=create" method="POST">-->
<!--                <label for="title">TITRE :</label>-->
<!--                <input type="text" id="title" name="title" required<br>-->
<!--                <label for="post">POST :</label>-->
<!--                <imput type ="text" id="post" name="post" required<br>-->
<!--                <label for="Authors_id">ID AUTEUR :</label>-->
<!--                <input type="number" id =Authors_id name="Authors_id" required<br>-->
<!--                <input type="submit" value="Créer un ARTICLE">-->
<!--    </form>-->
<!--</section>-->