<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="ngaythangnam.php" method="post">
	Your Name : <input type="text" name="txtname" size="25"> <br/>  <br/>
    Day: <select name="day">
    		<?php 
				for($i=1; $i<=31; $i++){
					echo "<option value='$i'>$i</option>";
				}
			?>    
    	 </select>
    Month: <select name="month">
				<?php
                    $thang = array(1=>"Jan,","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
					foreach($thang as $k => $v){
						echo "<option value='$k'> $v </option>";
					}
				 ?>	
           </select>
     Year: <select name="year">   
     			<?php
                	$now = date("Y"); // hàm lấy ngày tháng hiện hành của php				
					for($i=1975; $i <= $now; $i++){
						echo "<option value='$i'> $i </option>";
					}
				?>
     	   </select>	 
		<input type="submit" name="ok" value="submit">
</form>
<?php 
	if(isset($_POST['ok'])){		
		$n = $_POST['txtname'];
		$d = $_POST['day'];
		$m = $_POST['month'];
		$y = $_POST['year'];
		$now = date("Y");
		$age = $now - $y;
		echo "Xin chao ban: $n </br>";
		echo "Sinh nhat cua ban: $d/$m/$y </br>";
		echo "nam nay ban $age tuoi </br>";
		$chd_name = array("Dương Cưu","Kim Ngưu","Song Tử","Cự Giải","Hải Sư","Xử Nữ","Thiên Xứng","Hổ Cáp","Nhân Mã","Ma Kết","Bảo Bình","Song Ngư");
		$chd_img= array("duongcuu.gif","kimnguu.gif","songtu.gif","cugiai.gif","haisu.gif","xunu.gif","thienxung.gif","hocap.gif","nhanma.gif","maket.gif","baobinh.gif","songngu.gif");
		$chd_text = array("duongcuu.txt","kimnguu.txt","songtu.txt","cugiai.txt","haisu.txt","xunu.txt","thienxung.txt","hocap.txt","nhanma.txt","maket.txt","baobinh.txt","songngu.txt");
		
		if( ($d >= 21 && $m == 3) || ($d <= 20 && $m == 4)){
			$i=0;
		}
		if( ($d >= 21 && $m == 4) || ($d <= 21 && $m == 5)){
			$i=1;
		}
		if( ($d >= 22 && $m == 5) || ($d <= 21 && $m == 6)){
			$i=2;
		}
		if( ($d >= 22 && $m == 6) || ($d <= 23 && $m == 7)){
			$i=3;
		}
		if( ($d >= 24 && $m ==7) || ($d <= 23 && $m==8)){
			$i=4;
		}
		if( ($d >= 24 && $m == 8) || ($d <= 23 && $m == 9)){
			$i=5;
		}
		if( ($d >= 24 && $m == 9) || ($d <= 23 && $m == 10)){
			$i=6;
		}
		if( ($d >= 24 && $m ==10) || ($d <= 22 && $m==11)){
			$i=7;
		}
		if( ($d >= 23 && $m ==11) || ($d <= 21 && $m==12)){
			$i=8;
		}
		if( ($d >= 22 && $m ==12) || ($d <= 20 && $m==1)){
			$i=9;
		}
		if( ($d >= 21 && $m ==1) || ($d <= 19 && $m==2)){
			$i=10;
		}		 
		if( ($d >= 20 && $m ==2) || ($d <= 20 && $m==3)){
			$i=11;
		}		
		$name = $chd_name[$i] ;
		$img = $chd_img[$i];
		$text = $chd_text[$i];		
		echo "<h3>Ban thuoc chom sao $name</h3>";
		echo "Hinh Anh <img src='../images/$img'/>";
			$p = fopen("../text/$text","r");
			while( !feof($p) ){
				echo fgets($p)."<br/>";
			}
			fclose($p);
	}
?>
</body>
</html>
