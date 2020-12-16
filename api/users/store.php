<?php
include_once '../connectDB.php';

$data = [
    'email' => $_POST['email'],
    'pseudo' => $_POST['pseudo'],
    'password' => sha1($_POST['password']),
    'password_confirm' => sha1($_POST['password_confirm'])
];

if ($data['password'] === $data['password_confirm']){

    $dbh = connDB();

    $result = storeUser($data);

    session_start();
    $_SESSION['user'] = $result;

    header('location:../../index.php');

    } else {

    header('location:../../register?mdp=false');

}