<?php 
	session_start();
	session_destroy();
	/*if(isset($_COOKIE['user']) && isset($_COOKIE['pass'])){
		setcookie("user", "", time()-(90*24*60*60),"/");
		setcookie("pass", "", time()-(90*24*60*60),"/");
	}*/
	header("location:login.php");
	exit();

?>