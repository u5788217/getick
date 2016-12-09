<?php
session_start();
?>
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
			
			<?php if ($_SESSION["userid"]) { echo $_SESSION["userid"]; ?>
			<li>
				<a href="login.php">login</a>
			</li>
			<?php } ?>
		</ul>
	</div>
	<div id="body">
		<div id="featured">
			<img src="images/the-beacon.jpg" alt="">
			<div>
				<h2>the beacon to all mankind</h2>
				<span>Our website templates are created with</span>
				<span>inspiration, checked for quality and originality</span>
				<span>and meticulously sliced and coded.</span>
				<a href="blog-single-post.html" class="more">read more</a>
			</div>
		</div>
		<ul>
			<li>
				<a href="concert.html">
					<img src="images/the-father.jpg" alt="">
					<span>the father</span>
				</a>
			</li>
			<li>
				<a href="concert.html">
					<img src="images/the-actor.jpg" alt="">
					<span>the actor</span>
				</a>
			</li>
			<li>
				<a href="concert.html">
					<img src="images/the-nerd.jpg" alt="">
					<span>the nerd</span>
				</a>
			</li>
		</ul>
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
