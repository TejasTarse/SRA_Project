<?php
  include "connection.php";
  $id = $_POST['id'];
  $name = $_POST['subject_name'];
  $outof = $_POST['out_of'];
  $code = $_POST['subject_code'];
  
  if($id=="0")
  {
        $query="INSERT INTO subjects(subject_name,subject_code,out_of)
          VALUES('$name','$code','$outof')";
            // echo $query;
            // exit;
         mysqli_query($con, $query);

 header("Location:subject_list.php?status=insert"); 

  }
else
{
  $query="UPDATE subjects SET subject_name='$name',subject_code='$code',out_of='$outof' WHERE id=$id";
mysqli_query($con, $query);

header("Location:subject_list.php?status=update");
}

?>