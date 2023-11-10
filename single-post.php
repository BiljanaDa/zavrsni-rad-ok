<?php include('db.php') ?>
<?php include('header.php') ?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
        
            <?php
             if(isset($_GET['post_id'])) {
                $sql1 = "SELECT * FROM posts p WHERE p.id = {$_GET['post_id']}";
                $post = getData($sql1, $connection, $fetchAll = false);
                $sql2 = "SELECT * FROM comments c WHERE c.post_id = {$_GET['post_id']}";
                $comments = getData($sql2, $connection, $fetchAll = true);
                ?>
                <?php
            } else {
                echo ('post_id nije prosledjen kroz $_GET');
            }
            ?>
             <div class="blog-post">
                <a href="single-post.php?post_id=<?php echo ($post['id']) ?>">
                    <h2 class="blog-post-title">
                        <?php echo ($post['title']) ?>
                    </h2>
                </a>
                <p class="blog-post-meta">
                    <?php echo ($post['created_at']) ?> <a href="#">
                        <?php echo ($post['author']) ?>
                    </a>
                </p>
                <p>
                    <?= $post['body'] ?>
                </p>
            </div>
            <?php include('comments.php') ?>
        </div>
            <?php include('sidebar.php'); ?>
</main>

<?php include('footer.php') ?>