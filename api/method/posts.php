<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mspr-wis2/api/connectDB.php';

function getPosts()
{
    $stmt = ConnDB()->prepare('SELECT * FROM posts');
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPost($id)
{
    $stmt = ConnDB()->prepare('SELECT * FROM posts WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();
}

function getPostComments($post_id)
{
    $stmt = ConnDB()->prepare('SELECT * FROM comments WHERE post_id = :id');
    $stmt->bindParam(':id', $post_id);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPostAuthor($id)
{

    $stmt = ConnDB()->prepare("SELECT * FROM users WHERE post_id = :post_id");

    $stmt->bindParam(":post_id", $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPostGame($game_id)
{
    $stmt = ConnDB()->prepare("SELECT * FROM games WHERE id = :game_id");
    $stmt->bindParam(":game_id", $game_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function updatePost($id, $data)
{
    $stmt = ConnDB()->prepare('UPDATE posts SET content = :content WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':content', $data['content']);
    return $stmt->execute();
}

function deletePost($id)
{
    $stmt = ConnDB()->prepare('DELETE FROM posts WHERE id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    $stmt = ConnDB()->prepare('DELETE FROM user_likes WHERE post_id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    $stmt = ConnDB()->prepare('DELETE FROM comments WHERE post_id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}

function storePost($data)
{
    $dbh = ConnDB();
    $stmt = $dbh->prepare('INSERT INTO posts (content, user_id, game_id) VALUES (:content, :user_id, :game_id)');
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->bindParam(':game_id', $data['game_id']);
    $stmt->bindParam(':content', $data['content']);
    $stmt->execute();
    return getPost($dbh->lastInsertId());
}