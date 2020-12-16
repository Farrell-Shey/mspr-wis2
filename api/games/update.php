<?php

include_once '../method/games.php';

$id = $_GET['id'];

$name = $_POST['name'];

$error = updateGame($id, $name);

if ($error === false){
    header('location : ../../games/update?id='.$id.'&error=false');
} else {
    header('location : ../../games/');
}