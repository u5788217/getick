<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<?php include 'header.php';?>
</head>
<body>
	<?php include 'header_menu.php';?>
	<div id="body">
		<h1><span>Registration</span></h1>
		<div>
			<form method="get" action="login_db.php">
				<input type="text" name="fname" id="fname" placeholder="First Name" class="login" style="width:300px;">
				<input type="text" name="lname" id="lname" placeholder="Last Name" class="login" style="width:300px;"><br>
				<input type="text" name="email" id="email" placeholder="Email" class="login"><br>
				<input type="text" name="pwd" id="pwd" placeholder="password" class="login"><br>
				<input type="text" name="address" id="address" placeholder="Address" class="login"><br>
			</form>
		</div>
		<input type="submit" name="send" id="send" value="Register">
	</div>
	<?php include 'footer.php';?>
</body>
</html>
