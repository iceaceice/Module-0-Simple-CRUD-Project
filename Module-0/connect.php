<?php
		$list = $_POST["bucketlist"];
		$date = date('Y-m-d');

		$conn = new mysqli('localhost', 'root', '', 'bucketlistdb')or die ("Unable to connect");
		
		if(mysqli_connect_error()){
			
			die('Connecting Failed: ' .$conn->connect_error);
		}
		else{
			
			$sql = "INSERT INTO bucketlist(bl, date) VALUES('$list', '$date')";
			
			if(!mysqli_query($conn, $sql)){
				echo "Not Inserted";
			}
			else{
				echo "<h1>Record successfully added!</h1>";
				$conn->close();
			}
		}
		
?>
<html>
	<head>
		<style>
			body{
				text-align: center;
				background-repeat: no-repeat;
				background-size: cover;
				background-image: url(background.gif);
			}
			h1{
				color: green;
				font-size: 50px;
			}
			button{
				border: 2px solid green;
				background-color: green;
				border-collapse : separate;
				border-spacing : 20px;
				transition-duration: 0.4s;
				cursor: pointer;
				border-radius: 12px;
			}
			button:hover{
				background-color: gray;
			}
			button:active {
				  background-color: #3e8e41;
				  box-shadow: 0 5px #666;
				  transform: translateY(4px);
			}
		</style>
		<body align = "center">
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<a href = "index.html" target = "_self"><button><h2>Main Page</h2></a>
		</body>
	</head>
</html>