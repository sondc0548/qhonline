<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php	
	$p = fopen("count.txt","r"); // mo file count.txt
	$online = fgets($p); // doc file count.txt
	fclose($p);
	$online++; // tang bieen $online len 
	$p = fopen("count.txt","w"); // tiep tuc mo file count.txt sau khi tang len
	fwrite($p,$online);
	fclose($p);
	echo "luot truy cap: $online";
?>
</body>
</html>
