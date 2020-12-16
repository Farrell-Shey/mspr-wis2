<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un jeu</title>

    <link rel="stylesheet" href="../assets/css/app.css">

</head>
<body>
<main class="container">
    <div class="row">
        <section class="col-8">
            <?php if ($_SESSION['erreur']): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['erreur'] ?>
                </div>
                <?php unset($_SESSION['erreur']);
            endif; ?>
            <h1>Ajouter un jeu</h1>
            <form action="../api/games/store.php" method="post">
                <div class="form-group">
                    <label for="name">NOM DU JEU</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>

                <button class="btn btn-primary">Envoyer</button>
            </form>
        </section>
    </div>
</main>
</body>
</html>