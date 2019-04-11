<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	
	if( $_POST['txtname']== NULL){
		echo "please enter your username <br/>";
	}else{
		$u = $_POST['txtname'];
	}
	if($_POST['txtpass'] == NULL){
		echo 'please enter your pass ';
	}else{
		$p = $_POST['txtpass'];
	}
	if($u && $p){
		if($u=='admin' && $p =='12345'){
			echo 'chào mừng bạn, admin';
		}else{
			echo 'sai thông tin đăng nhập';
		}
	}
?>
</body>
</html>
