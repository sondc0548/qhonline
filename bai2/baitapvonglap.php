<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	//for($i=1; $i<=30; $i++){
//		echo "$i <br/>";
//	}		
?>
<?php 
	for($i=1; $i<=30; $i++){
		if( $i % 2!=0 && $i!=9 && $i!=11 && $i!=13)    // liệt kê các số lẻ trong dãy số từ 0 - 30 và ko bao gồm các số 9,11,13
		{
			echo "$i <br/>";
		}
	}

?>
</body>
</html>
