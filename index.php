<?php

include_once 'api/method/posts.php';
include_once 'elements/header.php';

$posts = getPosts();
?>

<a class="btn btn-danger" href="api/auth/unsetsession.php">
    <span><?= $user['pseudo'] ?></span>
    <i class="bi bi-trash"></i>
</a>

<section class="py-5">

    <div><img src="logo/gameon.png" class="logo" alt="" width="100px"/></div>

    <div class="container pt-5">

        <?php foreach ($posts as $post): ?>

            <?php include 'elements/post.php'; ?>

        <?php endforeach; ?>

    </div>
</section>

<?php include_once 'elements/footer.php'; ?>


