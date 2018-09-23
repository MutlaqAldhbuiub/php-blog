<?php
/**
 * Created by PhpStorm.
 * User: Mutlaq
 * Date: 2018-09-02
 * Time: 11:22 AM
 */

$localhost = "localhost";
$username = "root";
$password = "1";
$db_name = "first_cms";
$conn = mysqli_connect($localhost,$username,$password,$db_name) or die(mysqli_error());