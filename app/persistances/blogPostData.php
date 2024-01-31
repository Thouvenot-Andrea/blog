<?php
/* va contenir toutes les fonctions qui seront responsables de gérer la persistance des articles dans la BDD et donc
du dialogue avec la BDD.*/

function lastBlogPosts($pdo)
    {
        $lastpost = $pdo ->query("SELECT Authors_id

                FROM Posts
        ORDER BY startPublicationDate DESC
LIMIT 10");
       echo '<br>';
       return $lastpost ->fetchAll(PDO::FETCH_ASSOC);
    }

// Afficher un article avec son auteur
function blogPostById($pdo, $id)
{
    $postById = $pdo->query("SELECT Posts.id, Posts.title, Posts.post, Posts.startPublicationDate, Posts.endPublicationDate	, Authors.pseudo
        FROM Posts
        INNER JOIN Authors ON Posts.Authors_id = Authors.id
        WHERE Posts.id = $id ");
    echo '<br>';
    return $postById->fetchAll();
};

// Afficher les commentaires

//function commentsByBlogPost(PDO $pdo, $id)
//{
//    $commentsPost  = $pdo->query("SELECT comment ,Comments.Authors_id,
//        FROM Comments
//        INNER JOIN Posts ON Posts.id = Comments.posts_id
//        WHERE Comments.posts_id = $id");
//    echo '<br>';
//    return  $commentsPost->fetchAll();
//};

//créer une fonction “blogPostCreate”

function blogPostCreate($pdo,$title,$post,$Authors_id)
{
   $pdo->query("INSERT INTO `Posts`(`title`,`post`,`popularity`,`startPublicationDate`,`endPublicationDate`,`Authors_id`)
       
    VALUES ('$title','$post','1',CURDATE(),CURDATE(),'$Authors_id')");
    echo '<br>';
};