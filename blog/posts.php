<?php require "../config-db.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

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
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Man must explore, and this is exploration at its greatest</h1>
              <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
              <span class="meta">Posted by
                <a href="#">Start Bootstrap</a>
                on August 24, 2018</span>
            </div>
          </div>
        </div>
      </div>
    </header>


    <?php


    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT title,body,author,created_at,id FROM posts WHERE id =".$id;
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        ?>
        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <h2 class="section-heading"><?php echo $row['title']; ?></h2>
                        <p><?php echo $row['body']; ?></p>

                        <!--            <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>-->

                        <!--              -->
                        <p>Author
                            <a href="members.php?id"><?php echo $row['author']; ?></a>. Created
                            At <?php echo $row['created_at']; ?>.</p>
                    </div>
                </div>
            </div>
        </article>
        <!---->
        <?php
    }else{
        echo "<div class=\"container\">";
        echo "<h1>ERROR 404</h1>";
        echo "<hr>";
        echo "<p>contact with :<a href='mailto:Mutlaq@aldhbuiub.org'>Admin Mail</a></p>";
        echo "</div>";
    }
?>



    <hr>
        <?php include "footer.php";?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
