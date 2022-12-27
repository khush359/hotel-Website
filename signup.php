<?php include("server.php") ?>
<html>
  <head>
    <link rel="stylesheet" href="fstyle.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Ubuntu"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <title>Signup</title>
  </head>

  <body>
    <div class="main1">
      <p class="sign" align="center">SIGNUP</p>
      <h5 align="center"> 
        Already a member? 
        <span class="forgot"><a href="http://localhost/project%20IWT%202021/login.php">LOGIN HERE</a></span>
      </h5>
      <form action="signup.php" method ="POST" class="form1">

      <?php include('error.php'); ?>
        <input class="un" id="user" type="text" name ="username" value="<?php echo $username;  ?>" placeholder="Username" required />
       

        <input class="un" id="email" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email Id" required />
        

        <input class="pass" id="pass" type="password" name ="password_1" placeholder="Password" required/>
       

        <input
          class="un"
          id="cpass"
          type="password"
          required
          name="password_2"
          placeholder="Confirm Password"
        />
        <br />
        

        <br />
        <button name="reg_user" class="submit">SIGNUP</button>
            <p class="forgot" align="center" ><a class="abc" href="index.html"style="color:#8C55AA;">Back</a></p>
        <br><br><br><br>
      </form>
    </div>

  </body>
</html>
