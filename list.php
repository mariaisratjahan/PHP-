<?php include('dbconnection.php');
 $query_list="SELECT * FROM `student`";
 $run=mysqli_query($con,$query_list);
?>
 <a href="add.php">add student</a>
 <h1>list of students</h1>
 <table  border="1" width=100%>
        <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>ROLL NO</th>
                <th>DEPARTMENT</th>
        </thead>
        <tbody style="text_align:center">
               

        
                    <?php while( $data=mysqli_fetch_assoc($run))
                        {
                        
                    
                                echo "<tr>";
                                echo "<td>".$data['id']."</td>";
                                echo "<td>".$data['name']."</td>";
                                echo "<td>".$data['roll']."</td>";
                                echo "<td>".$data['depertment']."</td>";
                                echo "<td>"?><a href="update.php? id=<?php echo $data['id'];?>">update</a> 
                                <a href="delete.php? id=<?php echo $data['id'];?>">delete</a><?php
                                echo "</tr>";
                                
                        
                                
                            
                            
                        }
                        ?>
                
        </tbody>
   </table>
 
