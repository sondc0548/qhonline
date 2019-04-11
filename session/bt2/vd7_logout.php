<?php 
	session_start();
	session_destroy();
	// huy cookie n๊ดu ko tick va`o dโดu remmberme
	header("location:vd5_login.php");
	exit();
?>