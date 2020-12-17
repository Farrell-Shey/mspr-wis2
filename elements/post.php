<?php
$comments = getPostComments($post['id']);
$user_post = getUser($post['user_id']);
$game_post = getPostGame($post['game_id']);
$user_like = getUserLike($_SESSION['user']['id'], $post['id']);
$likes = getPostLikes($post['id']);
$follower = getGameFollower($post['game_id']);
?>

<article class="card mb-4 card-post">

    <?php if ($post['user_id'] === $user['id']) ?>

    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-list"></i>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Modifier le post</a></li>
            <li><a class="dropdown-item text-danger" href="#">Supprimer le post</a></li>
        </ul>
    </div>

    <?php ?>



    <img class="profil-thumb"
         src="assets/image/default-profile.png"
         width="50px"
         height="50px"
         alt="photo de profil de <?= $user_post['pseudo'] ?>">
    <h2><?= $user_post['pseudo'] ?></h2>
    <p>content</p>
    <a href="api/user_like/<?= isset($user_like) ? 'delete.php' : 'store.php' ?>">
        <i class="bi bi-heart<?= isset($user_like) ? '-fill' : null ?>"></i>
        <span class="text-muted nb-like"><?= $likes ?count($likes) : 0; ?></span>
    </a>
    <a href="posts/show?id=<?= $post['id'] ?>">
        <i class="bi bi-chat-left"></i>
        <span class="text-muted nb-like"><?= $comments ?count($comments) : 0; ?></span>
    </a>
    <figure class="game">
        <img class="game-thumb"
             src="<?= $game_post['thumbnail'] ?>"
             alt="<?= $game_post['name'] ?>">
        <figcaption class="text-muted"><?= $follower ?$follower['follower'] : 0; ?> personnes jouent à ce jeu</figcaption>
    </figure>
</article>