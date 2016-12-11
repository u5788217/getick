<?php
include 'config.php';
   $oConn = connect_db();
   $id = explode("+",$_GET['str']);
   $seatid = $id[0];
   $zoneid = $id[1];
   $total =0;
	foreach ($oConn->query("SELECT * FROM zone WHERE id_zone = '$zoneid'") as $aRow2) {
		$total+=$aRow2['price'];
	}
	echo $seatid;
	echo $zoneid;
	echo 'Total price : '.$total;
	$oConn = null;
?>
