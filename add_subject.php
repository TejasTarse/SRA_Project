<?php include "header.php" ?>
       <style>
       
       
       </style> 
       
    <div class="main">
    <?php

?>
<style>
       .mains
     {
         min-height:380px;
         #border:5px solid red;

     }
     #border 
     {
         min-height:300px;
         width:400px;
         border:2px solid red;
         padding:10px;
         background:linear-gradient(90deg,#ddd6f3,#faaca8);
         border-radius:10px;
         color:darkred;
     }
     table
       {
         #background:linear-gradient(90deg,lightyellow,yellow,orange,yellow,lightyellow);
         height:260px

       }
       input 
       {
           border-radius:9px;
           height:22px;
       }
       td
       {
           padding:10px;
           border:2px solid black;
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
           font-family:comic sans ms;
           font-size:27px;
           border-radius:5px;
           padding:#px;
           width:110px;

       }
        #B:hover 
       {
           background:grey;
       } 
       
       </style> 
       <!-- <br> -->

    <div class="mains">
    <center><h2>ADD STUDENTS INFORMATION</h2>
    <form action="subject_code.php" method="POST">
    <input type="hidden" name="id" id="id" value="0">
    <div id="border">
    <table #border="1" style="border-radius:10px; #border:2px dashed red;">
    &nbsp;
     <tr>
        <td><label for="subjectname">Subject Name:-</label></td>
        <td><input type="text" name="subject_name" id="subject_name" required></td>
     </tr>
     &nbsp;
     <tr>
        <td><label for="subjectcode">Subject Code:-</label></td>
        <td><input type="text" name="subject_code" id="subject_code" required></td>
     </tr>
     &nbsp;
    <tr>
        <td><label for="outof">Out Of:-</label></td>
        <td><input type="text" name="out_of" id="out_of" required></td>
    </tr>
    <tr>
    <td colspan="2"><center><button type="submit" id="B">ADD</button></center></td>
    </tr>
    </table></form></div>
    </center>

    </div>
<br>


    
    
    </div>
    <?php include "footer.php" ?>