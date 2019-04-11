


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$a = 1;
	while( $a <= 10){
		echo " $a <br/>";
		$a++;
	}

?>

<?php 
	$b = 1;
	do{
		echo " $b <br/>";
		$b++;
	}while($b <= 10)

?>

<?php 
	for($c = 1; $c <= 10; $c++){
		echo "$c <br/>";
	}
?>
</body>
</html>
