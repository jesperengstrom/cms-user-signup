<?php

require "partials/header.php";

$loggedIn = false;

if ($loggedIn) {
    echo "logged in!";
} else {
    require "pages/login.php";
}

require "partials/footer.php";


?>