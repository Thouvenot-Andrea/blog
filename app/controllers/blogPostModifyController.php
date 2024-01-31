<?php
//Exemple : “index.php?action=blogPostModify&id=2” permettra de modifier l’article 2
echo 'coucou';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    global $pdo;
    $postModify = blogPostUpdate($pdo, $title, $post, $id);

    if ($postModify) {
        echo 'Mise à jour réussie';
    } else {
        echo 'Échec de la mise à jour';
    }
}

include '../ressources/views/blogPostUpdate.tpl.php';