<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('../config-db.php');
session_start();


// check if there's a sesstion already


if(isset($_SESSION['username'])){



    header("Location:index.php");

}
else{

        // If form submitted, insert values into the database.
        if (isset($_POST['username'])){
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($conn,$username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($conn,$password);
            //Checking is user existing in the database or not
            $query = "SELECT * FROM `users` WHERE username='$username'
              and password='".md5($password)."' AND is_admin = 1";
            $result = mysqli_query($conn,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==1){
                $_SESSION['username'] = $username;
                // Redirect user to index.php
                header("Location: index.php");
            }else{
                echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>";
            }
        }else{
            ?>
            <div class="form">
                <h1>Log In</h1>
                <form action="" method="post" name="login">
                    <input type="text" name="username" placeholder="Username" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <input name="submit" type="submit" value="Login" />
                </form>
                <p>Not registered yet? <a href='register.php'>Register Here</a></p>
            </div>
        <?php } ?>
        </body>
        </html>

<?php } ?>