html>
	<head>
		<title>
			Create Umpire
		</title>
	</head>
	<body>
			<?php
			
			$series_name = $_POST["SeriesName"];
			$match_date = $_POST["MatchDate"];
			
			if ($series_name == "")
			{
				echo "<p><font color=\"blue\">Added successfully</font></p>";
				echo "Something is wrong. ";
				echo '<a href="addFixture.html"> Try again!</a>';
				exit();
			}
			// First we will be Generating the SQL
			$sql = "insert into fixture_master (series_name, match_date) values ('$series_name', '$match_date')";
			//echo "<p><font color=\"blue\">".$sql."</font></p>";
			// Then We will be Creating the Connection
			$servername = "localhost";
			$username = "root";
			$password = "mysql";
			$database = "cricket_analytics";
			$conn = new mysqli($servername, $username, $password, $database);
			// Now we need to Check the Connection
			if ($conn->connect_error) 
			{
			    die("Connection failed: " . $conn->connect_error);
			} 
			echo "<p><font color=\"blue\">Added successfully</font></p>";
         
			// Now run a sql
			$result = $conn->query($sql);
			if ($result)
			{
				echo "Successful! ";
			
			}
			// In last, we will close the connection
			mysqli_close($conn);
		?>
	</body>
</html>