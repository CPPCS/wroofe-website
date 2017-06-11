<?php include("login_check.php"); ?>

<!DOCTYPE html>
<html lang="en-gb">
	<head>
		<title>WRoofe - Control Panel</title>
	</head>
	<body>
		<?php include("navbar.php"); ?>
		
		<div class="main">
			<p>Select an option below:</p>
			<ul>
				<li><a href="addpost_form.php">Add Post</a></li>
				<li><a href="deletepost_form.php">Delete Post</a></li>
				<br />
				<li><a href="adduser_form.php">Add User</a></li>
				<li><a href="deleteuser_form.php">Delete User</a></li>
			</ul>
		</div>
	</body>
</html>