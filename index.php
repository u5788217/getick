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
		<div id="featured">
			<img src="images/coldplay_main.jpg" alt="">
			<div>
				<h2>Coldplay</h2>
				<span>Coldplay have announced Dublin and Cardiff shows as part of their 2017 European tour. Catch them live by checking out the tour dates and concert ticket information below on Stereoboard.</span>
				<a href="booking-id001.html" class="more">Book Now</a>
			</div>
		</div>
        <h1 style="background-color: black">Recommendation Concerts</h1>
		<ul>
			<li>
				<a href="concert.html">
					<img src="images/concert/3Adele.jpg" alt="">
					<span>Adele</span>
                    <h3>Date: 20 Jan 2017</h3>
                    <h3>Time: 10:00 ~ 15:00</h3>
				</a>
			</li>
			<li>
				<a href="concert.html">
					<img src="images/concert/6Fourpandin.jpg" alt="">
					<span>the actor</span>
                    <h3>Date: 20 Jan 2017</h3>
                    <h3>Time: 10:00 ~ 15:00</h3>
				</a>
			</li>
			<li>
				<a href="concert.html">
					<img src="images/concert/8bodyslam_nanglen_ver2_xlg.jpg" alt="">
					<span>the nerd</span>
                    <h3>Date: 20 Jan 2017</h3>
                    <h3>Time: 10:00 ~ 15:00</h3>
				</a>
			</li>
		</ul>
	</div>
	<?php include 'footer.php';?>
</body>
</html>
