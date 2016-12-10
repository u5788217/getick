<?php
session_start();
?>
<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog - Mustache Enthusiast</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
	<?php include 'header_menu.php';?>
	<div id="body">
		<h1><span>blog</span></h1>
		<div>
			<ul>
				<li>
					<a href="blog-single-post.html" class="figure">
						<img src="images/cutting-mustache.jpg" alt="">
					</a>
					<div>
						<h3>why i grew a mustache</h3>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them.
						</p>
						<a href="blog-single-post.html" class="more">read this</a>
					</div>
				</li>
				<li>
					<a href="blog-single-post.html" class="figure">
						<img src="images/in-the-country.jpg" alt="">
					</a>
					<div>
						<h3>in the country</h3>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them.
						</p>
						<a href="blog-single-post.html" class="more">read this</a>
					</div>
				</li>
				<li>
					<a href="blog-single-post.html" class="figure">
						<img src="images/mustache-brothers.jpg" alt="">
					</a>
					<div>
						<h3>the mustache brothers</h3>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them.
						</p>
						<a href="blog-single-post.html" class="more">read this</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>
