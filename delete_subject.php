<?php
include "connection.php";
$id = $_GET['id'];
// echo $id;
$query="DELETE FROM subjects WHERE id=$id";
mysqli_query($con, $query);

header ("location:subject_list.php?status=delete");
?>