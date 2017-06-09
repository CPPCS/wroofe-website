<?php
	include("database_conn.php");
	
	$user = $_POST["user"];
	$plain_pass = $_POST["pass"];
	$encrypt_pass = hash("md5", $plain_pass);
	
	$query = "SELECT * FROM users WHERE username = '$user' AND password = '$encrypt_pass';";
	$result = mysqli_query($con, $query); // $con is created in database_conn.php
	$rows = mysqli_num_rows($result);
	
	if ($rows == 1)
	{
		session_start();
		
		$_SESSION["user"] = $user;
		$_SESSION["pass"] = $pass;
		
		header("location:/control_panel/controlpanel"); // Re-direct to control panel
	}
	
	else
	{
		include("navbar.php");
		echo "<div class='main'><p>Username or password doesn't exist.</p>";
		echo "<p><a href='signin_form'>Click to go back to the login page.</a></p></div>";
	}
?>