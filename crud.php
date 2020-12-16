<?php
session_start();

require_once('connect.php');

$sql = 'SELECT * FROM `games`';

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des jeux</title>

    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .row {

            margin: 10%;
            background-color: #4b178d25;
            padding: 20px;
            box-shadow: 5px 5px 35px #E5E5E5;

        }
    </style>

</head>
<body>
<main class="container">
    <div class="row">
        <section class="col-10">
            <?php
            if(!empty($_SESSION['erreur'])){
                echo '<div class="alert alert-danger" role="alert">
                                '. $_SESSION['erreur'].'
                            </div>';
            }
            ?>
            <?php
            if(!empty($_SESSION['message'])){
                echo '<div class="alert alert-success" role="alert">
                                '. $_SESSION['message'].'
                            </div>';
            }
            ?>
            <h1>Liste des Jeux</h1>
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Nom du jeu</th>
                <th>image</th>
                </thead>
                <tbody>
                <?php
                foreach($result as $games){
                    ?>
                    <tr>
                        <td><?= $games['id'] ?></td>
                        <td><?= $games['name'] ?></td>
                        <td><a href="edit.php?id=<?= $games['id'] ?>">Modifier</a> <a href="delete.php?id=<?= $games['id'] ?>">Supprimer</a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <a href="add.php" class="btn btn-primary">Ajouter un jeu</a>
        </section>
    </div>
</main>
</body>
</html>