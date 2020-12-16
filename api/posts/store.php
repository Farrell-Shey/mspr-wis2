<?php
include_once '../method/posts.php';
session_start();

$data = [
    'email' => $_SESSION['user'],
    'pseudo' => $_POST['game_id'],
    'password' => $_POST['content']
];

$error = storePost($data);

if ($error === false){
    header('location : ../../posts/add.php?error=false');
} else {
    header('location : ../../posts/');
}