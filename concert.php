<?php
session_start();
?>
<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<?php include 'header.php';?>
</head>
<body>
	<?php include 'header_menu.php';?>
	<div id="body">
		
		<h1><span>Concert Lists</span></h1>
		<div>
			<ul>	
				<form method = "get" action="">
					<?php include 'concert_db.php';?>
				</form>
			</ul>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>
