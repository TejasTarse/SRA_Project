<?php include "student.php" ?>
<style>
       .main
     {
         min-height:510px;
         #border:5px solid red;

     }
     #border 
     {
         min-height:100px;
         width:430px;
         border:2px solid red;
         padding:10px;
         background:linear-gradient(90deg,#ddd6f3,#faaca8);
         border-radius:10px;
     }
     table
       {
         #background:linear-gradient(90deg,lightyellow,yellow,orange,yellow,lightyellow);

       }
       input 
       {
           border-radius:5px;
           height:25px;
       }
       td
       {
           padding:3px;
       }
       td
       {
           padding:7px;
           border:2px solid #649173;
           border-radius:5px;
       }
       tr 
       {
           border:5px dotted black;
       }
       label 
       {
           width:150px;
           font-size:24px;
       }
       #B 
       {
           font-size:27px;
           border-radius:5px;
       }
       #B:hover 
       {
           background:grey;
       } 

       </style> 
       <!-- <br> -->

    <div class="main">
    <center><h2>ADD STUDENTS INFORMATION</h2>
    <form action="student_code.php" method="POST">
    <input type="hidden" name="id" id="id" value="0">
    <div id="border">
    <table #border="#px">
     <tr>
        <td><label for="name">Name:-</label></td>
        <td><input type="text" name="name" id="name" required></td>
     </tr>
     <tr>
        <td><label for="roll_no">Roll No:-</label></td>
        <td><input type="text" name="roll_no" id="roll_no" required></td>
     </tr>
    <tr>
        <td><label for="mobile_no">Mobile_No:-</label></td>
        <td><input type="text" name="mobile_no" id="mobile_no" required></td>
    </tr>
    <tr>
        <td><label for="email">E-mail:-</label></td>
        <td><input type="email" name="email" id="email" required></td>
    </tr>
    <tr>
        <td><label for="address">Address:-</label></td>
        <td><input type="text" name="address" id="address" required></td>
    </tr>
    <tr>
        <td><label for="class">Class:-</label></td>
        <td><input type="text" name="class" id="class" required></td>
    </tr>
     
    <tr>
    <td colspan="2"><center><button type="submit" id="B">SUBMIT</button></center></td>
    </tr>
    </table></form></div>
    </center>

    </div>
