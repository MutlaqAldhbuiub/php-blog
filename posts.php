<?php require "config-db.php";
/**
 * Created by PhpStorm.
 * User: Mutlaq
 * Date: 2018-09-02
 * Time: 4:10 PM
 */
//
//$sql = "SELECT title,body,author,created_at,id FROM posts LIMIT 3";
//$result = mysqli_query($conn, $sql);
//?>
<?php //if (mysqli_num_rows($result) > 0): ?>
<!--  --><?php //  while ($row = mysqli_fetch_assoc($result)): ?>
<!---->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
<!--<link rel="stylesheet" href="css/style.css">-->
<!---->
<!--<div class="container">-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--</div>-->
<!--    --><?php //endwhile;?>
<?php //endif; ?>
<!---->
<!---->




<?php

session_start();
$id = $_GET['id'];
$sql = "SELECT title,body,author,created_at,id FROM posts WHERE id =".$id;
$result = mysqli_query($conn, $sql);

if(isset($_GET['id'])){

    $row = mysqli_fetch_assoc($result);

    echo $row['title']."<BR>";
    echo $row['body']."<BR>";
    echo $row['author'];



}



?>