<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author = $_POST['author'];
    $text = $_POST['text'];
    $post_id = $_POST['post_id'];

    $sql = "INSERT INTO comments (author, text,post_id) VALUES (:author, :text, :post_id)";
    $params = [':author' => $author, ':text' => $text, ':post_id' => $post_id];

    $statement = $connection->prepare($sql);
    $statement->execute($params);

    header('Location: single-post.php?post_id=' . $post_id);
}