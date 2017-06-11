<?php
	include("database_conn.php");
	
	$id = $_POST["post"];
	
	try
	{
		$query = "DELETE FROM posts WHERE id = " . $id . ";";
		mysqli_query($con, $query);
		
		include("navbar.php");
		echo "<p>Post deleted successfully. <a href='controlpanel.php'>Click to go back to the control panel.</a></p>";
	}
	
	catch (Exception $e)
	{
		$e->getMessage();
	}
?>