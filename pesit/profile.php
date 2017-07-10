<?php
include("session.php");
?>

<h3 align="center"> Hello <?php echo $login_session; ?></h3> 
<h2 align="center" >Welcome to login system</h2> 
<h3 align="center" ><?php echo $row['telephone']; ?></h3>
<h3 align="center" ><a href="page2.html">Select priorities</a></h3>
<h4 align="center">  click here to <a href="logout.php">LogOut</a> </h4>
