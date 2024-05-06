<?php
include 'db_connection.php';
$id=$_GET['id'];
$sql=mysqli_query($connection,"delete from medicine_det where id='$id'");
echo "<script>alert('Deleted');window.location='medicinedetails.php';</script>";
?>