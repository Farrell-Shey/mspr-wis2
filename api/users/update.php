<?php

include_once '../method/users.php';

$id = $_GET['id'];

$discord = isset($_POST['discord']) ? $_POST['discord'] : null;

$data = [
    'pseudo' => $_POST['pseudo'],
    'email' => $_POST['email'],
    'discord' => $discord
];

$error = updateUser($id, $data);

if ($error === false){
    header('location : ../../users/update?id='.$id.'&error=false');
} else {
    header('location : ../../users/show?id='.$id);
}