<?php
session_start();
include 'config.php';
   $oConn = connect_db();
   $total = $_GET['total'];
   $seats = $_GET['seat'];
   $zones = $_GET['zone'];
   $id = 0;
    $payment = $_GET['payment'];
	if (!$_SESSION["userid"]) echo "<script type='text/javascript'>alert('You need to login.'); window.location = 'index.php';</script>";
	$userID = $_SESSION["userid"];
	foreach ($oConn->query("SELECT * FROM booking") as $aRow) {
		if($aRow['id_booking']>$id) $id = $aRow['id_booking'];
	}
	$oConn->query("INSERT INTO booking (id_booking,total_price, payment_method, id_account) VALUES ('$id'.'$total', '$payment','$userID')");
	for($x = 0; $x < sizeof($seats); $x++){
		$oConn->query("UPDATE seat SET id_booking ='$id' WHERE id_seat = '$seats[$x]' AND id_zone = '$zones[$x]'");
	}
	echo '<script language="javascript">alert("Done."); window.location = "index.php";</script>';
	
	$oConn = null;
?>

