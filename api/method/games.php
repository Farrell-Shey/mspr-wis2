<?php

function ConnDB()
{
    return new PDO('mysql:host=localhost;dbname=mspr_rs', 'root', '');
}


function GetGames()
{

    $db = ConnDB();
    $sql = 'SELECT * FROM `games`';
    $query = $db->prepare($sql);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);

}