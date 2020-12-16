<?php
include_once '../method/users.php';
session_start();

$user_id = $_SESSION['user'];
$game_id = $_GET['id'];

storeUserLike($user_id, $game_id);

header('location : ../../posts/');