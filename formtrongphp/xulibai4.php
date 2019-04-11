<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php 
		if($_POST['txtprice'] == NULL){
			echo "Ban chua nhap so luong";
		}else{
			$n = $_POST['num'];
			$p = $_POST['txtprice'];
			$total = $n * $p + ($n*$p)*0.1;
			echo "Ban da mua voi gia: $p, Voi so luong la: $n </br>";
			echo "Tong tien ban phai tra la: $total VND (da bao gom 10% VAT)";
		}
	?>

</body>
</html>
