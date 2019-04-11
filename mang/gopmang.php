<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
    echo "<br/> Gop mang trong PHP <br/>";
	$a = array("1","2","3","4","a","b","c",);
	$b = array("d","e","f","g");
	$c = array_merge($a,$b);
	foreach($c as $d){
		echo $d."<br/>";
	}
?>
<?php 
	echo "<br/> Tach mang trong PHP <br/>";
	$e = array("4","5","6","7","8","q","w");
	$f = array_slice($e,4,3);
	foreach($f as $v){
		echo $v."<br/>";
	}
?>


</body>
</html>
