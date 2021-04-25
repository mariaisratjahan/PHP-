<?php
 include('dbconnection.php');
 $id=$_GET['id'];
 $query="SELECT * FROM `student` WHERE id='$id'";
 $run=mysqli_query($con,$query);
 $data=mysqli_fetch_array($run);
?>
<form action="deleted.php" method="post">
        <input type="hidden" name="id" value=<?php echo $data['id'];?>>
        <label for="name">STUDENT NAME:</label>
       <input type="text" id="name" name="name" value=<?php echo $data['name'];?>><br><br>
       <label for="roll">ROLL NO:</label>
       <input type="text" id="roll" name="roll" value=<?php echo $data['roll'];?>><br><br>
       <label for="department">DEPARTMENT</label>
       <input type="text" id="department" name="department" value=<?php echo $data['depertment'];?>><br><br>
       <input type="submit" value="delete">

    </form>
    <a href="list.php">back to list</a>