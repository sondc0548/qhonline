<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	echo "<table>";
	for($i=1; $i<30; $i++){
		echo "<tr>";	
		if( $i % 2 != 0)    // liệt kê các số lẻ trong dãy số từ 0 - 30 và ko bao gồm các số 9,11,13
		{												
				echo "$i,$i+2,$i+4" ."<br/>";			
	
		}
		echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>
