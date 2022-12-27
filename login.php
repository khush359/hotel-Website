<?php include('server.php') ?>
<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="fstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Login</title>
</head> 

<body>
  <div class="main1">

    <p class="sign" align="center">LOGIN</p>
    <h5 align="center">New to Green Evenue? <span class="forgot"><a href="http://localhost/project%20IWT%202021/signup.php">SIGNUP FOR FREE</a></span></h5>
    <form class="form1" action="login.php" method="post">
      
    <?php include('error.php'); ?>
      <input class="un " id="user" type="text" align="center" name="username" required placeholder="Username">
      

      <input class="pass" id="pass" type="password" align="center" placeholder="Password" name="password" required>
     
      <button name="login_user" class="submit" align="center">LOGIN</button>
        <p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
        <p class="forgot" align="center" ><a class="abc" href="index.html"style="color:#8C55AA;">Back</a></p>
       
        <br>
      </form>   
    </div>

</body>

</html>