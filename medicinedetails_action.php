<?php
include 'db_connection.php';
session_start();
$val=$_SESSION['uid'];
if(isset($_POST['submit']))
{
    $name=$_FILES['file']['name'];
    $tmpname=$_FILES['file']['tmp_name'];
    if(isset($name))
    {
        if(!empty($name))
        {
            $location='uploads/';
            echo"file is".$name;
            if(move_uploaded_file($tmpname,$location.$name))
            {
$n=$_POST['name'];
$q=$_POST['quantity'];
$p=$_POST['price'];
$m=$_POST['mdate'];
$e=$_POST['expirydate'];
$d=$_POST['description'];
$l=mysqli_query($connection,"insert into medicine_det (medicine_name,quantity,price,manu_date,expiry_date,description,image)values('$n','$q','$p','$m','$e','$d','$name')");
echo "<script>alert('successfully added');window.location='medicinedetails.php';</script>";
            }
        }
    }
}
?>