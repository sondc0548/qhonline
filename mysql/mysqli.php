<?php 
	$conn = mysqli_connect("localhost","root","123456","viduonline");
	$sql = "select * from employee order by id DESC";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($query);
	echo " total record: $row";
	echo "<table border='1'>";
			echo "<tr>";
				echo "<td> Id </td>";
				echo "<td> Name </td>";
				echo "<td> email </td>";
				echo "<td> Address </td>";
				echo "<td> Phone </td>";
			echo "</tr>";
		while($data = mysqli_fetch_assoc($query)){
			echo "<tr>";
				echo "<td>".$data['id']."</td>";
				echo "<td>".$data['name']."</td>";
				echo "<td>".$data['email']."</td>";
				echo "<td>".$data['address']."</td>";
				echo "<td>".$data['phone']."</td>";;
		    echo "</tr>";		
		}
	echo "</table>";
	mysqli_close($conn);

?>