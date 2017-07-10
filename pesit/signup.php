<?php
session_start();
include('db.php');
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confpass'];
$result  =  mysql_query("SELECT  *  FROM users  WHERE  email='$email'");
$num_rows  =  mysql_num_rows($result);
$failed  = "User Registration failed";
if  ($num_rows)  {
	echo "<script type='text/javascript'>alert('$failed');</script>";
	header("location:  index.php?remarks=failed");
}
elseif ($password != $confirm) {
	echo "<script type='text/javascript'>alert('$failed');</script>";
	header("location:  index.php?remarks=failed");
}
else
{
$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$telephone=$_POST['telephone'];
mysql_query("INSERT  INTO  users( f_name,  l_name, password, telephone, email)VALUES('$fname',  '$lname',  '$password',  '$telephone',  '$email')");
$message = "User Registered successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
header("location:  index.php");
}
?>