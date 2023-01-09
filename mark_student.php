<?php
include "connection.php";
$id = $_GET['id'];
// echo $id;

$query="SELECT * FROM students WHERE id=$id";

$result = mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result)){
   $name = $row['name']; 
   $roll_no = $row['roll_no'];
   $mobile_no = $row['mobile_no'];
   $email = $row['email'];
   $address = $row['address'];
   $class = $row['class'];
}

?>
<?php 
include "header.php"; 

?>
<style>
       .main
     {
         min-height:380px;
         border:5px solid red;

     }
     #border 
     {
         min-height:100px;
         width:330px;
         border:2px solid red;
         padding:10px;
         background:linear-gradient(60deg,lightblue,orange);
         border-radius:10px;
     }
     .table_mark
       {
         #background:linear-gradient(90deg,lightyellow,yellow,orange,yellow,lightyellow);
         width:79%;
         text-align:;
         font-size:22px;
       }
       input 
       {
           border-radius:5px;
           width:90px;
           height:23px;
       }
       td
       {
           padding:3px;
       }
       label 
       {
           width:150px;
           font-size:24px;
       }
       button 
       {
           font-size:27px;
           border-radius:5px;
       }
       button:hover 
       {
           background:grey;
       } 
       table,tr,td,th
     {
        border:2px solid brown;
        background:linear-gradient(360deg,#cc95c0,#dbd4b4,#7aa1d2);
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
    <center>
    <h2>EDIT STUDENTS INFORMATION</h2>

<table #border="1" class="table_mark">
<tr>
<td>NAME:-<?php echo $name; ?></td>&nbsp;
<td>ROLL NO:-<?php echo $roll_no; ?></td>&nbsp;
<td>MOBILE NO:-<?php echo $mobile_no;?></td>&nbsp;
</tr>
<tr>
<td>E-mail:-<?php echo $email; ?></td>&nbsp;
<td>ADDRESS:-<?php echo $address; ?></td>&nbsp;
<td>CLASS:-<?php echo $class;?></td>&nbsp;
</tr>
</table>
<h2>enter mark for <?php echo $name; ?></h2>
<form action="mark_students_code.php" method="POST">
<input type="hidden" name="stud_id" id="stud_id" value="<?php echo $id; ?>">
<?php                         
    include "connection.php";
  $query = "SELECT subjects.id As sid, subjects.subject_name, subjects.subject_code, subjects.out_of, marks.mark
  FROM subjects LEFT OUTER JOIN marks ON subjects.id=marks.sub_id AND stud_id='$id'";
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
            <th>MARK</th>
      </tr>";
  while($row = mysqli_fetch_assoc($result))
  {
      
    echo "<tr>";

      echo "<td>";
      echo $count;
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
     
      echo "<td>";?>
       <input type="hidden" name="sub_id<?php echo $count; ?>" id="sub_id<?php echo $count; ?>" value="<?php echo $row['sid']; ?>">
      <input type="number" name="mark<?php echo $count;?>"  id="mark<?php echo $count;?>" value="<?php echo $row['mark']; ?>" onkeyup="sum()">
      <?php echo "</td>";
   
      echo "</tr>";

      
    $count++;
}

echo "<tr>";
      echo "<td colspan='5'>";?>
      <center> TOTAL = <span id="total" ></span></center>
      <?php echo "</td>";

      echo "<tr>";
echo "</table>";
echo "</center>"
?><br>
 
    <input type="hidden" name="count" id="count" value="<?php echo $count;?>">
    <button type="submit" >SAVE</button></form>

    </center>

    </div>
<br>
<script>
sum();
function sum()
{
   total = 0;
   count = parseInt(document.getElementById("count").value);

   for(i=1;i<count;i++)
   {
       
        mark = parseInt("0" + document.getElementById("mark"+i).value);
        //alert(mark);
       total = total + mark;
   }
  // alert(total); 
   document.getElementById("total").innerHTML = total;
}

</script>

    <?php include "footer.php" ?>