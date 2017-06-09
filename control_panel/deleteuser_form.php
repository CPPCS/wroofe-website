<?php include("../login_check.php"); ?>

<!DOCTYPE html>
<html>
	<body>
		<?php include("navbar.php"); ?>
		
		<p>Select a user to delete:</p>
		<form method="POST" action="deleteuser_submit.php">
		<select name="user">
		
		<?php
			include("database_conn.php");
			
			$query = "SELECT id, username FROM users";
			$result = mysqli_query($con, $query);
			
			while ($row = mysqli_fetch_array($result))
			{
				echo "<option value = " . $row["id"] . ">" . $row["username"] . "</option>";
			}
		?>
		
		</select>
		
		<input type="submit" value="Delete User" />
		</form>
	</body>
</html>