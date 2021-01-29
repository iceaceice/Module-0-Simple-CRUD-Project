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
		<h1>Update Bucket List</h1>
	</head>
	<body align = "center">
	<table>
		
		<table border="1" cellspacing="10" align="center">
		<tr>
		<th>List ID</th>
		<th>Bucket List</th>
		<th>Date Added</th>
		<th colspan="1" align="center">Operations</th>
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
	
	<form action="" method="POST">
	
			
			<label for="id">Search List ID:</label>
			<input type="text" name ="id"><br/>
			<label for="list">Edit Bucket List:</label>
			<input type="text" name ="list"><br/>
			<input type="submit" name="update" value="Update">
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	</form>
	</body>
	<body>
			<a href = "index.html" target = "_self"><button><h2>Main Page</h2></a>
	</body>
</html>
<?php
	if(isset($_POST['update'])){
		
		$conn1 = mysqli_connect('localhost', 'root', '', 'bucketlistdb');
		
		$list = $_POST['list'];
		$id = $_POST['id'];
		
		$query = "UPDATE `bucketlist` SET bl='".$list."' WHERE id=$id";
		$result = mysqli_query($conn1,$query);
		
		$conn1->close();
	}
?>