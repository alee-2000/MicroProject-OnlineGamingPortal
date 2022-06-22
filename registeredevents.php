<?php
	session_start();
	if(!isset($_SESSION["uname"]))
	header("location:loginpage.php");
    $con = mysqli_connect("localhost", "root","", "db1");  
    if($con === false){ 
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
    } 
?>
<html>
    <head>
        <link rel="stylesheet" href="userdetails.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="nav.css?v=<?php echo time();?>">
        <style>
            .sidenav{

        	margin-top:-40px;
            }   
            </style>
    </head>
    <body>
    <div class="sidenav">
			<a href="admin.php">Home</a><br>
			<a href="logindetails.php">Login Details</a><br>
			<a href="manageevents.php">Add Events</a><br>
			<a href="aview.php">View Events</a><br>
			<a href="registeredevents.php">Registrered Events</a><br>
            <a href="#">Scoreboard</a><br>
			<a href="logout.php">Logout</a></div>
    <?php
   
     $sql="SELECT * FROM enroll";
     if($result = $con->query($sql)){ 
        if($result->num_rows > 0){ 
            echo"<table>";
            echo "<tr>";
            echo "<th>Username</th>";
            echo "<th>Event</th>";
            echo "</tr>";
            while($row = $result->fetch_array()){
             echo "<tr>";
            echo "<td>".$row["u_name"]."</td>";
            echo "<td>".$row["reg_event"]."</td>";
            echo "</tr>";
            }
        }
    }

?>
</body>
</html>