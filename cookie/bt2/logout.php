<?php 
	setcookie("name","admin",time()-10);
	//echo "<a href = 'login.php'> Login again</a>";
	header("location:login.php");
	exit();
?>