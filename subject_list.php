<?php   

include "header.php";
    
?>
<style>
       
     table,tr,td,th
     {
        border:2px solid brown;
        background:linear-gradient(#e2e2e2,#c9d6ff);
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
     button 
     {
         background:lightgrey;
         border-radius:5px;
     }
     button:hover 
     {
         background:grey;
         border-radius:5px;
     }
    
     
       </style> 
       <!-- <br> -->
<div class="main">
    <center><h2>SUBJECT LIST</h2></center>
    <?php                         
    include "connection.php";
  $query = "SELECT * FROM subjects";
  $result = mysqli_query($con, $query);
  $count=1;
//    echo "<br>";
   echo "<center>";
   echo "<table style=''>";
   echo "<tr>
            <th>SR. NO.</th>
            <th>SUBJECT NAME</th>
            <th>SUBJECT CODE</th>
            <th>OUT OF</th> 
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
      echo $row['subject_name'];
      echo "</td>";

      echo "<td>";
      echo $row['subject_code'];
      echo "</td>";


      echo "<td>";
      echo $row['out_of'];
      echo "</td>";

      echo "<td>";  ?>

      <center><a href="edit_subject.php?id=<?php echo $row['id'];?>">
            <button type="#" id="B">EDIT</button></a>
             </center>
     <?php  echo "</td>";

      echo "<td>";  ?>
      <center><a href="delete_subject.php?id=<?php echo $row['id'];?>"
             onclick= "return confirm('you want delete ?')"><button type="#" id=B>DELETE</button></a>
             </center>
     <?php  echo "</td>";


    echo "</tr>";
}
echo "</table>";
echo "</center>"
?>
</div>
<?php include "footer.php" ?>