<?php

include 'db.php';
$user = $_POST['user'];
$password = $_POST['password'];

$q = "select * from admin where name = '$user' and password = '$password'";
$result = mysqli_query($c,$q);


if(mysqli_num_rows($result) == 1)
{
   header("Location: admin_sem.php");
   exit();
}

else
{
    header("Location: login.php?error=Invalid Username or Password");
    exit();
}


?>