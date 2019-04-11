<?php 
	session_start();
	if(isset($_SESSION['user'])){	
		echo "wellcome back, ".$_SESSION['user'];
		echo "<a href='logout.php'> Logout </a>";
	}else{
		echo "please login when you visit here ";	
	}	
	
?>