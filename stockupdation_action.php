<?php
include 'db_connection.php';
$n=$_POST['name'];
$s=$_POST['stock'];
$id=$_POST['id'];
$q=mysqli_query($connection,"update medicine_det set quantity='$s' where id='$id'");
echo "<script>alert('successfully updated');window.location='viewmedicine.php';</script>";
?>