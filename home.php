<?php include "header.php";
include "connection.php";

$query="SELECT count(*) as stud_count FROM students";
$result1 = mysqli_query($con,$query);
$data1 = mysqli_fetch_assoc($result1);

$query="SELECT count(*) as sub_count FROM subjects";
$result2 = mysqli_query($con,$query);
$data2 = mysqli_fetch_assoc($result2);

?>
       <style>
       .main
     {
        
     }
     span 
     {
       color:black;
     }
       
       </style> 
       <div class="main">
<center><h3>WELCOME TO STUDENTS RESULT ANALYSIS</h3></center>
<p>
<!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam tempora
 necessitatibus dolore nam sint ab beatae. Alias mollitia labore et? -->
</p>
<table #border="#" class="hometable">
<tr>
<td> <span>total students-<?php echo $data1['stud_count']; ?></span> </td>
<td><span>total-subjects-<?php echo $data2['sub_count']; ?></span></td>
<td></td>
</tr>
</table>    
    
</div>

  <!-- <br> -->
    <?php include "footer.php" ?>