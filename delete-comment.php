<?php
include 'db.php';

if (isset($_GET['id'])) {
    $commentId = $_GET['id'];
    $post_id = $_GET['post_id'];

    $sql = "DELETE FROM comments WHERE id = :commentId";
    $params = [':commentId' => $commentId];

    $stmt = $connection->prepare($sql);
    $stmt->execute($params);

    header('Location: single-post.php?post_id=' . $post_id);
}