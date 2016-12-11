<?php
include 'config.php';
   $oConn = connect_db();
   $id = explode("+",$_GET['str']);
   $zoneid = $id[1];
   $seatid = $id[0];
  	echo $zoneid.'-'.$seatid.' ';
	$oConn = null;
?>
