<?php
    include("database_conn.php");
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($con, $id);
    $result = mysqli_query($con, "SELECT * FROM `posts` WHERE `id` = '" . $id . "';");
    $post = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en-GB">
	<head>
	</head>
	<body>
		<?php include("navbar.php"); ?>
		
		<div class="main">
			<p><b><?php echo $post['title'] ?></b></p>
			<p><?php echo $post['content'] ?></p>
		</div>
	</body>
</html>