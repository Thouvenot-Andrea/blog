<?php


//Afficher un article avec son auteur et les commentaires
include '../app/persistances/blogPostData.php';


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$article = blogPostById($pdo, $id);
//$comments = commentsByBlogPost($pdo, $id);

include '../ressources/views/blogPost.tpl.php';




































