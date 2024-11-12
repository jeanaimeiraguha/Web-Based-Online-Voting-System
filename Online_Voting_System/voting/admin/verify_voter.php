<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$con=mysqli_connect("localhost","root","","voting");

$vid=$_GET['vid'];

$query="UPDATE register SET verify='yes' where id='$vid'";

$data=mysqli_query($con,$query);

if($data)
{
    echo "<script> history.back() </script>";
}

?>

