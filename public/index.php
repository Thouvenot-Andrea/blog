Bienvenue sur le blog<?php

$GET["action"] = filter_input (INPUT_GET,"action",FILTER_SANITIZE_URL);
if ($_GET["action"] == "") {
    include "./action/";
} else if ($_GET["action"] == ""){
    include "./action/";
} else if ($_GET["action"] == ""){
    include "./action/";
}
else{
    echo "Error 404";
}

