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
         #border:5px solid red;

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
    <center><h2>EDIT STUDENTS INFORMATION</h2>
    <form action="student_code.php" method="POST">
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
    <div id="border">
    <table #border="#px">
     <tr>
        <td><label for="name">Name:-</label></td>
        <td><input type="text" name="name" id="name" value="<?php echo $name; ?>" required></td>
     </tr>
     <tr>
        <td><label for="roll_no">Roll No:-</label></td>
        <td><input type="text" name="roll_no" id="roll_no" value="<?php echo $roll_no; ?>" required></td>
     </tr>
    <tr>
        <td><label for="mobile_no">Mobile_No:-</label></td>
        <td><input type="text" name="mobile_no" id="mobile_no" value="<?php echo $mobile_no; ?>" required></td>
    </tr>
    <tr>
        <td><label for="email">E-mail:-</label></td>
        <td><input type="email" name="email" id="email" value="<?php echo $email; ?>" required></td>
    </tr>
    <tr>
        <td><label for="address">Address:-</label></td>
        <td><input type="text" name="address" id="address" value="<?php echo $address; ?>" required></td>
    </tr>
    <tr>
        <td><label for="class">Class:-</label></td>
        <td><input type="text" name="class" id="class" value="<?php echo $class; ?>" required></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
    <td colspan="2"><center><button type="submit">UPDATE</button></center></td>
    </tr>
    </table></form></div>
    </center>
    <br>
    </div>


    <?php include "footer.php" ?>