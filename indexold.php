<?php
/**
 * Created by PhpStorm.
 * User: Mutlaq
 * Date: 2018-09-02
 * Time: 11:16 AM
 */


require "config-db.php";
session_start();


?>


<!doctype html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
       <title>PHP BLOG</title>
  </head>
  <body>



  <div class="container">
      
      <div class="col-sm">
          <div class="row">

              <img src="assest/logo.png" alt="MyLogo" class="logo">
              
          </div>
      </div>
      
      
      
      <div class="col-md-12 col-sm">

          <?php


          $sql = "SELECT title,body,author,created_at,id,publish FROM posts where publish = 1";
          $result = mysqli_query($conn, $sql);
          ?>
          <div class="container">
          <?php if (mysqli_num_rows($result) > 0): ?>
              <?php   while ($row = mysqli_fetch_assoc($result)): ?>
                        <ul>
                            <li><a href="posts.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a> - By <small><?php echo $row['author'];?></small></li>
                        </ul>
              <?php endwhile;?>
          <?php endif; ?>
          </div>
      </div>
      
      
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<!---->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
<!--<link rel="stylesheet" href="css/style.css">-->