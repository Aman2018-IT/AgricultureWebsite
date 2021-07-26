<?php
  include("config.php");

$id=$_GET['id'];
$result=mysqli_query($mysqli,"DELETE from crop_management where id=$id");

 if($result)
      {
           header("location: crop_management.php");
      }
      else
      {
          echo "Failed to delete";
      }
?>s