<?php
   $con = mysqli_connect("localhost", "root","", "db1");  
   if($con === false){ 
   die("ERROR: Could not connect. " . mysqli_connect_error()); 
   } 
   echo "Connect Successfully. Host info: " . mysqli_get_host_info($con);  
//    $sql = "CREATE DATABASE db1"; 
//    if($con->query($sql) === true){ 
//     echo "Database created successfully"; 
//     } 
//    else{ 
//     echo "ERROR: Could not able to execute $sql. " . $con->error; 
//     }
    // $sql="CREATE TABLE administrator(username varchar(20),password varchar(20))";
    // if($con->query($sql) === true){ 
    // echo "Table created successfully"; 
    // } 
    // else{ 
    // echo "ERROR: Could not able to execute $sql. " . $con->error; 
    // }
    
//     $sql = "INSERT INTO administrator VALUES ('admin01', 'admin001')"; 
    
//    if($con->query($sql) === true){ 
//     echo "Records inserted successfully"; 
//     } 
//    else{ 
//     echo "ERROR: Could not able to execute $sql. " . $con->error; 
//     }
session_start();
$_SESSION["uname"] = $_POST["uname"];
$_SESSION["pass"] = $_POST["pwd"];
$flag=0;
$sql = "SELECT * FROM administrator";

if($result = $con->query($sql)){ 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_array()){ 
            if($_SESSION["uname"] == $row['username'] and $_SESSION["pass"] == $row['password'])
            {
                header("Location:admin.php");
                exit();
                $flag=1;
            }    
            else{
            $sql = "SELECT * FROM user";

                if($result = $con->query($sql)){ 
                     if($result->num_rows > 0){ 
                        while($row = $result->fetch_array()){
                            // echo "hello"; 
                            if($_SESSION["uname"] == $row['username'] and $_SESSION["pass"] == $row['password'])
                            {
                             header("Location:user.php");
                             exit();
                             $flag=1;
                            }    
                        
                        }
                    }
                }    
            }      
        }
    }
}
if($flag=== 0)
header("Location:error.php");
exit();
?>
