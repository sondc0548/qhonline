<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$a = 500;
	$b = 200;
	define("MAX", $a);
	echo $a + $b*2 + MAX*3; // 500 + 400 + 1400 = 2400
?>
 <?php 
 	$a = 300;
	$b = 350;
	define("MAX2", $a);
	echo "$a +$b " + MAX2; // lưu ý : ko thể thực hiện dc phép tính trong một chuỗi. 
	// khi + một số với một chuỗi thì giá trị của số sẽ + vào giá trị đầu tiên của chuỗi là biến a -> MAX2 + $a <=> 300 + 300 = 600
 
 ?>
 
 <?php 
 	$a = 5;
	echo $a++ + ++$a; 
	echo "<br/>";
	//5(6) + 7 = 12  <=> vì  $a++ có giá trị ngầm định = 6 nhưng chưa kịp tăng lên 6 nhưng đã mang giá trị là 5. 
 ?>
<?php 
	$a = 3;
	echo $a++ + ++$a + $a-- + --$a + $a; // 3(4) + (4+1)->5 + (5-1)->5 + (4-1)->3 + 3 = 19

?>

</body>
</html>
