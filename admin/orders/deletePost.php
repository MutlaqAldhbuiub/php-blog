<?php require "../../config-db.php";

/**
 * Created by PhpStorm.
 * User: Mutlaq
 * Date: 2018-09-02
 * Time: 4:58 PM
 */





if(isset($_POST['submit'])) {
    $types = $_POST['select'];
    $input = $_POST['input'];
    $sql = "delete from posts where $types = '$input' ";


    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Done!');</script>";
        mysqli_close($conn);
    }
}
else{
    echo "Choice you're order";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete!</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <select name="select">

    </select>
    <input type="text" name="input">
    <input type="submit" name="submit">
</form>


</body>
</html>
