<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
		if( $_POST['txtname']== NULL){
			echo "please enter your name <br/>";
		}else{
			$n = $_POST['txtname'];
		}
		if($_POST['txtadd'] == NULL){
			echo 'please enter your address </br>';
		}else{
			$a = $_POST['txtadd'];
		}
		if($_POST['txtemail'] == NULL){
			echo "please enter your email <br/>" ;
		}else{
			$m = $_POST['txtemail'] ;
		}
		if($_POST['txtphone'] == NULL){
			echo "please enter your phone <br/>";
		}else{
			$p = $_POST['txtphone'];
		}
		if($_FILES['img']['name'] == NULL){
			echo "Bạn chưa chọn hinh";
		}else{
			move_uploaded_file($_FILES['img']['tmp_name'],"data/".$_FILES['img']['name']);
			$img = $_FILES['img']['name'];
		}
		if($n && $a && $m && $p && $img){
			if($_POST['gender'] == 1){
				$gt = "Male" ;
			}else{
				$gt = "Female" ;
			}
			//$qg = $_POST['country'];
			switch($_POST['country']){
				case "1":
					$qg = "Viet Nam";
				break;	
				case "2":
					$qg = "Laos";
				break;	
				case "3":
					$qg = "Cambodia";
				break;	
				case "4":
					$qg = "Malaysia";
				break;	
			}	
			$no = $_POST['txtnote'];				
			echo "<h3> Ur name: $n</h3>";
			echo "<h3> Ur address: $a</h3>";
			echo "<h3> Ur email: $m </h3>";			
			echo "<h3> Ur phone: $p </h3>";	
			echo "<h3> Ur country: $qg </h3>";			
			echo "<h3> Ur note: $no </h3>";	
			echo "<img src='data/$img' width='200' height='200'>";		
		}			
?>
</body>
</html>
