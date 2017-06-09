<!DOCTYPE html>
<html lang="en-GB">
	<head>
		
	</head>
	<body>
		<?php 
			include("navbar.php");
			include("database_conn.php");
			
			$title = $_POST["title"];
			$content = $_POST["content"];
			$date = date("Y-m-d");
			
			try
			{
				$query = "INSERT INTO posts VALUES(null, '$title', '$content', '$date');";
				mysqli_query($con, $query);
				
				echo "<p>Posted successfully. <a href='controlpanel.php'>Click to return to the control panel.</a></p>";
			}
			
			catch (Exception $e)
			{
				echo "Caught exception: " . $e->getMessage();
			}
		?>
	</body>
</html>