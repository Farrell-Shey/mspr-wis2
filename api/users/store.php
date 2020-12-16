<?php
include_once "../method/users.php";

$data = [
    'email' => $_POST['email'],
    'pseudo' => $_POST['pseudo'],
    'password' => sha1($_POST['password']),
    'password_confirm' => sha1($_POST['password_confirm'])
];

if ($data['password'] === $data['password_confirm']){

    $dbh = connDB();

    $stmt = $dbh->prepare('INSERT INTO `users`(`password`, `email`, `pseudo`) VALUES (:password, :email, :pseudo)');
    $stmt->bindParam(':password', $data['password']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':pseudo', $data['pseudo']);
    $result = $stmt->execute();

    session_start();
    $_SESSION['user'] = $result;

    header('location:../../index.php');

    } else {

    header('location:../../register?mdp=false');

}