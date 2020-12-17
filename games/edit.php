<?php

    include_once 'api/method/games.php';

    session_start();

    if($_POST){
        if(isset($_POST['name']) && $_POST['name']){

            $db = connDB();
            $stmt = $db->prepare("DELETE FROM games IN (`name`) WHERE (:gamesname)");
            $stmt->bindParam(':gamesname', $db['name']);
            $stmt->execute();

            $_SESSION['message'] = "Produit supprimé";
            header('Location: show.php');

        } else{
            $_SESSION['erreur'] = "Erreur";
            header('location: ../../games/delete.php');
    }
}