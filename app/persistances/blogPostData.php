<?php
/* va contenir toutes les fonctions qui seront responsables de gérer la persistance des articles dans la BDD et donc
du dialogue avec la BDD.*/

function lastBlogPosts($pdo)
    {
        $lastpost = $pdo ->query('SELECT Authors_id, title
 
                FROM Posts
                LIMIT 10
                OFFSET 2 ');
       echo '<br>';
       return $lastpost ->fetchAll(PDO::FETCH_ASSOC);

    }

