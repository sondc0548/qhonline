<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    <form action="bt1.php"  method="post">
	         So a: <input name="txtsoa" type="text" size="15" value= "<?php echo $_POST['soa']?>"/> 
             So b: <input name="txtsob" type="text" size="15" value= "<?php echo $_POST['sob']?>" /> 
            <input name="ok" type="submit" value="Kiem Tra" />
	</form>
    <?php 
		    function tong($a,$b){
				$c = $a + $b;
				return $c;
			}
			function hieu($a,$b){
				$c = $a - $b;
				return $c;
			}
			function thuong($a,$b){
				$c = $a / $b;
				return $c;
			}
			function tich($a,$b){
				$c = $a * $b;
				return $c;
			}
			function tbc($a,$b){
				$c = (tong($a,$b) + hieu($a,$b) + thuong($a,$b) + tich($a,$b))/4;
				return $c;
			}
			function snt($a){
				$snt = true ;
				for($i=2; $i<=$a/2; $i++ ){
					if($a % $i == 0){
						$snt = false;
						break;
					}
				}
				return $snt;
			}
			function giaithua($b){
				$gt = 1;
				for($i=1; $i <= $b; $i++){
					$gt = $gt * $i;					
				}
				return $gt;
			}
		if(	isset($_POST['ok']) ){
			if($_POST['txtsoa'] == NULL){
				echo "ban chưa nhap so a";
			}else{
				$so1 = $_POST['txtsoa'];
			}
			if($_POST['txtsob'] == NULL){
				echo "ban chưa nhap so b";
			}else{
				$so2 = $_POST['txtsob'];
			}		
		 echo "Tong: ".tong($so1,$so2)."<br/>";
		 echo "Hieu: ".hieu($so1,$so2)."<br/>";
		 echo "Thương: ".thuong($so1,$so2)."<br/>";
		 echo "Tich: ".tich($so1,$so2)."<br/>";
		 echo "Trung binh cong ".tbc($so1,$so2)."<br/>" ;
		 if( snt($so1) == TRUE){
		 	echo "$so1 la so nguyen to <br/>";
		 }else{
		 	echo "$so1 ko phai la so nguyen to <br/>";
		 }
		}
		echo "Gia thua cua so $so2 la: ".giaithua($so2);
	?>
</body>
</html>
