<?php

include 'db.php';
$subject = $_GET['sub'];
$sem = $_GET['sem'];
$q1="select * from $sem where sub_code ='$subject'";

$result = mysqli_query($c,$q1);

if(mysqli_num_rows($result)== 1)
{
    $r=mysqli_fetch_assoc($result);
    //echo $r["file"];
    $a=$r["file"];
    //echo $a;
    $s= "uploaded_files/$a";
    header("location:$s");
}
else
{
    echo "<h1>Sorry<h1>";
}



?>