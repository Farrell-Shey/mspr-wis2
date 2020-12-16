<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/mspr-wis2/api/connectDB.php';

function storeComment($data)
{
    $stmt = ConnDB()->prepare('INSERT INTO comments (post_id, user_id, content, comment_id) VALUES (:post_id, :user_id, :content, :comment_id)');
    $stmt->bindParam(':post_id', $data['post_id']);
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->bindParam(':content', $data['content']);
    $stmt->bindParam(':comment_id', $data['comment_id']);
    return $stmt->execute();
}

function updateComment($id, $content)
{
    $stmt = ConnDB()->prepare('UPDATE comments SET content = :content WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $content);
    return $stmt->execute();
}

function deleteComment($id)
{
    $stmt = ConnDB()->prepare('DELETE FROM comments WHERE id = :id OR comment_id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}
