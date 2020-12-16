<?php
include_once '../method/games.php';

session_start();

if($_POST){
    if(isset($_POST['name']) && $_POST['name']){

        $dbh = connDB();
        $stmt = $dbh->prepare("INSERT INTO games (`name`) VALUES (:gamesname)");
        $stmt->bindParam(':gamesname', $data['name']);
        $stmt->execute();

        $_SESSION['message'] = "jeu ajouté";
        header('location: ../../games/show.php');

    } else{
        $_SESSION['erreur'] = "Le formulaire est incomplet";
        header('location: ../../games/add.php');
    }
}

