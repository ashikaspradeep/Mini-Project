<?php
include 'db_connection.php';
$n=$_POST['name'];
$c=$_POST['contact'];
$e=$_POST['email'];
$u=$_POST['username'];
$p=$_POST['password'];
$k=mysqli_query($connection,"select * from user_reg where email='$e'");
$r=mysqli_fetch_array($k);
$em=$r['email'];
if($e==$em)
{
    echo "<script>alert('Already Exists');window.location='registration.html';</script>";
}
else
{
$q=mysqli_query($connection,"insert into user_reg (name,contact_no,email)values('$n','$c','$e')");
$sq=mysqli_query($connection,"select max(id) as uid from user_reg");
$rw=mysqli_fetch_array($sq);
$uid=$rw['uid'];
$sql=mysqli_query($connection,"insert into login(uid,uname,upass,utype)values('$uid','$u','$p','User')");
echo "<script>alert('Successfully Registred');window.location='login.html';</script>";
}
?>