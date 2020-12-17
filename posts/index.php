<?php include "../elements/header.php";
$posts = GetPosts();
?>

    <section class="bg-light">
        <div class="container">
            <img class="profil-thumb"
                 src="<?= isset($_SESSION['user']['thumbnail']) ? $_SESSION['user']['thumbnail'] : null ?>"
                 alt="photo de profil de <?= $_SESSION['user']['pseudo'] ?>">
            <h1><?= $_SESSION['user']['pseudo'] ?></h1>
            <a class="ml-auto" href="../api/auth/unsetsession.php">déconnection</a>
        </div>
    </section>


    <section>
        <?php foreach ($posts as $post): ?>

            <?php include 'elements/post.php'; ?>

        <?php endforeach; ?>
    </section>


<?php include_once "../elements/footer.php"; ?>