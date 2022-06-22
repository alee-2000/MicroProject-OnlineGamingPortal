<html>
<head>
    <link rel="stylesheet" href="loginpage.css?v=<?php echo time();?>">
    <!-- <style>
      body {
  background-image: url('game7.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
      </style> -->
</head>
<body>
<div class="container"><br><br>
    <div class="class1">
      <div class="login">
        <h1>Sign In</h1>
          <form method="POST" action="connection.php">
          <input type="text" id="uname" name="uname" placeholder="Username" required/>
          <input type="password" id="password" name="pwd" placeholder="Password" required/><br>
         
          <button type="submit" value="submit">Login</button><br></form>
          <a href="signup.php">Sign Up</a><br>
          <a href="forgrtpass.php"></a><br><br><br>

      </div>
    </div>
</div>
</body>
  </html>