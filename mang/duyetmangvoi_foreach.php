<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$a = array("asp","php","jsp");
	foreach($a as $b){
		echo $b."<br/>";
	}
	$person = array("name"=>"sondc","address"=>"TayHo","age"=>"33","job"=>"grapbiker");
	foreach($person as $item ){
		echo $item."<br/>";
	}
	foreach($a as $c=>$d){
		echo "$c:$d <br/>";
	}
	foreach($person as $k => $v){
		echo "$k:$v <br/>";
	}
?>
</body>
</html>
