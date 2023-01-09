<?php   

include "header.php";
    
?>
<style>
       
     table,tr,td,th
     {
        border:2px solid brown;
        background:linear-gradient(60deg,#c9d6ff,#e2e2e2,#c9d6ff);
        font-family:comic sans ms;
     }
     td,tr,th

     {
        padding:5px;
        color:darkred;
     }
     th 
     {
         padding:7px;
         color:darkgreen;
     }
     #B
     {
         background:lightgrey;
         border-radius:5px;
     }
     #B:hover 
     {
         background:grey;
         border-radius:5px;
     }
    
     
       </style> 
       <!-- <br> -->
<div class="main">
    <center><h2>STUDENTS LIST</h2></center>
    <?php                         
    include "connection.php";
  $query = "SELECT *, (SELECT COUNT(*) FROM marks WHERE marks.stud_id = students.id) AS subcount  FROM students";
  $result = mysqli_query($con, $query);
  $count=1;
//    echo "<br>";
   echo "<center>";
   echo "<table style=font-family:comic sans ms; border-radius:5px;'>";
   echo "<tr>
            <th>SR. NO.</th>
            <th>NAME</th>
            <th>ROLL NO.</th>
            <th>MOBILE NO.</th>
            <th>E-MAIL</th>
            <th>ADDRESS</th>
            <th>CLASS</th>
            <th>MARK</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>";
  while($row = mysqli_fetch_assoc($result))
  {
      echo "<tr>";

      echo "<td>";
      echo $count++;
      echo "</td>";

      echo "<td>";
      echo $row['name'];
      echo "</td>";

      echo "<td>";
      echo $row['roll_no'];
      echo "</td>";


      echo "<td>";
      echo $row['mobile_no'];
      echo "</td>";


      echo "<td>";
      echo $row['email'];
      echo "</td>";


      echo "<td>";
      echo $row['address'];
      echo "</td>";

      echo "<td>";
      echo $row['class'];
      echo "</td>";

      echo "<td>";  ?>
      <center><a href="mark_student.php?id=<?php echo $row['id'];?>" >
            <button id="B" type="#" style="color:<?php echo $row['subcount']>0 ? 'red' : 'green';?>">MARK</button></a>
             </center>
     <?php  echo "</td>";

      ?>

<?php echo "<td>";  ?>
      <center><a href="edit_student.php?id=<?php echo $row['id'];?>">
            <button id="B" type="#">EDIT</button></a>
             </center>
     <?php  echo "</td>";

      echo "<td>";  ?>
      <center><a href="delete_student.php?id=<?php echo $row['id'];?>"
             onclick= "return confirm('you want delete ?')"><button id="B" type="#">DELETE</button></a>
             </center>
     <?php  echo "</td>";


    echo "</tr>";
}
echo "</table>";
echo "</center>"
?>
</div>
<?php include "footer.php" ?>