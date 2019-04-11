<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<form action="nhapten.php" method="post">
	   Nhập tên: <input name="txtname" type="text" size="25" /> <input name="ok" type="submit" value="ok" />	
	</form>

<?php
	if(isset($_POST['ok'])){
		if($_POST['txtname']== NULL){
			echo "Ban chưa nhập tên người dùng";
		}else{
			$n = $_POST['txtname'];
			$p = fopen("danhsach.txt","a");
			fwrite($p,$n."\r\n");
			fclose($p);
			echo "<h2>Danh sách người dùng</h2>";
			$p = fopen("danhsach.txt","r");		
			while( !feof($p) ){
				echo fgets($p)."<br/>";
			}
			fclose($p);			
		}
	}
?>

</body>
</html>
