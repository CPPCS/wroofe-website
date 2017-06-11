<?php include("../login_check.php"); ?>

<!DOCTYPE html>
<html>
	<body>
		<?php include("navbar.php"); ?>
		
		<p>Select a post to delete:</p>
		<form method="POST" action="deletepost_submit.php">
		<select name="post">
		
		<?php
			include("database_conn.php");
			
			$query = "SELECT id, title FROM posts";
			$result = mysqli_query($con, $query);
			
			while ($row = mysqli_fetch_array($result))
			{
				echo "<option value = " . $row["id"] . ">" . $row["title"] . "</option>";
			}
		?>
		
		</select>
		
		<input type="submit" value="Delete Post" />
		</form>
	</body>
</html>