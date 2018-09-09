<?php
/**
 * Created by PhpStorm.
 * User: Mutlaq
 * Date: 2018-08-29
 * Time: 6:30 AM
 */

require "config-db.php";

session_start();


if(isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

$errors = array();

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password1'];
        $ecPassword = md5($password);

        require ("assest/errors.php");
        if(empty($_POST['username'])){
            array_push($errors,"fill the Username!");
        }
        if(empty($_POST['email'])){
            array_push($errors,"fill the Email!");
        }
        if(empty($password)){
            array_push($errors,"fill the password!");
        }
        if($_POST['password1'] !== $_POST['password2']){
            array_push($errors,"password not much!");
        }
        if(count($errors) == 0){
            $sql = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$ecPassword')";
            mysqli_query($conn,$sql);
        }

    }



?>

<?php include("assest/header.php");?>
<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h3>Register Now!</h3>
        <div class="form-group">
            <?php include("assest/errors.php")?>
            <div>
                <input type="text" name="username" class="form-control" placeholder="username" value="<?php if(isset($username))echo $username ;?>">
                <input type="text" name="email" class="form-control" placeholder="Email" value="<?php if(isset($email))echo $email;?>">
                <input type="password" name="password1" class="form-control" placeholder="Password">
                <input type="password" name="password2" class="form-control" placeholder="Re-Password">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
<?php include("assest/footer.php");?>
