<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$a = 500;
	function test(){
		global $a; // phải dùng global: biến toan cuc -> láy  dc giá trị của biến a từ bên ngoài
		echo $a; // biến a ở trong hàm và ngoài hàm ko liên quan đến nhau nên hàm ko hiêu -> ko ra két qua gì
	}
	test();
	function test2(){
		global $b; // dùng biên toàn cuc global -> lấỵ giá trị của bien $b  trong hàm ra ngoài
		$b = 1000;	// ko hieu và  ko ra ket qua gì vì bien b ở trong và ngoài hàm ko liên quan đến nhau		
	}
	test2();
	echo $b;
?>
</body>
</html>
