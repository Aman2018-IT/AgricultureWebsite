<?php 
session_start();


 include("connection.php");
 include("functions.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

      //save to database
      $user_id = random_num(20);
      $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

      mysqli_query($con, $query);

      header("Location: Login_page.php");
      die;
    }
    else
    {
    
      echo "<br><br><br><br><i><div align='center'><font color=white size='5px'>Please enter some valid information!</font></br></div></i></br></br></br></br>";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/Signin_page.css">
</head>
  
<div class="Signin-box">
  <h2>Sign in</h2>
  <form method="post">
    <div class="user-box">
      <input id="text" type="text" name="user_name">
      <label>Create Username</label>
    </div>
    <div class="user-box">
      <input id="text" type="password" name="password">
      <label>Create Password</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
       <input id="button" type="submit" value="Sign up" style="color: white; background: transparent;border: none;">
    </a>
  </form>
</div>
<p>Already have an account?<a href="Login_page.php" style="color: dodgerblue;text-decoration:none">Log in</a></p>
