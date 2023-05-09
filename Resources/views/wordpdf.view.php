<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


<main>
    <form action="/vconvert" method="post" enctype="multipart/form-data">
        <input type="file" name="word_file">
        <input type="submit" value="Convert">
    </form>
</main>

<?php require('partials/footer.php') ?>