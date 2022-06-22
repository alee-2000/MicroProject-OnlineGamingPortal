<html>
    <head>
        <link rel="stylesheet" href="userdetails.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="nav.css?v=<?php echo time();?>">
        <style>
            table{
            font-family:Lato;
         /* border-collapse:collapse; */
            width:40%;
            text-align:center;
            margin-top:-70px;
            border-style: solid;
            border-width:1px;
            margin-left:-85px;
            margin-right: auto;
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
		<div class ="footer">
			<p>onlinegames.com</p>
		</div>
    <?php
     $con = mysqli_connect("localhost", "root","", "db1");  
     if($con === false){ 
     die("ERROR: Could not connect. " . mysqli_connect_error()); 
     } 
     $sql="SELECT * FROM manage";
     if($result = $con->query($sql)){ 
        if($result->num_rows > 0){ 
            echo "<h2>Events<h2>";
            echo"<table>";
            echo "<tr>";
            echo "<th>Game</th>";
            echo "<th>No of Participants</th>";
            echo "</tr>";
            while($row = $result->fetch_array()){
             echo "<tr>";
            echo "<td>".$row["Gname"]."</td>";
            echo "<td>".$row["Participants"]."</td>";
            echo "</tr>";
            }
        }
    }
?>
</body>
</html>