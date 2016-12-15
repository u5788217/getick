<?php
include 'config.php';

$tickets = $_GET['ticket'];
$number = sizeof($tickets);
$oConn = connect_db();
$zoneID = array(); 
$seatID = array();
for($x = 0; $x < $number; $x++){
	$seat = explode(" ", $tickets[$x]);
	array_push($seatID,$seat[0]);
	array_push($zoneID,$seat[1]);
}  
$roundid;
$total = 0;
$conid;
$date;
$time;
$conname;
$poster;
$seatprint = array();
for($x = 0; $x < sizeof($zoneID); $x++){
	$z = $zoneID[$x];
	foreach ($oConn->query("SELECT * FROM zone WHERE id_zone = '$z'") as $aRow) {
		$total += $aRow['price'];
		array_push($seatprint,$aRow['name_zone'].$seatID[$x]);
		$roundid = $aRow['id_round'];
	}
}
foreach ($oConn->query("SELECT * FROM round WHERE id_round = '$roundid'") as $aRow2) {
	$conid = $aRow2['id_concert'];
	$date = $aRow2['date'];
	$time = $aRow2['time'];
}	
foreach ($oConn->query("SELECT * FROM concert WHERE id_concert = '$conid'") as $aRow3) {
        $conname = $aRow3['name_concert'];
	$poster = $aRow3['poster_concert'];
}

echo '<form method="get" action="updateseat.php"><li>
     <a href="" class="figure">
      <img src='.$poster.' alt="">
     </a>
     <div>
      <h3>'.$conname.'</h3>
                        <h2>Date: '.$date.' ,Time: '.$time.'</h2>
                        <a>===================================================</a>
                        <h2>Selected seat: ';
		for($x = 0; $x < sizeof($seatprint); $x++){
			echo 	$seatprint[$x]." ";
		}
			echo '</h2>
                        <h2>Total price: '.$total.' Baht</h2>
     </div>
    </li>
                <li>
	
                    <div style="width:940px">
                        <h3>Please select your payment method</h3>
			
                        <table style="width:850px; margin-left:50px;">
                            <tr>
                                <td> 	
                                    <h2>Credit card payment</h2>
                                    <img src="images/payment-01.png" style="width:100px; height:70px;">
                                    <br><input type="radio" name="payment" value="Credit card payment">
                                </td>
                                <td>
                                    <h2>Cash payment and ATM</h2>
                                    <img src="images/payment-02.png" style="width:100px; height:70px; margin-left:110px;">
                                    <br><input type="radio" name="payment" value="Cash payment and ATM">
                                </td>
                                <td>
                                    <h2>Mobile payment</h2>
                                    <img src="images/payment-03.png" style="width:100px; height:70px;">
                                    <br><input type="radio" name="payment" value="Mobile payment">
                                </td>
                            </tr>
			    <br>';
			    for($x = 0; $x < sizeof($seatID); $x++){
			echo 	'<input hidden type="text" name="seat[]" value="'.$seatID[$x].'">'; 
			}	
			echo 	'<input hidden type="text" name="total" value="'.$total.'">
			<input type="submit" value="CONFIRM">
                        </table>
                    </div>
                </li></form>';
	$oConn = null;
?>
