<?php 
	session_start();
 	if(isset($_SESSION['user'])){
		echo "Xin chao, ".$_SESSION['user'];
		echo "<a href='vd7_logout.php'> logout </a>" ;
		//header("location:logout.php");
	    //exit();
	}else{
		echo "please login when you visit here ";
	}
?>