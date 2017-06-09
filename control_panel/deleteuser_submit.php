<?php
	include("database_conn.php");
	
	$id = $_POST["user"];
	
	try
	{
		$query = "DELETE FROM users WHERE id = " . $id . ";";
		mysqli_query($con, $query);
		
		include("navbar.php");
		echo "<p>User deleted successfully. <a href='controlpanel.php'>Click to go back to the control panel.</a></p>";
	}
	
	catch (Exception $e)
	{
		$e->getMessage();
	}
?>