<?php
  session_start();

  $username ="";
  $email="";
  $error=Array();

  //connect to the database
  $db= mysqli_connect("localhost","root","","hotel");

  //register user || sign In user
  if(isset($_POST["reg_user"])){
    //receive all input value from the form
    $username= mysqli_real_escape_string($db,$_POST['username']);
    $email= mysqli_real_escape_string($db,$_POST['email']);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

    //form validation: ensure that the form is correctly filled by adding (array_push()) corresponding error onto $error array

    if(empty($username)){
        array_push($error,"username is required"); 
    }
    if (empty($email)){
        array_push($error,"email is required");
    }
    if(empty($password_1)){
        array_push($error,"password is required");
    }
    if(empty($password_2)){
       array_push($error," confirm password is required");
   }
   if($password_1!= $password_2){
       array_push($error,"The 2 password did not match");
   }

   //first check the database to make sure the user does not exist already with the same username and/or email

   $user_check_query= "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
   $result= mysqli_query($db,$user_check_query);
   $user = mysqli_fetch_assoc($result);

   if($user){ // if user exists
          if($user["username"]==$username){
              array_push($error,"Username already exists");
          }
          if($user['email']==$email){
              array_push($error,"email alreay exists");
          }
   } 

   // finally, register user if there are no errors in the form 
   if(count($error)==0){
       $password = md5($password_1);  // encrypt the password before saving in the database
       $query = "INSERT INTO users (username, email, password) 
       VALUES('$username','$email','$password')";
       mysqli_query($db,$query);
       $_SESSION["username"]= $username;
       $_SESSION["success"] = "You are now Logged In";
   }
}



  
 // login user
 if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    if(empty($username)){
        array_push($error,"username is required");
    }
    if(empty($password)){
        array_push($error,"password is required");
    }

    if(count($error)==0){
        $password = md5($password);
        $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db,$query);
        if(mysqli_num_rows($results)=='1'){
            $_SESSION['username']=$username;
            $_SESSION['success']=" You are now logged In";
            header('location: index.php');
        }
        else{
            array_push($error,"Wrong username / password combination");
        }
    }
}
?>