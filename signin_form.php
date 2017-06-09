<!DOCTYPE html>
<html lang="en-gb">
	<head>
		<title>WRoofe - Sign in</title>
	</head>
	<body>
		<?php include("navbar.php"); ?>
		
		<div class="main">
			<form action="signin_submit.php" method="post">
				<p>Username:</p>
				<input type="text" name="user" required>
				<p>Password:</p>
				<input type="password" name="pass" required>
				<br /><br />
				<input type="submit" value="Sign in">
			</form>
		</div>
	</body>
</html>