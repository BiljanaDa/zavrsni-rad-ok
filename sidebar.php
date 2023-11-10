<?php include_once('db.php'); ?>

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Latest posts</h4>
        <ol class="list">
            <?php

            $latestPosts = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 5";
            $latest5 = getData($latestPosts, $connection,true);

            foreach ($latest5 as $post) {
                echo '<p><a href="single-post.php?post_id=' . $post['id'] . '">' . $post['title'] . '</a></p>';
            }
          ?>

        </ol>
    </div>
</aside>