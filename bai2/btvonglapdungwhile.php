<?php 
	$i = 1;
	while($i <= 30){
		if( $i%2 != 0 && $i!=9 && $i!=11 && $i!=13)    // liệt kê các số lẻ trong dãy số từ 0 - 30 và ko bao gồm các số 9,11,13
		{
			echo "$i <br/>";
		}
		$i++;
	}
?>