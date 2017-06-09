<!DOCTYPE html>
<html lang="en-gb">
	<head>
		<title>WRoofe - Updates</title>
	</head>
	<body>
		<?php include("navbar.php"); ?>
		
		<div class="main">
			<ul>
			<?php
				include("database_conn.php");
				include("update_display.php");
			
				$query = "SELECT * FROM posts;";
				$result = mysqli_query($con, $query);
	
				while ($row = mysqli_fetch_array($result))
				{
					$d = strtotime($row["date"]);
					$date = date("d/m/Y", $d);
					echo "<p><a href='updates_post.php?id=" . $row["id"] . "'>" . $row["title"] . "</a> - " . $date . "</p>";
				}
			?>
			</ul>
		</div>
	</body>
</html>