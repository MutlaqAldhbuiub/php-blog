<?php
require('../../config-db.php');

session_start();
if(isset($_POST['submit'])) {

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $publish =mysqli_real_escape_string($conn, $_POST['publish']);
    //$unublish =mysqli_real_escape_string($conn, $_POST['UnPublished']);


    $query = "INSERT INTO posts(title,author,body,publish) values('$title','$author','$body','$publish');";
    if (mysqli_query($conn, $query)) {

        echo "<div class='alert alert-success' role='alert'>Successfully Submitted!"."</div>";
        header('Refresh: 5; Location:http://localhost/prosonalBlog/admin');
    } else {
        echo "ERROR :" . mysqli_error($conn);
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>make a connection and fetching the result!</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({selector: 'textarea'});</script>


</head>
<body>
<?php include "../pages/navbar.php" ?>
<div class="container">
    <?php


    ?>
    <h1>Add Post</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <BR>
        <!--            // the Title input-->
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <!--            // the author input-->
        <div class="form-group">
            <input type="text" name="author" class="form-control" placeholder="Author">
        </div>
        <!--            // the body('Content') input-->
        <div class="form-group">
            <textarea name="body" id="editor" class="form-control" placeholder="Type here"></textarea>
        </div>
        <div class="form-group">
            <label>Status :</label>
            <select name="publish">
                <option value="<?php echo true;?>">Publish</option>
                <option value="<?php echo false;?>">UnPublish</option>
            </select>
        </div>
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">



    </form>

</div>

</body>
</html>