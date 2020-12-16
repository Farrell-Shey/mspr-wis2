<?php

include_once '../method/comments.php';

$id = $_GET['id'];
$post_id = $_GET['post_id'];

$content = $_POST['content'];

$error = updateComment($id, $content);

if ($error === false){
    header('location : ../../posts/comment-update?id='.$id.'&error=false');
} else {
    header('location : ../../posts/show?id='.$post_id);
}