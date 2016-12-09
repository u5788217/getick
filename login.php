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
	</div>
	<div id="footer">
		<div>
				<p>&copy; 2023 by Mustacchio. All rights reserved.</p>
			<ul>
				<li>
					<a href="" id="twitter">twitter</a>
				</li>
				<li>
					<a href="" id="facebook">facebook</a>
				</li>
				<li>
					<a href="" id="googleplus">googleplus</a>
				</li>
				<li>
					<a href="" id="pinterest">pinterest</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
