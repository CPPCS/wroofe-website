<?php include("login_check.php"); ?>

<!DOCTYPE html>
<html lang="en-gb">
	<head>
		<title>WRoofe - Add Post</title>
	</head>
	<body>
		<?php include("navbar.php"); ?>
		
		<div class="main">
			<form action="addpost_submit.php" method="post">
				<p>Post Title:</p>
				<input type="text" name="title">
				<br /><br />
				
				<p>Post Content:</p>
				<textarea name="content" style="height: 300px; width: 300px;"></textarea>
				<br /><br />
				
				<input type="submit" value="Add Post">
			</form>
		</div>
	</body>
</html>