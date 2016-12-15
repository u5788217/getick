<?php
session_start();
	echo '<div id="header">
		<a href="index.php" class="logo">
			<img src="images/logo.jpg" alt="">
		</a>
		<ul id="navigation">
			<li class="selected">
				<a href="index.php">home</a>
			</li>';
			if ($_SESSION["userid"]==11)
			echo '<li>
				<a href="admin.php">concerts</a>
			     </li>';
			else{ echo '<li>
				<a href="concert.php">concerts</a>
			     </li>';}
			
			if (!$_SESSION["userid"])
			echo '<li>
				<a href="login.php">login</a>
			      </li>';
			
			if ($_SESSION["userid"])
			echo '<li>
				<a href="logout.php">logout</a>
			     </li>';
	echo	'</ul>
	</div>';
?>
