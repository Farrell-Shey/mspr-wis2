<?php

include_once '../connectDB.php';

function ConnectUser($data)
{

    $stmt = connDB()->prepare("SELECT users.id FROM users WHERE email = :email AND password = :password");
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':password', $data['password']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getUser($id)
{

    $stmt = connDB()->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch();

}

function getUsers()
{

    $stmt = connDB()->prepare("SELECT * FROM users ");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getUserGame($id)
{

    $stmt = connDB()->prepare("SELECT * FROM user_games WHERE user_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getUserComments($id)
{
    $stmt = connDB()->prepare("SELECT * FROM comments WHERE user_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserLike($id)
{

    $stmt = connDB()->prepare("SELECT * FROM user_likes WHERE user_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function getUserLikePost($id)
{
    $stmt = connDB()->prepare("SELECT * FROM user_likes INNER JOIN posts ON user_likes.post_id = posts.id WHERE user_id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateUser($id, $data)
{

    $stmt = ConnDB()->prepare('UPDATE users SET pseudo = :pseudo, email = :email, discord = :discord, updated_at = NOW() WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':pseudo', $data['pseudo']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':discord', $data['discord']);
    return $stmt->execute();

}

function deleteUser($id)
{

    $stmt = ConnDB()->prepare('DELETE FROM users WHERE id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    $stmt = ConnDB()->prepare('DELETE FROM user_likes WHERE user_id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    $stmt = ConnDB()->prepare('DELETE FROM user_games WHERE user_id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();

}

function storeUser($data)
{
    $stmt = ConnDB()->prepare('INSERT INTO users (`password`, `email`, `pseudo`) VALUES (:password, :email, :pseudo)');
    $stmt->bindParam(':password', $data['password']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':pseudo', $data['pseudo']);
    return $stmt->execute();
}

