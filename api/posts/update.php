<?php

include_once '../method/posts.php';

$id = $_GET['id'];


$data = [
    'content' => $_POST['content'],
];

$error = updatePost($id, $data);

if ($error === false){
    header('location : ../../posts/update?id='.$id.'&error=false');
} else {
    header('location : ../../posts/show?id='.$id);
}