<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table align="center" border="1" cellpadding="3" cellspacing="0">
	<?php 
		echo "<tr>";
			for($i=2; $i<=10; $i++){			
					echo "<td>";
					for($j=1; $j<=10; $j++){						   	
					   echo "$j x $i = ". $i*$j."<br/>"  ;
					}
					echo "</td>";
					
			}
	   echo "</tr>";
	?>
</table>    
</body>
</html>
