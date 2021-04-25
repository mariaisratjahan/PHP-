 <?php
 include('dbconnection.php');
 $id=$_POST['id'];
 $name=$_POST['name'];
 $roll=$_POST['roll'];
 $dept=$_POST['department'];
 $query="UPDATE `student` SET `name`='$name',`roll`='$roll',`depertment`='$dept' WHERE id='$id'";
 $run=mysqli_query($con,$query);
 if ($run==true)
 {
     echo "data updated successfully";
 }
?>
<br>
<a href="list.php">back to list</a>