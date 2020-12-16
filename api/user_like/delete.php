<?php
include_once '../method/users.php';

session_start();

$user_id = $_SESSION['user'];
$post_id = $_GET['id'];

deleteUserLike($user_id, $post_id);

header('location : ../../posts/');