<?php
include_once '../method/games.php';

$data = [
    'name' => $_POST['name'],
    'thumbnail' => $_POST['thumbnail']
    ];

$error = storeGame($data);

if ($error === false){
    header('location : ../../games/add.php?error=false');
} else {
    header('location : ../../games/');
}