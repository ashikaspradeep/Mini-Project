<?php
include 'db_connection.php';
$n=$_POST['name'];
$g=$_POST['gender'];
$r=$_POST['regnumber'];
$c=$_POST['contact'];
$e=$_POST['email'];
$u=$_POST['username'];
$ps=$_POST['password'];
$sq=mysqli_query($connection,"select * from staff_det where email='$e'");
$rw=mysqli_fetch_array($sq);
$em=$rw['email'];
if($e==$em)
{
    echo "<script>alert('Already Exists');window.location='staffdetails.php';</script>";
}
else
{
$q=mysqli_query($connection,"insert into staff_det (name,gender,reg_no,contact_no,email)values('$n','$g','$r','$c','$e')");
$sql=mysqli_query($connection,"select max(id) as uid from staff_det");
$row=mysqli_fetch_array($sql);
$uid=$row['uid'];
$st=mysqli_query($connection,"insert into login(uid,uname,upass,utype)values('$uid','$u','$ps','Staff')");
echo "<script>alert('successfully Added');window.location='staffdetails.php';</script>";
}
?>