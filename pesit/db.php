<?php
$mysql_hostname  =  "localhost";
$mysql_user  =  "root";
$mysql_password  =  "";
$mysql_database  =  "webpro";
$conn =  mysql_connect($mysql_hostname,  $mysql_user,  $mysql_password)  or  die("Could  not  connect  database");
$db = mysql_select_db($mysql_database,  $conn)  or  die("Could  not  select  database");
?>