<?php
include('db.php');
session_start();
{
	$username = $_GET['username'];
	//$telephone = $_GET['username'];
	$password = $_GET['pass'];
	print_r($_GET);
	$query = "SELECT id  FROM users  WHERE  email='$username'";
	$result  = mysql_query($query);
	$num_rows  =  mysql_num_rows($result);
	if  ($num_rows == "" || $num_rows == 0)  {
		header("location:  index.php?remarks=failed");
	}
	else
	{
		//session_register("sessionusername");
		$_SESSION['login_username'] = $username;
		echo $result;
		header("location:  profile.php");
	}
}
//