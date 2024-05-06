<?php
include 'db_connection.php';
$id=$_GET['id'];
$sql=mysqli_query($connection,"update booking_det set status='Rejected' where id='$id'");
echo "<script>alert('Rejected');window.location='viewbooking.php';</script>";
?>