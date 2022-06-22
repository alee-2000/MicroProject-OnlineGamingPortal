<?php

$gname= $_POST["gname"];
$np=$_POST["np"];

$con = new mysqli('localhost','root','','db1');
if($con->connect_error)
{
die('Connection Failed :'.$con->connect_error);
}
else
{

$sql="insert into manage values(default,'$gname','$np',default)";
if ($con->query($sql)=== TRUE)
{

header("Location:admin.php");

}
else
{
    echo "Error" .$sql . "<br>" .$con->error;
}
}
?>