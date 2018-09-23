<?php
session_start();
$errors = array();



if(isset($_GET['delete'])){

    require "config-db.php";
    $delete = $_GET['delete'];
    $sql = "DELETE FROM posts WHERE id =".$delete;
    if(mysqli_query($conn,$sql)){
        array_push($errors,"Submitted!");
        header("location:posts.php");
    }else{
        die(mysqli_error());

    }
}else{



}

