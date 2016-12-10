<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GETICK</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
	<div id="header">
		<a href="index.html" class="logo">
			<img src="images/logo.jpg" alt="">
		</a>
		<ul id="navigation">
			<li class="selected">
				<a href="index.php">home</a>
			</li>
			<li>
				<a href="concert.html">concerts</a>
			</li>
			<li>
				<a href="login.php">login</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h1><span>let's Login</span></h1>
		<form method="get" action="login_db.php">
			<input type="text" name="email" id="email" placeholder="Email">
			<input type="text" name="pwd" id="pwd" placeholder="password">
			<input type="submit" name="send" id="send" value="send">
		</form>
		<form action="">
		<input type="submit" name="send" id="send" value="Register">
		</form>
	</div>
	<?php include 'footer.php';?>
</body>
</html>
