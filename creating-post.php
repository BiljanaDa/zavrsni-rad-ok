<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];


    $sql = "INSERT INTO posts (title, body, author, created_at) VALUES (:title, :body, :author, NOW())";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':title', $title, PDO::PARAM_STR);
    $statement->bindParam(':body', $body, PDO::PARAM_STR);
    $statement->bindParam(':author', $author, PDO::PARAM_STR);

    if ($statement->execute()) {
        header('Location: index.php');
        exit;
    } else {
        $error_message = "Something went wrong!";
    }
}