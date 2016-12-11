<?php
   $s = "1+2";
   $id = explode("+",$s);
   $seatid = $id[0];
   $zoneid = $id[1];
	echo $zoneid.$seatid;
?>