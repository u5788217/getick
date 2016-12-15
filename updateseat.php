<?php
session_start();
include 'config.php';
   $oConn = connect_db();
   $total = $_GET['total'];
   $seats = $_GET['seat'];
   $zones = $_GET['zone'];
    $payment = $_GET['payment'];
	if (!$_SESSION["userid"]) echo "<script type='text/javascript'>alert('You need to login.'); window.location = 'index.php';</script>";
	$userID = $_SESSION["userid"];
	$oConn->query("INSERT INTO booking (total_price, payment_method, id_account) VALUES ('$total', '$payment','$userID')");
	foreach ($oConn->query("SELECT MAX(id_booking) AS max FROM booking") as $aRow) {
		$max = $aRow['max'];
		for($x = 0; $x < sizeof($seats); $x++){
			$oConn->query("UPDATE seat SET id_booking ='$max' WHERE id_seat = '$seats[$x]' AND id_zone = '$zones[$x]");
		}
	echo "<script type='text/javascript'>alert('Booking is done.'); window.location = 'index.php';</script>";
	}
	$oConn = null;
?>

