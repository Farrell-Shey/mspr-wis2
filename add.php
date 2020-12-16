<?php

session_start();

if($_POST){
    if(isset($_POST['id']) &&  $_POST['id'] && isset($_POST['name']) && $_POST['name']){

        require_once('connect.php');

        function ConnectUser($data){
        $db = connDB();
        $stmt = $db->prepare("SELECT * FROM games WHERE id = :id AND games.name = :gamesname ");
        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':gamesname', $data['name']);
     $stmt->execute();

        $_SESSION['message'] = "jeu ajouté";
        require_once('connect.php');
        
    } else{
        $_SESSION['erreur'] = "Le formulaire est incomplet";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un jeu</title>

    <link rel="stylesheet" href="assets/css/app.css">

</head>
<body>
<main class="container">
    <div class="row">
        <section class="col-8">
            <?php
            if(!empty($_SESSION['erreur'])){
                echo '<div class="alert alert-danger" role="alert">
                                '. $_SESSION['erreur'].'
                            </div>';
                $_SESSION['erreur'] = "";
            }
            ?>
            <h1>Ajouter un jeu</h1>
            <form method="post">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" id="id" name="id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">NOM DU JEU</label>
                    <input type="text" id="name" name="name" class="form-control">

                <button class="btn btn-primary">Envoyer</button>
            </form>
        </section>
    </div>
</main>
</body>
</html>