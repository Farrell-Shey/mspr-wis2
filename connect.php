<?php
try{
    $db= new PDO('mysql:host=localhost;dbname=mspr_rs', 'root', 'root');

} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}