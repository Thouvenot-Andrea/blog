<?php
/* Sera le contrôleur de la page d’accueil de votre blog, Il est le chef d’orchestre des actions à réaliser pour
afficher la page d’accueil. Il va appeler la fonction qui gère les données, faire les vérifications et pour
finir, appeler le rendu.*/

//echo "Hello World";

echo '<br>';
include ('../app/persistances/blogPostData.php');

global $pdo;


$resultPosts = lastBlogPosts($pdo);
//var_dump($resultPosts);
include '../ressources/views/home.tpl.php';