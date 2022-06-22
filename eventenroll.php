<?php
session_start();
if(!isset($_SESSION["uname"]))
header("location:loginpage.php");

$name=$_SESSION["uname"];
$event=$_POST["eventname"];

$con = new mysqli('localhost','root','','db1');
if($con->connect_error)
{
die('Connection Failed :'.$con->connect_error);
}
else
{
    $flag=0;
    // $par="SELECT Participants FROM manage where Gname='$event'";
    // $inval="SELECT inc_val FROM manage where Gname='$event'";
    // if(($con->query($inval)) <= ($con->query($par))){
    $par="SELECT * FROM manage where Gname='$event' ";
    if($result = $con->query($par)){ 
     if($result->num_rows > 0){ 
        while($row = $result->fetch_array()){
            if($row["inc_val"]<$row["Participants"]){
               $flag=1;
        $sql="insert into enroll values(default,'$name','$event')";
        if ($con->query($sql)=== TRUE)
        {
         $incre="UPDATE manage set inc_val=inc_val+1 where Gname='$event'";
         if ($con->query($incre)=== TRUE)
             {
             header("Location:user.php");
 
            }
         else
             {
             echo "Error" .$sql . "<br>" .$con->error;
             }
            header("Location:user.php");
 
         }
        else
         {
         echo "Error" .$sql . "<br>" .$con->error;
         }
        }
    }
    }
    }
    if($flag===0){
    
     
    //  echo "Team is Full,Register for some other events";
    // header("Location:enrollevents.php");
    echo "<script> alert( 'Team is Full,Register for some other events');</script>";
    }
}
?>
 
  