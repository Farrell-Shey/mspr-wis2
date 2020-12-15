<?php
include_once '../method/users.php';

$data = [
    'email' => $_POST['email'],
    'password' => sha1($_POST['password'])
];

// Va chercher l'utilisateur en BDD en utilisant le mot de passe et l'email
$result = ConnectUser($data);

if ($result === false) {
    header('location: ../../login.php?email=' . $data['email']);
} else {
    session_start();
    $_SESSION['user'] = $result;
    header('location: ../../index.php');
}