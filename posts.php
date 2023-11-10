<?php include("db.php"); ?>

<?php

$sql = "SELECT posts.*, users.id as userID, users.first_name, users.last_name FROM posts inner join users on posts.author = users.id ORDER BY created_at DESC";
$posts = getData($sql, $connection, $fetchAll = true);

foreach ($posts as $post) { ?>

    <div class="blog-post">
        <a href="single-post.php?post_id=<?php echo $post['id'] ?>">
            <h2 class="blog-post-title">
                <?php echo ($post['title']) ?>
            </h2>
        </a>
        <p class="blog-post-meta">
            <?php echo ($post['created_at']) ?> <a href="#">
            <?php echo ($post['first_name'] . ' ' . $post['last_name']) ?>
            </a>
        </p>

        <p>
            <?= $post['body'] ?>
        </p>
    </div>
<?php } ?>