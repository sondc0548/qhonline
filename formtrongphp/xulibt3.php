<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	if($_POST['txtso'] == NULL ){
		echo "Please enter ur number ";
	}else{
		$n = $_POST['txtso'];
		if($n % 2 == 0){
			echo "So $n la so chan </br>";
		}else{		
			echo "So $n la so le </br>";
		}
		$snt = 1;
		for($i=2;$i < $n; $i++){
			if($n % $i == 0){
				$snt = 2;
				break;
			}
		}
		if($snt == 1){
			echo "$n la so nguyen to </br>";
		}else{
		    echo "$n khong la so nguyen to </br>";
		}
		$tong = 1;
		for($i=1; $i<=$n; $i++){
			$tong = $tong * $i;
		}
		echo "Giai thua cua $n la $tong";
	}

?>
</body>
</html>
