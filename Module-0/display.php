<!DOCTYPE html>
<html>
	<head>
		<h1>List of all Bucketlist</h1>
	</head>
	<body>
	<table>

		<?php
			$conn = mysqli_connect('localhost', 'root', '', 'bucketlistdb');
			$query = "SELECT * FROM `bucketlist`";
			$result = mysqli_query($conn,$query);
			
			echo "<table border=1>";
			echo "<tr>";
			echo "<th>List ID</th>";
			echo "<th>Bucket List</th>";
			echo "<th>Date Added</th>";
			echo "</tr>";
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$row["id"]."</td><td>" .$row["bucketlist"]. 
				"</td><td>".$row["date"]."</td>";
				echo "</tr>";
			}
			echo "</table>";
		?>
	</table>
</html>
