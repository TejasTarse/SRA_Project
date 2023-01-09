<?php
session_start();

if(!isset($_SESSION['user']))
{
   header("Location:index.php");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    #header
     {
        background:linear-gradient(100deg,#a1ffce,#e1f5c4,#b0dab9);
        border:3px solid #b20a2c;
        padding:5px;
        box-shadow:5px 5px 3px 3px grey;
     }  
   #header:hover 
     {
        background:linear-gradient(66deg,#e2e2e2,#a1ffce,#e2e2e2);
        box-shadow:0px 5px 3px 2px black;
     }
     li
     {
        /* display:inline;
        padding:19px; */
     }  
     
     .footer 
     {
        min-height:70px;
        border:2px solid black;
        background:linear-gradient(80deg,#c6ffdd,#fbd786,#e1f5c4);
        color:blue;
        font-size:20px;
     }
     #cen 
     {
        margin:20px;
     }
     .main 
     {
        background:linear-gradient(to bottom,#f3f9a7,#e2e2e2,#faffd1);
        
         border:2px solid red;
         min-height:380px;
     }
     .hometable 
     {
        padding:10px;
        color:white;
     }
     .hometable span 
     {
        padding:10px;
        border:2px solid black;
        margin:10px;
        border-radius:10px;
     }
     #A 
     {
        font-size:20px;
        /* padding-left:15px; */
        margin-left:20px;
        border-top-left-radius:7px;
        border-bottom-right-radius:9px;
        background:#9bc5c3;
     }
     #A:hover 
     {
      
      box-shadow:2px 2px 5px 2px black;
      background:linear-gradient(110deg,#9bc5c3,#616161);
     }
     nav 
     {
        /* padding-left:15px; */
     }
     button a 
     {
        text-decoration:none;
        color:black;
     }
     button a:hover 
     {
      color:white;
     }
     input:hover 
     {
      box-shadow:1px 2px 2px 2px black;

     }
    </style>
</head>
<body>
    <div id="header">
    <center><h1>STUDENT</h1>
    <nav>
    <ul>
        <button id="A"><a href="home.php" style="<?php echo $_SERVER['REQUEST_URI'] == 
            "/SRA_Project/home.php" ? 'color:red;' : '';?>" >Home</a> </button>
        <button id="A"><a href="add_student.php"  style="<?php echo $_SERVER['REQUEST_URI'] == 
            "/SRA_Project/add_student.php" ? 'color:red;' : '';?>" >Add Student</a> </button>
        <button id="A"><a href="student_list.php" style="<?php echo $_SERVER['REQUEST_URI'] ==
            "/SRA_Project/student_list.php" ? 'color:red;' : '';?>" >Students List</a> </button>
        <button id="A"><a href="add_subject.php" style="<?php echo $_SERVER['REQUEST_URI'] ==
             "/SRA_Project/add_subject.php" ? 'color:red;' : '';?>" >Add Subject</a> </button>
        <button id="A"><a href="subject_list.php" style="<?php echo $_SERVER['REQUEST_URI'] == 
            "/SRA_Project/subject_list.php" ? 'color:red;':'';?>" >Subject List</a> </button>
        <button id="A"><a href="logout.php" onclick="return confirm('Are you sure ?')">Log Out</a> </button><br>
    </ul>
    </nav>
    </center>
    </div>
</div>

    