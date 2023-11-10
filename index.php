<?php include('header.php') ?>
<main role="main" class="container">
  <div class="row">
    <div class="col-sm-8 blog-main">
    <?php include('posts.php') ?>

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>

        <nav class="blog-pagination">
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>
</div>
    <?php include('sidebar.php') ?>
  </div>
</main>
<?php include('footer.php') ?>