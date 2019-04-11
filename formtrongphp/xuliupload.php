<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	if($_FILES['img']['name'] != NULL){
		if($_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/jpg" || $_FILES['img']['type'] == "image/gif" || $_FILES['img']['type'] == "image/png"  ){
				move_uploaded_file($_FILES['img']['tmp_name'],"data/".$_FILES['img']['name']);
				echo "<h3>up load thanh cong</h3>";
				$name = $_FILES['img']['name'];
				$tmp = $_FILES['img']['tmp_name'];
				$size = $_FILES['img']['size'];
				$type = $_FILES['img']['type'];
				echo "<h3>Tên của file là : $name </h3>";
				echo "<h3>Kích thước của file là : $size </h3>";
				echo "<h3>kiểu của file là : $type </h3>";
				echo "<h3>Tên tạm của file là : $tmp </h3>";
				echo "<img src='data/$name' width = '500'>" ;
		}else{
			    echo "Dịnh dang khong hơp le";
		}
	}else{
	    	echo "Bạn chưa chọn hinh";
	}
?>
</body>
</html>
