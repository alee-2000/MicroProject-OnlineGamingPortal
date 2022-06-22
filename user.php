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
		    <li><a href="#"><?php echo $_SESSION["uname"];?></a></li>
			<li><a href="user.php">Home</a></li>
			<li><a href="uview.php">View Events</a></li>
			<li><a href="enrollevents.php">Enroll Events</a></li>
            <li><a href="uregisteredevents.php">Registered Events</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li style="text-align=right;"><a href="logout.php">Logout</a></li>
		</ul>
		<h2>Welcome <?php echo $_SESSION["uname"];?></h2>
		<h1>Welcome To The Gaming Den!</h1>
		<h2><marquee width="100%" direction="right">Today's Crazy Specials,Don't Miss Out!</marquee></h2>
		<div class="footer">
		    <p>onlinegames.com</p>
		</div>
	 
	 
	</body>
</html>