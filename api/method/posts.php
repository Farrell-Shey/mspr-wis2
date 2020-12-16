<?php

function ConnDB()
{
    return new PDO('mysql:host=localhost;dbname=mspr_rs', 'root', '');
}

function GetPosts()
{
    $dbh = connDB();

    $stmt = $dbh->prepare("SELECT posts.post_id, posts.content, posts.created_at, posts.updated_at, COUNT(user_likes.post_id) nb_like,
 users.pseudo, users.thumbnail, COUNT(comments.post_id) nb_comment, comments.id, comments.comment_id, comments.content,
 comments.created_at, comments.updated_at, games.name, games.thumbnail, types.type, COUNT(user_games.game_id) FROM posts 
INNER JOIN games ON posts.game_id = game.id
INNER JOIN game_types ON game.id = game_types.game_id
INNER JOIN types ON game_types.type_id = types.id
INNER JOIN users ON posts.user_id = users.id
INNER JOIN comments ON posts.id = comments.post_id
INNER JOIN user_likes ON posts.id = user_likes.post_id
INNER JOIN user_games ON games.id = user_games.game_id
GROUP BY posts.post_id
ORDER BY posts.created_at ASC");

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}