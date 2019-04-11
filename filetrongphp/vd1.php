<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$p = fopen("a.txt",r);
	 //fread($p,filesize("a.txt")); // Đọc hét nhưng ko xuonsg dòng
	while(!feof($p)){
		echo fgets($p)."</br>";
	}
	fclose($p);
?>

</body>
</html>
