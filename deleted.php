<?php
 include('dbconnection.php');
 $id=$_POST['id'];
//  $name=$_POST['name'];
//  $roll=$_POST['roll'];
//  $dept=$_POST['department'];
 $query="DELETE FROM `student` WHERE id='$id'";
 $run=mysqli_query($con,$query);
 if ($run==true)
 {
     echo "data deleted successfully";
 }
?>
<br>
<a href="list.php">back to list</a>