<html>
<head>
    <link rel="stylesheet" href="signup.css?v=<?php echo time();?>">
    <style>
      button {
      color:  rgba(221, 162, 162, 0.877);
      background-color: #d25555;
      border: none;
      font-family: 'Rokkitt', serif;
      font-size: 24px;
      margin-top:15px;
      margin-bottom:15px;;
      width:40%;
      }
    button:hover {
     background-color: #A64141;
     cursor: pointer;
     color: #f4f4f4;
     }
      </style>
</head>
<body>
<div class="container"><br><br>
    <div class="class1">
      <div class="login">
        <h1>Create An Account</h1>
        <form method="POST" action="connection1.php">
          <input type="text" id="fname" name="fname" placeholder="Enter Firstname" required/>
          <input type="text" id="lname" name="lname" placeholder="Enter Lastname" required/>
          <input type="email" id="email1" name="email1" placeholder="Enter your email id" required/>
          <input type="text" id="uname" name="uname" placeholder="Enter username" required/>
          <input type="password" id="password" name="pwd" placeholder="Enter Password" required/>
          <input type="password" id="cpassword" name="cpwd" placeholder="Confirm Password" required/><br><br>
          <button type="submit" value="submit" onclick="return f1()">Sign Up</button><br>
</form>
<script>
  function f1() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("cpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
  </script>
          <a href="loginpage.php">I already have an account</a><br><br><br>
      </div>
    </div>
</div>
</body>
  </html>