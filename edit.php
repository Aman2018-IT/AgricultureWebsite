<?php
 include("config.php");

$id=$_GET['id'];
$result=mysqli_query($mysqli,"SELECT * from crop_management where id=$id");
while($res=mysqli_fetch_array($result)){

 $Enter_crop_name=$res['Enter_crop_name'];
 $Date_of_production=$res['Date_of_production'];
 $Production_Amount=$res['Production_Amount'];
 $Total_Production_till_date=$res['Total_Production_till_date'];
}
?>

<?php

if(isset($_POST['update'])){

      $id=$_POST['id'];
      $Enter_crop_name=$_POST['Enter_crop_name'];
      $Date_of_production=$_POST['Date_of_production'];
      $Production_Amount=$_POST['Production_Amount'];
      $Total_Production_till_date=$_POST['Total_Production_till_date'];

      $result=mysqli_query($mysqli,"UPDATE crop_management SET Enter_crop_name='$Enter_crop_name',Date_of_production='$Date_of_production',Production_Amount='$Production_Amount',Total_Production_till_date='$Total_Production_till_date' where id=$id");

      if($result)
      {
           header("location: crop_management.php");
      }
      else
      {
          echo "Failed to update";
      }

}

?>



<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
      <link rel="stylesheet" href="css/crop_management.css">
</head>
<body>
<form action="" method="POST">
      <div class="user-box">

           <label>Enter crop name:</label><input type="text" name="Enter_crop_name" value="<?php echo $Enter_crop_name; ?>" style="color: white; background: rgba(0,0,0,.5);border: none;"><br><br>

           <label>Date of production:</label><input type="date" name="Date_of_production" value="<?php echo $Date_of_production; ?>" style="color: white; background: rgba(0,0,0,.5);border: none "><br><br>

           <label>Production Amount:</label><input type="text" name="Production_Amount" value="<?php echo $Production_Amount; ?>" style="color: white; background: rgba(0,0,0,.5);border: none;"><br><br>

           <label>Total Production till date:</label><br><input type="text" name="Total_Production_till_date" value="<?php echo $Total_Production_till_date; ?>" style="color: white; background: rgba(0,0,0,.5);border: none;"><br><br>

          <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

           <input type="submit" name="update" value="update" style="color: white; background: rgba(0,0,0,.9);border: antiquewhite;font-size: 20px;border-radius: 10px;">
      </div>
     </form>
</body>
</html>