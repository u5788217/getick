<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<?php include 'header.php';?>
</head>
<body>
	<?php include 'header_menu.php';?>
	<div id="body">
		<h1><span>Booking ticket</span></h1>
		<div>
			<ul>
				<?php include 'book_db.php';?>
				<li>
                    <div style="margin-left: 200px;">
                        <h2>Selected seat: A20 A21</h2>
                        <h2>Total price: 10000 Baht</h2>
                        <input type="button" value="BOOK" name="BOOK">
                    </div>
                </li>
				<?php include 'book_ajax.php';?>
			</ul>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>
