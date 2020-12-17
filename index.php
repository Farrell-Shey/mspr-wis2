<?php

include_once 'api/method/posts.php';
include_once 'elements/header.php';

$posts = getPosts();
?>

<a class="ml-auto" href="api/auth/unsetsession.php">déconnexion</a>

<section class="py-5">

    <div><img src="logo/gameon.png" class="logo" alt="" width="100px"/></div>

    <div class="container pt-5">

        <?php foreach ($posts as $post): ?>

            <?php include 'elements/post.php'; ?>

        <?php endforeach; ?>

    </div>
</section>

<?php include_once 'elements/footer.php'; ?>


