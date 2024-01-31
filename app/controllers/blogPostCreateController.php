<?php
include ('../app/persistances/blogPostData.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Récupérer les valeurs du formulaire
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Authors_id = filter_input(INPUT_POST, "Authors_id", FILTER_SANITIZE_NUMBER_INT);

    global $pdo;
    $postCreate = blogPostCreate($pdo, $title, $post, $Authors_id);
}



include '../ressources/views/blogPostCreate.tpl.php';