<?php

$con = mysqli_connect("localhost", "root", "","db1"); 
if($con === false){ 
die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 
echo "Connect Successfully. Host info: " . mysqli_get_host_info($con);

//Loginpage info
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email1"];
$uname=$_POST["uname"];
$pass=$_POST["pwd"];
$cpass=$_POST["cpwd"];
$sql= "INSERT into user values(default,'$fname', '$lname', '$email', '$uname', '$pass', '$cpass')";
if($con->query($sql) === true){ 
    echo "inserted successfully. "; 
    header("Location:loginpage.php");
    exit();
}
else
    {echo "Insertion Failed. Host info: ". $con->error;}
?>