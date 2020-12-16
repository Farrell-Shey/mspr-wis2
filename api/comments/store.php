<?php

include_once '../method/comments.php';

$id = $_SESSION['user'];

$comment_id = isset($_GET['comment_id']) ? $_GET['comment_id'] : null ;

$data = [
    'post_id' => $_POST['post_id'],
    'user_id' => $id,
    'content' => $_POST['content'],
    'comment_id' => $comment_id
];

$error = storeComment($data);

if ($error === false){
    header('location : ../../posts/comment-add.php?error=false');
} else {
    header('location : ../../posts/');
}