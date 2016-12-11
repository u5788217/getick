<?php
include 'config.php';
   $oConn = connect_db();
   $roundid = $_GET['roundid'];
	foreach ($oConn->query("SELECT * FROM round WHERE id_round = '$roundid'") as $aRow) {
		$conid = $aRow['id_concert'];
		foreach ($oConn->query("SELECT * FROM concert WHERE id_concert = '$conid'") as $aRow2) {
			echo	'<div><h3>'.$aRow2['name_concert'].'</h3><p style="margin:0; padding:0;">'.$aRow2['des_concert'].'</p>';
		}
		echo '<h2>'.$aRow['date'].'<br> Time: '.$aRow['time'].'</h2><table border=1 style="width:300px; margin-left: 130px;">
                            <tr>
                                <td>ZONE</td>
                                <td>Price(Baht)</td>
                                <td>Available seat</td>
                            </tr>';
		foreach ($oConn->query("SELECT * FROM zone WHERE id_round = '$roundid'") as $aRow3) {
			$zoneid = $aRow3['id_zone'];
			echo	'<tr>
                        <td>'.$aRow3['name_zone'].'</td>
                        <td>'.$aRow3['price'].'</td>
                        <td>30</td>
                     </tr>';
		}
	}
	echo '</table></div>';
	$oConn = null;
?>

      
