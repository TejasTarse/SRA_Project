<?php
include "connection.php";
$id = $_GET['id'];
// echo $id;

$query="SELECT * FROM subjects WHERE id=$id";

$result = mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result))
{
   $name = $row['subject_name']; 
   $code = $row['subject_code'];
   $outof = $row['out_of'];
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
     table
       {
         #background:linear-gradient(90deg,lightyellow,yellow,orange,yellow,lightyellow);

       }
       input 
       {
           border-radius:5px;
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

       </style> 
       <!-- <br> -->

    <div class="main">
    <center><h2>EDIT SUBJECTS INFORMATION</h2>
    <form action="subject_code.php" method="POST">
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
    <div id="border">
    <table #border="#px">
     <tr>
        <td><label for="subject_name">Subject_Code:-</label></td>
        <td><input type="text" name="subject_name" id="subject_name" value="<?php echo $name; ?>" required></td>
     </tr>
     <tr>
        <td><label for="subject_code">Subject_Code:-</label></td>
        <td><input type="text" name="subject_code" id="subject_code" value="<?php echo $code; ?>" required></td>
     </tr>
    <tr>
        <td><label for="out_of">Out_Of:-</label></td>
        <td><input type="text" name="out_of" id="out_of" value="<?php echo $outof; ?>" required></td>
    </tr>
    <td>&nbsp;</td></tr>
    <tr>
    <td colspan="2"><center><button type="submit">UPDATE</button></center></td>
    </tr>
    </table></form></div>
    </center>

    </div>
<br>

    <?php include "footer.php" ?>