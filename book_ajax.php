<?php
include 'config.php';
   $oConn = connect_db();
   $id = explode("+",$_GET['str']);
   $seatid = $id[0];
   $zoneid = $id[1];
   $price;
	foreach ($oConn->query("SELECT * FROM zone WHERE id_zone = '$zoneid'") as $aRow2) {
		$price=$aRow2['price'];
	}
	echo $zoneid.$seatid;
	print_r($zoneid); print_r($seatid);
	echo 'Total price : '.$total;
	$oConn = null;
?>
