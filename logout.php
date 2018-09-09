<?php
/**
 * Created by PhpStorm.
 * User: Mutlaq
 * Date: 2018-09-01
 * Time: 11:58 AM
 */

session_start();

echo "Thank you Mr.".$_SESSION['username'];
echo "<BR>";
echo "Have a great day!";
session_destroy();
echo "<a href='login.php'>Login!</a>";

