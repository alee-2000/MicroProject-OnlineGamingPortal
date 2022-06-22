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
    </head>
    <body>
    <div class="sidenav">
			<a href="user.php">Home</a><br>
			<a href="uview.php">View Events</a><br>
			<a href="enrollevents.php">Enroll Events</a><br>
			<a href="uregisteredevents.php">Registered</a><br>
			<a href="contact.php">Contact Us</a><br>
			<a href="logout.php">Logout</a></div>
		<div class ="footer">
			<p>onlinegames.com</p>
		</div>
    <?php
     $uname=$_SESSION["uname"];
    
     $sql="SELECT reg_event FROM enroll where u_name='$uname'";
     if($result = $con->query($sql)){ 
        if($result->num_rows > 0){ 
            echo "<h3>My Events:<h3>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Registered Events:</th>";
            echo "</tr>";
            while($row = $result->fetch_array()){
             echo "<tr>";
            echo "<td>".$row["reg_event"]."</td>";
            echo "</tr>";
            }
        }
    }
    
?>
</body>
</html>