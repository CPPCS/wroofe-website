<!DOCTYPE html>
<html lang="en-GB">
	<head>
		
	</head>
	<body>
		<?php 
			include("navbar.php");
			include("database_conn.php");
			
			$user = $_POST["user"];			
			$pass = hash("md5", $_POST["pass"]);
			
			try
			{
				$query = "INSERT INTO users VALUES(null, '$user', '$pass');";
				mysqli_query($con, $query);
				
				echo "<p>User added successfully. <a href='controlpanel.php'>Click to return to the control panel.</a></p>";
			}
			
			catch (Exception $e)
			{
				echo "Caught exception: " . $e->getMessage();
			}
		?>
	</body>
</html>