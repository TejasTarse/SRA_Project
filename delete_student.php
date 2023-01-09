<?php
include "connection.php";
$id = $_GET['id'];
// echo $id;
$query="DELETE FROM students WHERE id=$id";
mysqli_query($con, $query);

header ("location:student_list.php?status=delete");
?>