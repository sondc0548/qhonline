<?php 
	session_start();
	session_destroy();
	// huy cookie n�u ko tick va`o d�u remmberme
	header("location:vd5_login.php");
	exit();
?>