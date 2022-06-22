
<?php
	session_start();
	if(!isset($_SESSION["uname"]))
	header("location:loginpage.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Events</title>
  <link rel="stylesheet" href="nav.css?v=<?php echo time();?>">
  <style>


body {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  background-image:url('game7.jpg');
  background-color: #e4b38b;
  font-family: "lato", sans-serif;
}

.signupFrm {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}


.form {
  background-color: white;
  width: 400px;
  border-radius: 8px;
  padding: 20px 40px;
  box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
}

.title {
  /* font-size: 50px;
  margin-bottom: 50px; */
  font-size: 30px;
  margin-top:-55px;
  margin-bottom: 40px;
  text-align:center;
  padding-left:20px;
}

.inputContainer {
  position: relative;
  height: 45px;
  width: 90%;
  margin-bottom: 17px;
}

.input {
  position: absolute;
  top: 0px;
  left: 0px;
  height: 100%;
  width: 100%;
  border: 1px solid #DADCE0;
  border-radius: 7px;
  font-size: 16px;
  padding: 0 20px;
  outline: none;
  background: none;
  z-index: 1;
}
h1{
  color:rgba(139, 3, 3, 0.877);
}


.label {
  position: absolute;
  top: 15px;
  left: 15px;
  padding: 0 4px;
  background-color: white;
  color: #909091;
  font-size: 16px;
  transition: 0.5s;
  z-index: 0;
}

::placeholder {
  color: transparent;
}

.submitBtn {
  display: block;
  margin-left: auto;
  padding: 15px 30px;
  border: none;
  background-color: rgba(139, 3, 3, 0.877);
  color: white;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 30px;
}

.submitBtn:hover {
  background-color: #9867C5;
  transform: translateY(-2px);
}
.input:focus + .label {
  top: -7px;
  left: 3px;
  z-index: 10;
  font-size: 14px;
  font-weight: 600;
  color: purple;
}

.input:not(:placeholder-shown)+ .label {
  top: -7px;
  left: 3px;
  z-index: 10;
  font-size: 14px;
  font-weight: 600;
}

.input:focus {
  border: 2px solid purple;
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
		<div class ="footer">
			<p>onlinegames.com</p>
		</div>
  <div class="signupFrm">
    <div class="wrapper">
    <form action="manage.php" method="post" class="form">
      <h1 class="title">Add Events</h1>

      <div class="inputContainer">
        <input type="text" class="input" name="gname" placeholder="a">
        <label for="" class="label">Name</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" name="np" placeholder="a">
        <label for="" class="label">No of participants allowed</label>
      </div>
      

      <input type="submit" class="submitBtn" value="Add">
    </form>
    </div>
  </div>
</body>
</html>