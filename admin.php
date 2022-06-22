<?php
	session_start();
	if(!isset($_SESSION["uname"]))
	header("location:loginpage.php");
?>
<html>
	<head>
		<link rel="stylesheet" href="admin.css?v=<?php echo time();?>">
		<title>The gaming den</title>
	</head>
	<body>
		<ul>
			<li><a href="admin.php">Home</a></li>
			<li><a href="logindetails.php">Login Details</a></li>
			<li><a href="manageevents.php">Add Events</a></li>
			<li><a href="aview.php">View Events</a></li>
			<li><a href="registeredevents.php">Registered Events</a></li>
			<li><a href="#">Scoreboard</a></li>
			<li style="text-align=right;"><a href="logout.php">Logout</a></li>
		</ul>
		<h1>Welcome To The Gaming Den!</h1>
		<h2><marquee width="100%" direction="right">Toady's Crazy Specials,Don't Miss Out!</marquee></h2>
		<div class="footer">
		    <p>onlinegames.com</p>
		</div>
	 
	 
	</body>
</html>