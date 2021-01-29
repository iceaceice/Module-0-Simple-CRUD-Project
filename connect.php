<?php
		$list = $_POST["bucketlist"];
		$date = date('Y-m-d');

		$conn = new mysqli('localhost', 'root', '', 'bucketlistdb')or die ("Unable to connect");
		
		if(mysqli_connect_error()){
			
			die('Connecting Failed: ' .$conn->connect_error);
		}
		else{
			
			$sql = "INSERT INTO bucketlist(bucketlist, date) VALUES('$list', '$date')";
			
			if(!mysqli_query($conn, $sql)){
				echo "Not Inserted";
			}
			else{
				echo "<h1>Record successfully added!</h1>";
				$conn->close();
			}
		}
		
?>