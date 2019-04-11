<?php 
	session_start();
	if(isset($_SESSION['user'])){	
		echo "wellcome back, ".$_SESSION['user']." session";		
	}else if(isset($_COOKIE['user'])){
		echo "wellcome back, ".$_COOKIE['user']." cookie";
	}else{
		echo "please login when you visit here ";	
	}	
	echo "<a href='logout.php'> Logout </a>";
?>