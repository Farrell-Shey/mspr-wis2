<?php include "elements/header.php";
$posts = GetPosts();
?>

    <section class="bg-light">
        <div class="container">
            <img class="profil-thumb"
                 src="<?= isset($_SESSION['user']['thumbnail']) ? $_SESSION['user']['thumbnail'] : null ?>"
                 alt="photo de profil de <?= $_SESSION['user']['pseudo'] ?>">
            <h1><?= $_SESSION['user']['pseudo'] ?></h1>
            <a class="ml-auto" href="api/auth/unsetsession.php">déconnection</a>
        </div>
    </section>


    <section>
        <?php foreach ($posts as $post): ?>

            <div class="card card-post">
                <img class="profil-thumb"
                     src="chemin de la thumb"
                     alt="photo de profil de pseudo">
                <h2>pseudo poster</h2>
                <p>content</p>
                <a>
                    <i class="bi bi-heart"></i>
                    <span class="text-muted nb-like">nombre de like</span>
                </a>
                <a>
                    <i class="bi bi-chat-left"></i>
                    <span class="text-muted nb-like">nombre de commentaire</span>
                </a>
                <figure class="game">
                <img class="game-thumb"
                     src="chemin de la thumb"
                     alt="nom du jeu">
                    <figcaption class="text-muted">nombre de personne qui follow le jeu</figcaption>
                </figure>
            </div>
        <?php endforeach; ?>
    </section>


<?php include_once "elements/footer.php"; ?>