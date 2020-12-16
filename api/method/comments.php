<?php

include_once '../connectDB.php';

function storeComments()
{

    
}

function updateComments()
{

}

function deleteComments($id)
{
    $stmt = ConnDB()->prepare('DELETE FROM comments WHERE id = :id OR comment_id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}



