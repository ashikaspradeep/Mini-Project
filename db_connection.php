<?php
define('host','localhost');
define('user','root');
define('password','');
define('db','drugmed');
$connection=mysqli_connect(host,user,password,db) or die("unable to connect");
?>