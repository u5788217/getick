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
		
		<h1><span>Payment</span></h1>
		<div> <form method="get" action="updateseat.php" style="margin: auto;">
			<ul>	
			 <?php include 'payment_db.php';?>
			</ul>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>
