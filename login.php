<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<?php include 'header.php';?>
</head>
<body>
	<?php include 'header_menu.php';?>
	<div id="body">
		<h1><span>let's Login</span></h1>
		<form method="get" action="login_db.php">
			<input type="text" name="email" id="email" placeholder="Email" class="login">
			<input type="text" name="pwd" id="pwd" placeholder="password" class="login">
			<input type="submit" name="send" id="send" value="LOGIN">
		</form>
		<br><a href="register.php" style="text-decoration: none;display: inline-block; color:#000;">Register</a>
	</div>
	<?php include 'footer.php';?>
</body>
</html>
