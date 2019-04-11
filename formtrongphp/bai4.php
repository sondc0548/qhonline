<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<form action="xulibai4.php" method="post">
    	Price: <input name="txtprice" type="text" size="25" />
        Num: <select name="num" >
        		<?php 
        			for($i = 1; $i<=100; $i++){
						echo "<option value='$i'>$i</option>";
					}
			    ?>	 
        	 </select>
        <input type="submit" value="submit" name="ok">     
    </form>
</body>
</html>
