<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mspr-wis2/api/connectDB.php';


function getGames()
{
    $stmt = connDB()->prepare("SELECT * FROM games ");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getGame($id)
{
    $stmt = connDB()->prepare("SELECT * FROM games WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch();
}

function getGameFollower($id)
{
    $stmt = connDB()->prepare("SELECT COUNT(*) follower FROM user_games WHERE game_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateGame($id, $name)
{
    $stmt = ConnDB()->prepare('UPDATE games SET name = :name WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    return $stmt->execute();
}

function storeGame($data)
{
    $stmt = ConnDB()->prepare('INSERT INTO games (`name`, `thumbnail`) VALUES (:name, :thumbnail)');
    $stmt->bindParam(':name', $data['name']);
    $stmt->bindParam(':thumbnail', $data['thumbnail']);
    return $stmt->execute();
}

function deleteGame($id)
{
    $stmt = ConnDB()->prepare('DELETE FROM games WHERE id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    $stmt = ConnDB()->prepare('DELETE FROM user_games WHERE game_id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    $stmt = ConnDB()->prepare('SELECT * FROM posts WHERE game_id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}