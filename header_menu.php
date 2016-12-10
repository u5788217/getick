<?php
	echo '<div id="header">
		<a href="index.html" class="logo">
			<img src="images/logo.jpg" alt="">
		</a>
		<ul id="navigation">
			<li class="selected">
				<a href="index.php">home</a>
			</li>
			<li>
				<a href="concert.php">concerts</a>
			</li>
			
			<?php if (!$_SESSION["userid"]) { ?>
			<li>
				<a href="login.php">login</a>
			</li>
			<?php } ?>
			
			<?php if ($_SESSION["userid"]) { ?>
			<li>
				<a href="logout.php">logout</a>
			</li>
			<?php } ?>
		</ul>
	</div>';
?>