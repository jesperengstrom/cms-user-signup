<?php
require "../classes/user.php";
require "../resources/error.php";
require "../resources/pdo.php";

$new_user = new User($_POST["username"], $_POST["password"], $_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["profession"], $_POST["description"], $pdo);
// if ($new_user->check_availability()) {
    $statement = $new_user->store_user();
    $statement->execute();
    echo "user was created!";
// } 
// else {
//     echo "username " . $new_user->username . " is taken!";
//     }


?>

