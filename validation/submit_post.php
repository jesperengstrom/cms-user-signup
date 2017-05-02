<?php
require "../classes/post.php";
require "../resources/error.php";
require "../resources/pdo.php";

$new_post = new Post($_POST["post-title"], $_POST["post-body"], $_POST["post-tags"], $pdo);
$stmt = $new_post->store_post();
$stmt->execute();
header("Location: ../index.php");