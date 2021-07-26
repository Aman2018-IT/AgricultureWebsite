  <?php
     session_start();
     include("config.php");
     include("connection.php");
     include("functions.php");
 ?>

 <?php
     //fetching the id from 'users' database and inserting it into 'crop management database'
     $userid = $_SESSION['user_id'];
     $query1 = mysqli_query($mysqli,"select * from users where user_id = '$userid'");
     $row=mysqli_fetch_array($query1);
     $id=$row['id'];

     //Inserting values
     if(isset($_POST["submit"]))
     {

      $Enter_crop_name=$_POST['Enter_crop_name'];
      $Date_of_production=$_POST['Date_of_production'];
      $Production_Amount=$_POST['Production_Amount'];
      $Total_Production_till_date=$_POST['Total_Production_till_date'];

      $result = mysqli_query($mysqli,"INSERT into crop_management(id,Enter_crop_name,Date_of_production,Production_Amount,Total_Production_till_date,userid) values('','$Enter_crop_name','$Date_of_production','$Production_Amount','$Total_Production_till_date','$id')");

      if($result)
      {
          header("location:crop_management.php");
      }
        else
        {
          echo "<br><br><br><br><br><br><br><br><br><br><i><div align='center'><font color=white size='5px'>Failed to insert!</font></div></i></br></br></br></br></br></br></br></br></br></br>";
        }
     }
  ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="css/crop_management.css">
   <title>Agrihub.com</title>
</head>
<body>

	<h1><p style='text-align: center;color: white;font-size: 50px;'>Crop Management System</p></h1>
  <button onclick="window.location.href='index.php'" style = "position:absolute; left:20px; top:68px;font-size: 20px; color: white; background-color:rgba(0, 0, 0, 0.4);border-radius: 30px;padding: 10px;">Home</button>
     <form method="POST">
      <div class="user-box">

           <label>Enter crop name:</label><input type="text" name="Enter_crop_name" style="color: white; background: rgba(0,0,0,.5);border: none;"><br><br>

           <label>Date of production:</label><input type="date" name="Date_of_production" style="color: white; background: rgba(0,0,0,.5);border: none "><br><br>

           <label>Production Amount:</label><input type="text" name="Production_Amount"style="color: white; background: rgba(0,0,0,.5);border: none;"><br><br>

           <label>Total Production till date:</label><br><input type="text" name="Total_Production_till_date"style="color: white; background: rgba(0,0,0,.5);border: none;"><br><br>

           <input type="submit" name="submit" style="color: white; background: rgba(0,0,0,.9);border: antiquewhite;font-size: 15px;border-radius: 10px;">
      </div>
     </form>

<div>
<table>
  <tr>
    <th>Crop Name</th>;
    <th>Date of Production</th>;
    <th>Production Amount</th>;
    <th>Total Production till date</th>;
    <th>Update</th>
    <th>Remove</th>
  </tr>

<?php
//Displaying values
$userid = $_SESSION['user_id'];
$query2 = mysqli_query($mysqli,"select * from users where user_id = '$userid'");
$row1=mysqli_fetch_array($query2);
$id=$row1['id'];
$result=mysqli_query($mysqli,"SELECT * from crop_management where userid= '$id'");
$rowcount=mysqli_num_rows($result);
for($i=1;$i<=$rowcount;$i++)
{
  $res=mysqli_fetch_array($result);

  echo '<tr>';
  echo '<td>'.$res['Enter_crop_name'].'</td>';
  echo '<td>'.$res['Date_of_production'].'</td>';
  echo '<td>'.$res['Production_Amount'].'</td>';
  echo '<td>'.$res['Total_Production_till_date'].'</td>';
  
  echo "<td><div1><a href=\"edit.php?id=$res[id]\"><input type='submit' value = 'update' style='color:white; background-color: transparent'></a></div1></td>";
  echo "<td><a href=\"delete.php?id=$res[id]\" onclick=\"return confirm('Are you sure you want to delete?')\"><input type='submit' value = 'Delete' style='color:white; background-color: transparent'></a></td>";
  echo '</tr>';
}
?> 
</table>   
</div>
</body>
</html>