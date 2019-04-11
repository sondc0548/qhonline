<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$a = 500;
	$b = 300;
	define("MAX", $a);
	$c = $a*2 + $b*3 + MAX;
	if($c == 5000)
		echo "ABCD";
	else
		echo "BCDA";
?>

</body>
</html>
