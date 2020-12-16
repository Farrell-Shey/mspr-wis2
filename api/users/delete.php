<?php

include_once '../method/users.php';
session_start();

$id = $_GET['id'];

deleteUser($id);

if ($_SESSION['id'] === $id){
    unset($_SESSION);
}

header('location : ../../index.php');