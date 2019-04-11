<?php 
	$con =  mysql_connect("localhost","root","123456");
	mysql_select_db("viduonline",$con);
	$query = mysql_query("select * from user");
    $row = 	mysql_num_rows($query );
	echo $row;
	while($data = mysql_fetch_assoc($query)){
		echo "<pre>";
			print_r($data);
		echo "</pre>";
	}
	mysql_close($con);
?>
