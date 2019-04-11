<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	echo "<br/> sap xep mang trong PHP <br/>";
	$x = array("x","z","f","g","h","y","r");
	sort($x);
	//rsort($x);
	foreach($x as $k){
		echo $k."<br/>";
	}
	
	echo "<br/> sap xep mang asort va arsort <br/>";
	// asort($m): sap xep  gia tri cua cac ptu trong mang theo chieu tang  dan
	// arsort($m): sap xep  gia tri cua cac ptu trong mang theo chieu giam dan
	$v = array("5"=>"e","1"=>"q","2"=>"f");
	//arsort($v); // sap xep gia tri phan tu giam dan 
	 asort($v); // sap xep gia tri phan tu tang dan
	foreach($v as $k => $y){
		echo "$k : $y <br/>";
	}
	
	echo "<br/> sap xep mang ksort va krsort <br/>";
	// ksort($m): sap xep khoa cac ptu trong mang tang dan
	// krsort($m): sap xep khoa cac ptu trong mang giam dan
	$z = array("6"=>"e","4"=>"q","2"=>"f");
	krsort($v); // sap xep khoa cua cac phan tu giam dan 
	 //ksort($z); // sap xep khoa cua cac phan tu tang dan
	foreach($z as $k => $y){
		echo "$k : $y <br/>";
	}
?>

</body>
</html>
