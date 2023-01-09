<?php 
include "connection.php";

$stud_id = $_POST['stud_id'];
$count = $_POST['count'];
$query="DELETE FROM marks WHERE stud_id='$stud_id'";
mysqli_query($con, $query);

for($i=1;$i<$count;$i++)
{
    $sub_id = $_POST['sub_id'.$i];
    $mark = $_POST['mark'.$i];
    $query= "INSERT INTO marks(stud_id,sub_id,mark) VALUES('$stud_id','$sub_id','$mark')";
    mysqli_query($con, $query);
}

header("Location:student_list.php?status=update");

?>