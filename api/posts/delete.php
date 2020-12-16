<?php

include_once '../method/posts.php';

$id = $_GET['id'];

deletePost($id);

header('location : ../../posts/');