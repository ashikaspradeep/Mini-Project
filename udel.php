<?php
include 'db_connection.php';
$id=$_GET['id'];
$sql=mysqli_query($connection,"delete from user_reg where id='$id'");
$sq=mysqli_query($connection,"delete from login where uid='$id'");
echo "<script>alert('Deleted');window.location='viewwusers.php';</script>";
?>