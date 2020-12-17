<?php include "../elements/header.php";

if (isset($_GET['id'])){
    $user = getUser($_GET['id']);
}

$posts = GetUserPost($user['id']);
$comments = GetUserComments($user['id']);
$games = GetUserGame($user['id']);
$like_post = GetUserLikePost($user['id']);
?>

    <section>
        <div class="row">
            <div class="col-3">
                <img src="assets/image/<?php isset($user['thumbnail']) ? $user['thumbnail'] : 'default-profile.png'; ?>">
            </div>
            <div class="col-9">
                <div class="row">
                    <h1><?= $user['pseudo'] ?></h1>
                </div>
                <div class="row">
                    <div class="col-3">
                        <span><?= count($posts) ?> Publications</span>
                    </div>
                    <div class="col-3">
                        <span><?= count($games) ?> Jeux</span>
                    </div>
                    <div class="col-3">
                        <span><?= count($like_post) ?> Publications aimées</span>
                    </div>
                    <div class="col-3">
                        <span><?= count($comments) ?> Commentaires</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="../api/users/update.php?id=<?= $user['id'] ?>" class="btn btn-outline-primary">modifier mon
                profile</a>
        </div>
    </section>
    <section>
        <div>
            <h2>Mes posts</h2>
        </div>
        <?php foreach ($posts as $post): ?>

            <?php include '../elements/post.php'; ?>

        <?php endforeach; ?>
    </section>


<?php include_once "../elements/footer.php"; ?>