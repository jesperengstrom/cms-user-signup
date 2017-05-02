<?php
    include "../partials/header.php";
    require "../resources/password.php";
?>

<script src="<?php echo 'https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=' . $mce_key; ?>"></script>
<script src="../js/editor.js"></script>

<section class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10">
            <h1 class="text-center">New Post</h1>
            <form action="../validation/submit_post.php" method="post">
            <div class="form-group">
                <label for="post-title">Title:</label>
                <input type="text" class="form-control" name="post-title" placeholder="Give the post a title" required maxlength="200">
            </div>
            <div class="form-group">
            <label for="post-body">Post body:</label>
                <textarea id="text-area" name="post-body"></textarea>
            </div>
            <div class="form-group">
                <label for="post-tags">Tags:</label>
                <input type="text" class="form-control" name="post-tags" placeholder="Tags, Separated, By, Comma" maxlength="50">
            </div>
                <button class="btn btn-primary mt-3" id="post-preview-btn">Preview</button>
                <input class="btn btn-primary mt-3" type="submit">
            </form>
        </div>
    </div>
</section>
<?php
    include "../partials/footer.php"
?>

