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
	<?php include 'header_menu.php';?>
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
	<?php include 'footer.php';?>
</body>
</html>
