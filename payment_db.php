<?php
include 'config.php';

$tickets = $_GET['ticket'];
$number = sizeof($tickets);
$oConn = connect_db();
$roundID = array(); 
$seatID = array();
for($x = 0; $x < $number; $x++){
	$seat = explode(" ", $tickets[$x]);
	array_push($seatID,$seat[0]);
	array_push($roundID,$seat[1]);
}  
foreach ($oConn->query('SELECT * FROM concert') as $aRow) {
        	$conid = $aRow['id_concert'];
		echo '<li>
     <a href="blog-single-post.html" class="figure">
      <img src="images/concert/2Linkin-Park.png" alt="">
     </a>
     <div>
      <h3>Linkin Park</h3>
                        <h2>Date: 20 Jan 2017 ,Time: 10:00 ~ 15:00</h2>
                        <a>===================================================</a>
                        <h2>Selected seat: A20 A21</h2>
                        <h2>Total price: 10000 Baht</h2>
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
                                    <br><input type="radio" id="payment-1" name="pay-credit">
                                </td>
                                <td>
                                    <h2>Cash payment and ATM</h2>
                                    <img src="images/payment-02.png" style="width:100px; height:70px; margin-left:110px;">
                                    <br><input type="radio" id="payment-2" name="pay-cash">
                                </td>
                                <td>
                                    <h2>Mobile payment</h2>
                                    <img src="images/payment-03.png" style="width:100px; height:70px;">
                                    <br><input type="radio" id="payment-3" name="pay-mobile">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <input type="button" value="CONFIRM" name="BOOK">
                    </div>
                </li>';
	}
	$oConn = null;
?>
