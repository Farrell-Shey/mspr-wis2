<?php

include_once '../method/comments.php';

$post_id = isset($_GET['post_id']) ? $_GET['post_id'] : null;
$id = $_GET['id'];

deleteComment($id);

if ($post_id) {
    header('location : ../../posts/show?id='.$post_id);
} else {
    header('location : ../../posts/');
}