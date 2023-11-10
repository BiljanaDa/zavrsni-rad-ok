<?php
include 'db.php';

$post_id = $_GET['post_id'];


echo "Post ID to delete: " . $post_id;

$deleteCommentsSql = "DELETE FROM comments WHERE post_id = :post_id";
$commentsStatement = $connection->prepare($deleteCommentsSql);
$commentsStatement->bindParam(':post_id', $post_id, PDO::PARAM_INT);

$sql = "DELETE FROM posts WHERE id = :post_id";
$statement = $connection->prepare($sql);
$statement->bindParam(':post_id', $post_id, PDO::PARAM_INT);

if ($commentsStatement->execute()) {
    if ($statement->execute()) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error deleting the post.";
    }
}
?>
