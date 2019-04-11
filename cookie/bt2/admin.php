<?php 
 	if(isset($_COOKIE['user'])){
		echo "Xin chao, ".$_COOKIE['user'];
		echo "<a href='logout.php'> logout </a>" ;
		//header("location:logout.php");
	    //exit();
	}else{
		echo "please login when you visit here ";
		
	}
?>