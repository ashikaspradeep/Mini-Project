<?php
include 'db_connection.php';
$id=$_GET['id'];
$sql=mysqli_query($connection,"update booking_det set status='Approved' where id='$id'");
echo "<script>alert('Approved');window.location='viewbooking.php';</script>";
?>