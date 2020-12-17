<?php

session_start();

if($_POST){
    if(isset($_POST['name']) && $_POST['name']){

        $db = connDB();
        $stmt = $db->prepare("UPDATE `name` SET (:gamesname) WHERE ìd``:id;");
        $stmt->bindParam(':gamesname', $db['name']);
        $stmt->execute();

        $_SESSION['message'] = "jeu ajouté";
        header('location: ../../games/show.php');

    } else{
        $_SESSION['erreur'] = "Le formulaire est incomplet";
        header('location: ../../games/add.php');
    }

}