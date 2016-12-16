<?php
include 'config.php';
   $oConn = connect_db();
   $id = explode(" ",$_GET['str']);
   $seatid = $id[0];
   $zoneid = $id[1];
   $price;$zone;
	foreach ($oConn->query("SELECT * FROM zone WHERE id_zone = '$zoneid'") as $aRow2) {
		$price = $aRow2['price'];
		$zone = $aRow2['name_zone'];
	}
	echo $zone.$seatid.' ';
	echo 'Price : '.$price;
	echo '<br>';
	$oConn = null;
?>
