<?php
require_once "config-db.php";
session_start();


if(isset($_SESSION['Email'])){

    if(isset($_POST['btnSubmit'])) {
        $title = mysqli_real_escape_string($conn, $_POST['inputTitle']);
        $author = mysqli_real_escape_string($conn, $_POST['inputAuthor']);
        $body = mysqli_real_escape_string($conn, $_POST['editor1']);
        $publish =mysqli_real_escape_string($conn, $_POST['publish']);
        //$unublish =mysqli_real_escape_string($conn, $_POST['UnPublished']);

        $query = "INSERT INTO posts(title,author,body,publish) values('$title','$author','$body','$publish');";
        if (mysqli_query($conn, $query)) {

            echo "<div class='alert alert-success' role='alert'>Successfully Submitted!"."</div>";
            // header('Refresh: 5; Location:http://localhost/prosonalBlog/admin');
        } else {
            echo "ERROR :" . mysqli_error($conn);
        }
    }



// server information
    $server = [
        'HTTP Host' => $_SERVER['HTTP_HOST'],
        'Server IP'=> $_SERVER['SERVER_ADDR'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'PROTOCOL' => $_SERVER['SERVER_PROTOCOL'],
        'Server ADMIN' => $_SERVER['SERVER_ADMIN'],
    ];
// client information
    $client = [
        'Your System Info' => $_SERVER['HTTP_USER_AGENT'],
        'Your IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT']
    ];

}else{
    header("location:login.php");
}
/*
if(isset($_POST['btnSubmit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['inputTitle']);
    $author = mysqli_real_escape_string($conn, $_POST['inputAuthor']);
    $body = mysqli_real_escape_string($conn, $_POST['editor1']);
    $publish =mysqli_real_escape_string($conn, $_POST['publish']);
    //$unublish =mysqli_real_escape_string($conn, $_POST['UnPublished']);

    $query = "INSERT INTO posts(title,author,body,publish) values('$title','$author','$body','$publish');";
    if (mysqli_query($conn, $query)) {

        echo "<div class='alert alert-success' role='alert'>Successfully Submitted!"."</div>";
        // header('Refresh: 5; Location:http://localhost/prosonalBlog/admin');
    } else {
        echo "ERROR :" . mysqli_error($conn);
    }
}



// server information
$server = [
    'HTTP Host' => $_SERVER['HTTP_HOST'],
    'Server IP'=> $_SERVER['SERVER_ADDR'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'PROTOCOL' => $_SERVER['SERVER_PROTOCOL'],
    'Server ADMIN' => $_SERVER['SERVER_ADMIN'],
];
// client information
$client = [
    'Your System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Your IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT']
];

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Dashboard</a></li>
                <li><a href="pages.php">Pages</a></li>
                <li><a href="posts.php">Posts</a></li>
                <li><a href="members.php">Users</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Welcome, <?php echo $_SESSION['Email'];?></a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Create Content
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a type="button" data-toggle="modal" data-target="#addPost">Add Post</a></li>
                        <li><a href="#">Add Post</a></li>
                        <li><a href="#">Add User</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.php" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Server Information
                    </a>
                    <?php if($server): ?>
                    <ul class="list-group">
                        <?php foreach ($server as $key => $value):?>
                            <li class="list-group-item">
                                <strong><?php echo "$key :"; ?></strong>
                                <?php echo "$value"; ?>
                            </li>
                        <?php endforeach;?>
                        <?php endif ?>
                    </ul>

                </div>

                <div class="list-group">
                    <a href="index.php" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Your Information
                    </a>
                    <?php if($client): ?>
                    <ul class="list-group">
                        <?php foreach ($client as $key => $value):?>
                            <li class="list-group-item">
                                <strong><?php echo "$key :"; ?></strong>
                                <?php echo "$value"; ?>
                            </li>
                        <?php endforeach;?>
                        <?php endif ?>
                    </ul>

                </div>
            </div>

