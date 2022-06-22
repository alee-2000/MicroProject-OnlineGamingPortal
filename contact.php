<?php
	session_start();
	if(!isset($_SESSION["uname"]))
	header("location:loginpage.php");
?>

<html>
	<head>
	<link rel="stylesheet" href="nav.css?v=<?php echo time();?>">
		<title>Contact Us | Gaming Den</title>
		<style>
			body{
  			  background-image:url('game7.jpg');
    		  background-repeat:no-repeat;
    		  background-position:left-bottom;
    		  background-size:100% 100%;
   			  margin:0;
 			 }
			</style>
	</head>
	<body>
		<div class="sidenav">
			<a href="user.php">Home</a><br>
			<a href="uview.php">View Events</a><br>
			<a href="enrollevents.php">Enroll Events</a><br>
			<a href="uregisteredevents.php">Registered</a><br>
			<a href="contact.php">Contact Us</a><br>
			<a href="logout.php">Logout</a></div>
            
			<h1><u>Contact Us</u></h1>
			<h2>Phone:9000000001<br>
			Email:gamingden@order.com<br>
			Location:XYZ Building</h2>
		<div class ="footer">
			<p>onlinegames.com</p>
		</div>

	</body>
</html>