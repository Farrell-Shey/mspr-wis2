<?php

function ConnDB()
{
    return new PDO('mysql:host=localhost;dbname=mspr_rs', 'root', '');
}

function ConnectUser($data){
    $dbh = connDB();
    $stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':password', $data['password']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}