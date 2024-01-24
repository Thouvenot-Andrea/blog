<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'Andrea', 'HelioS@@du26');
} catch (PDOException $e) {
    echo 'error 404 ';
    // tenter de réessayer la connexion après un certain délai, par exemple
}
