<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$p = fopen("b.txt",'w');
	$str = "con thùy dơ hơi ăn cám lợn hay cán đít bố \r\n con thùy dơ hơi đáng ghét láo chó  \r\n đáng ăn đòn";
	fwrite($p,$str);
	echo "Ghi file thanh công";
	fclose($p);

?>
</body>
</html>
