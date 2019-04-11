<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    <form action="bt2.php" method="post">
    	 Product: <input type="text" size="25" name="txtname" value="<?php echo $_POST['txtname'];?>">	<br/>
         Price: <input type="text" size="15" name="txtprice" value="<?php echo $_POST['txtprice'];?>">
         Num : <select name="num">
         			<?php
						for($i=1; $i<=100; $i++){
							if($_POST['num'] == $i){
								 echo  	"<option value='$i' selected> $i </option>";
							}else{
                   			     echo  	"<option value='$i'> $i </option>";
							}
						}
					?>
               </select> 
         <input name="ok" type="submit" value="order" /> 
    </form>
    <?php 
		
		function tinhtien($gia,$sl){							
			$temp = $gia * $sl ;
			if($sl >= 30){
				$giam = $temp - ($temp * 0.08) ;
			}else{
				$giam = $temp;	
			}	
			$total = $giam + $giam * 0.1;
			return $total;
		}
     	if(isset($_POST['ok'])){
			if($_POST['txtname']==NULL){
				echo "Bạn chưa nhập tên sản phẩm";
			}else{
				$n = $_POST['txtname'];
			}
			if($_POST['txtprice']==NULL){
				echo "Bạn chưa nhập giá sản phẩm";
			}else{
				$p = $_POST['txtprice'];
			}
			if($_POST['num']==NULL){
				echo "Bạn chưa nhập sso lượng sản phẩm";
			}else{
				$sl = $_POST['num'];
			}
			if($n && $p && $n){
			     echo "<h3> Bạn vừa nhập món hàng có tên là: $n </h3>";
			     echo "<h3> Với số lượng là: $sl </h3>";
				 echo "<h3> Với đơn giá là: $p </h3>";
				 echo "<h3> Tổng tiền là: ".tinhtien($p,$sl)."VND </h3>";
			}
		}
    ?>
</body>
</html>
