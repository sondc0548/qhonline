<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$a = 5;
	switch($a){
		case "2":
			echo "Mon";
			break;
		case "3":
			echo "Tue";
			break;
		case "4":
			echo "Wed";
			break;
		case "5":
			echo "Thus";
			break;
		case "6":
			echo "Fri";
			break;
		case "7":
			echo "Sat";
			break;
		default :
			echo "Sun";
			break;						
	}

?>
<?php 
	$a=1;
	for($i=1;$i< 10;$i++);
	{
	echo $a * $i;
	}
?>
</body>
</html>
