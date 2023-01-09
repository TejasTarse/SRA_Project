<?php
  include "connection.php";
  $id = $_POST['id'];
  $name = $_POST['name'];
  $roll_no = $_POST['roll_no'];
  $mobile_no = $_POST['mobile_no'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $class = $_POST['class'];

  if($id=="0")
  {
        $query="INSERT INTO students(name,roll_no,mobile_no,email,address,class)
          VALUES('$name','$roll_no','$mobile_no','$email','$address','$class')";

         mysqli_query($con, $query);

 header("Location:student_list.php?status=insert"); 

  }
else
{
  $query="UPDATE students SET roll_no='$roll_no', name='$name', mobile_no='$mobile_no', email='$email',
                address='$address',class='$class' WHERE id=$id";
mysqli_query($con, $query);

header("Location:student_list.php?status=update");
}

?>