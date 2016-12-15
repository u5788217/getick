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
		
		<h1><span><a href="admin.php" style="text-decoration: none;display: inline-block;">Admin</a></span></h1>
		<div>
			<ul>	
			 <?php include 'adminshowcon_db.php';?>
			</ul>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>
