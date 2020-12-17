<?php
session_start();

require_once('../api/method/games.php');

$games = GetGames();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des jeux</title>

    <link rel="stylesheet" href="../assets/css/app.css">
</head>
<body>
<main class="container">
    <div class="row">
        <section class="col-10">
            <h1>Liste des Jeux</h1>
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Nom du jeu</th>
                <th>image</th>
                </thead>
                <tbody>
                <?php foreach ($games as $game) : ?>
                    <tr>
                        <td><?= $game['id'] ?></td>
                        <td><?= $game['name'] ?></td>
                        <td><a href="edit.php?id=<?= $game['id'] ?>">Modifier</a> <a
                                    href="delete.php?id=<?= $game['id'] ?>">Supprimer</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a href="add.php" class="btn btn-primary">Ajouter un jeu</a>
        </section>
    </div>
</main>
</body>
</html>