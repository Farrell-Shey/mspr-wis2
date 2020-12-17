<?php
include_once '../method/users.php';

$data = [
    'email' => $_POST['email'],
    'pseudo' => $_POST['pseudo'],
    'password' => sha1($_POST['password']),
    'password_confirm' => sha1($_POST['password_confirm'])
];

if ($data['password'] === $data['password_confirm']){

    $result = storeUser($data);

    session_start();
    $_SESSION['user'] = $result;

    header('location:../../show.php');

    } else {

    header('location:../../register?password=false');

}