<!DOCTYPE html>
<html>
	<head>
		<style>
			body{
				text-align: center;
				background-repeat: no-repeat;
				background-size: cover;
				background-image: url(background.gif);
			}
			a{
				color : green;
				background-color: transparent;
				text-decoration: none;
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
			h1{
				color: green;
				font-size: 50px;
			}
			h2{
				color: white;
			}
			label{
				color: green;
				font-size: 15px;
			}
			th{
				color: green;
				font-size: 15px;
			}
			td{
				color: green;
			}
		</style>
	</head>
	<head>
		<h1>List of all Bucketlist</h1>
	</head>
	<body align = "center">
	<table>
		
		<table border="1" cellspacing="10" align="center">
		<tr>
		<th>List ID</th>
		<th>Bucket List</th>
		<th>Date Added</th>
		</tr>
		<?php
			$conn = mysqli_connect('localhost', 'root', '', 'bucketlistdb');
			$query = "SELECT * FROM `bucketlist`";
			$result = mysqli_query($conn,$query);
			
			while($row = mysqli_fetch_array($result))
			{
				echo 
				"<tr>
				<td>".$row["id"]."</td>
				<td>" .$row["bl"]."</td>
				<td>".$row["date"]."</td>
				</tr>";
			}
			echo "</table>";
			$conn->close();
		?>
	</table>
	</body>
	<head>
		<body>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			<a href = "index.html" target = "_self"><button><h2>Main Page</h2></a>
		</body>
	</head>
</html>
