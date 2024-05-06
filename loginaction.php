<?php
include 'db_connection.php';
$uname=$_POST['name'];
$upass=$_POST['password'];
$sql=mysqli_query($connection,"select * from login where uname='$uname' and upass='$upass'");
$row=mysqli_fetch_array($sql);
session_start();
if($row['utype']=="admin")
{
    $_SESSION['uid']=$row['uid'];
    echo "<script>alert('Welcome Admin');window.location='adminhome.php';</script>";
}
else if($row['utype']=="User")
{
    $_SESSION['uid']=$row['uid'];
    echo "<script>alert('Welcome User');window.location='userhome.php';</script>";
}
else if($row['utype']=="Staff")
{
    echo "<script>alert('Welcome Staff');window.location='staffhome.php';</script>";
}
else
{
    echo "<script>alert('Invalid Username or Password');window.location='login.html';</script>";
}
?>