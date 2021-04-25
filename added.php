<?php include('dbconnection.php');
   $name=$_POST['name'];
   $roll=$_POST['roll'];
   $depertment=$_POST['department'];
  $query_insert="INSERT INTO `student`(`name`, `roll`, `depertment`) VALUES ('$name','$roll','$depertment')";
  $run=mysqli_query($con,$query_insert);
  if($run==true)
  {
      echo "DATA ADDED SUCCESSFULLY!!!";

  }
  else{
      echo "FAILED TO ADD DATA IN DATABASE!";
  }
  
  
?>
<br>
<br><a href="add.php">add again</a><br>
<br><a href="list.php">show list</a>