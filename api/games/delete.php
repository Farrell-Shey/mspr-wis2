<?php

include_once '../method/games.php';

$id = $_GET['id'];

$id_posts = deleteGame($id);

foreach (id_posts as $id_post) {
    deletePost($id_post);
}

header('location : ../../games/');