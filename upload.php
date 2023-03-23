<?php
include "db.php";
$sem = $_GET['sem'];
$sub = $_GET['sub'];
$f = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];

$ex=explode(".",$f);
$len = count($ex);

if( $ex[$len-1] == "zip")
{
    $q1 = "select * from $sem where sub_code = '$sub'";
    if(mysqli_query($c,$q1))
    {
        $result=mysqli_query($c,$q1);
        $n = mysqli_num_rows($result);
    }
    else
    {
        $n=0;
    }
    if($n == 1)
    {
        $q3 = "update $sem set file = '$f' where sub_code = '$sub'";
        if(mysqli_query($c,$q3))
        {
            move_uploaded_file($tmp,"uploaded_files/".$f);  
            $s = "admin_$sem.php";
            header("Location: $s?sub=$sub");
        } 
    }
    else
    {
        $q2 = "insert into $sem values('$sub','$f')";
        if(mysqli_query($c,$q2))
        {
            move_uploaded_file($tmp,"uploaded_files/".$f);
            $s = "admin_$sem.php";
            header("Location: $s?sub=$sub");
        }
        else
        {
            echo "hii";
        }
    }
}
?>