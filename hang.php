<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	
	//define("MAX",500);
//	define("MAX", 1000);
//	echo "gia tri ".MAX ; // Chú ý: Hằng ko thể nội suy trong 1 chuỗi
	
	$a = 500;
	$b = $a + 500;
	define("MAX", $b);
	echo $a + $b + MAX;
	
?>
</body>
</html>
