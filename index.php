<?php
require "partials/header.php";
require "classes/posts.php";
require "resources/pdo.php";
require "resources/error.php";

$posts = new Posts($pdo);
$all_posts = $posts->get_all_posts();
?>

<main class="container">
    <?php foreach ($all_posts as $post):?>
    <div class="row justify-content-center">
        <div class="col-sm-12">
        <h3><?php echo $post["title"]; ?></h3>
        <p class="small">Posted by
        <?php echo $post["firstname"] . " " . $post["lastname"] . " on " . $post["date"]; ?>
        </p>
        <?php echo $post["body"]?>
        <hr>
        </div>
    </div>
    <?php endforeach;?>
</main>
<footer>
    <a href="pages/login.php">Login</a> | <a href="pages/register.php">Register</a> | <a href="pages/new_post.php">New Post</a>
</footer>

<?php
require "partials/footer.php";
?>