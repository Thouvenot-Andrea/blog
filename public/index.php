<?php

echo "Bienvenue sur le blog";

$action= filter_input(INPUT_GET, "action", FILTER_SANITIZE_URL);

include ('../config/database.php');

include ('../app/controllers/homeController.php');







