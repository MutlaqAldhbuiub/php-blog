<?php

require "../config-db.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mutlaq Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

  <?php include "nav.php";?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            <?php


            $sql = "SELECT title,body,author,created_at,id,publish FROM posts where publish = 1 GROUP BY id DESC";
            $result = mysqli_query($conn, $sql);
            ?>

            <?php if (mysqli_num_rows($result) > 0): ?>
            <?php   while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="post-preview">
            <a href="posts.php?id=<?php echo $row['id'];?>">
              <h2 class="post-title">
                <?php echo $row['title'];?>
              </h2>
              <h3 class="post-subtitle">
                  <?php echo substr($row['body'],0,'150');?>
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="members.php?id="><?php echo $row['author'];?></a>
              on <?php echo $row['created_at'];?></p>
              <div class="clearfix">
                  <a class="btn btn-primary float-right" href="posts.php?id=<?php echo $row['id'];?>">Read More &rarr;</a>
              </div>
          </div>
                <?php endwhile;?>
            <?php endif; ?>




          <!-- Pager -->
<!--          <div class="clearfix">-->
<!--            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

    <hr>
    <?php include "footer.php";?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
