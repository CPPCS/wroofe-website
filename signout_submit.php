<?php
	session_start();
	session_destroy();
	include ("navbar.php");
?>

<!DOCTYPE html>
<html lang="en-gb">
	<head></head>
	<body>
		<div class="main">
			<p>You have logged out. <a href="signin_form">Click to go back to the login page.</a></p>
		</div>
	</body>
</html>