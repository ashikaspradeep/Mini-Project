<?php
include 'db_connection.php';
$n=$_POST['name'];
$m=$_POST['medname'];
$q=$_POST['quantity'];
$a=$_POST['amount'];
$p=$_POST['address'];
$c=$_POST['contact'];
$e=$_POST['email'];
$uid=$_POST['id'];
$mid=$_POST['mid'];
$tamt=$q * $a;
$dt=date('Y-m-d');
$j=mysqli_query($connection,"insert into booking_det (cust_name,med_name,quantity,amount,shipping_address,contact_no,email,uid,mid,tamt,dte,status,pstatus)values('$n','$m','$q','$a','$p','$c','$e','$uid','$mid','$tamt','$dt','Pending','pending')");
echo "<script>alert('successfully added');window.location='userhome.php';</script>";
?>