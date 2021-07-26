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

      //read from database
      $query = "select * from users where user_name = '$user_name' limit 1";
      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {

          $user_data = mysqli_fetch_assoc($result);
          
          if($user_data['password'] === $password)
          {

            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: index.php");
            die;
          }
        }
      }
      
      echo "<br><br><br><br><i><div align='center'><font color=white size='5px'>wrong username or password!</font></div></i></br></br></br></br>";
    }else
    {
      echo "<div align='center'><font color=white size='5px'>wrong username or password!</font></div>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/Login_page.css">
  <title>Agrihub.com</title>
</head>
<div style="color:white;font-size: 50px;position: absolute;top:70px;left:630px;">Agrihub.com</div>
<div class="login-box">
  <h2>Login</h2>
  <form method="post">
    <div class="user-box">
      <input id="text" type="text" name="user_name" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input id="text" type="password" name="password" required="">
      <label>Password</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input id="button" type="submit" value="Login" style="color: white; background: transparent;border: none;">
    </a>
  </form>
</div>
<p>Don't have an account?<a href="Signin_page.php" style="color: dodgerblue;text-decoration:none">Sign in</a></p>

<footer style="font-size: 20px;text-align: center;position: absolute;left: 150px;top: 670px;">
       
</footer>
</html>

