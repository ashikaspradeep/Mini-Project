<?php
include 'db_connection.php';
$n=$_POST['name'];
$a=$_POST['amount'];
$c=$_POST['cardnumber'];
$e=$_POST['expiry'];
$bid=$_POST['bid'];
$q=mysqli_query($connection,"insert into payment (cust_name,amount,card_no,exp_date,bid)values('$n','$a','$c','$e','$bid')");
$s=mysqli_query($connection,"update bookinG_det set pstatus='Paid' where id='$bid'");
echo "<script>alert('successfully updated');window.location='userhome.php';</script>";
?>