<?php
include 'config.php';
   $oConn = connect_db();
   $roundid = $_GET['roundid'];
	foreach ($oConn->query("SELECT * FROM round WHERE id_round = '$roundid'") as $aRow) {
		$conid = $aRow['id_concert'];
		foreach ($oConn->query("SELECT * FROM concert WHERE id_concert = '$conid'") as $aRow2) {
			echo	'<li><a href="" class="figure"><img src="'.$aRow2['poster_concert'].'" alt=""></a>
			<div><h3>'.$aRow2['name_concert'].'</h3><p style="margin:0; padding:0;">'.$aRow2['des_concert'].'</p>';
		}
		echo '<h2>'.$aRow['date'].'<br> Time: '.$aRow['time'].'</h2><table border=1 style="width:300px; margin-left: 130px;">
                            <tr>
                                <td>ZONE</td>
                                <td>Price(Baht)</td>
                                <td>Available seat</td>
                            </tr>';
		foreach ($oConn->query("SELECT * FROM zone WHERE id_round = '$roundid'") as $aRow3) {
			$zone = $aRow3['id_zone'];
			echo '<tr>
                        <td id="'.$aRow3['name_zone'].'">'.$aRow3['name_zone'].'</td>
                        <td id="'.$aRow3['name_zone'].'">'.$aRow3['price'].'</td>
			<td id="'.$aRow3['name_zone'].'">';
			foreach ($oConn->query("SELECT COUNT(*) AS number FROM seat WHERE id_zone = '$zone' AND id_booking is null ")as $aRow4) {
				echo $aRow4['number'].'</td></tr>';
			}
		}
	}
	echo '</table></div></li><li><div style="width: 940px;" class="seat-style"><table>';
	$zoneid[4]; 
	$l=0;
  	foreach ($oConn->query("SELECT * FROM zone WHERE id_round = '$roundid'") as $aRow3) {
		$zoneid[$l] = $aRow3['id_zone'];
		$l++;
	}
	switch ($roundid) {
		case 1:case 2:case 6:case 10:case 14:case 15:
                	for($i=1; $i<=8; $i++){
                    		switch ($i) {
                        		case 1:
                            			echo '<tr><td colspan="6"></td><td colspan="8" style="background-color: white;">STAGE</td>
                            			<td colspan="6"></td></tr>'; break;
					case 2:case 4:case 6:case 8:
                            			echo '<tr><td colspan="20"></td></tr>'; break;
                        		case 3:
					     	echo '<tr><td colspan="1"></td>';
					    	foreach ($oConn->query("SELECT * FROM seat WHERE id_zone = '$zoneid[0]'") as $aRow) {
							$j=$aRow['id_seat'];
							if($j==8 || $j==22 || $j==36 || $j==50){echo '<td colspan="4"></td>';}
							if($aRow['id_booking'] == NULL){
								echo '<td id="A">A'.$aRow['id_seat'].'<br><input type="checkbox" value="'.$aRow['id_seat'].' A" onchange="showCheck(this.value)" ></td>';
							} 
						   	else {echo '<td id="Ac">A'.$aRow['id_seat'].'<br></td>';}
							if($j%14==0) {
								if($j == 56) echo '<td colspan="1"></td>';
								else echo '<td colspan="1"></td><tr><td colspan="1"></td>';
							}
						}
					    	echo '</tr>'; break;
                        		case 5:
                            			echo '<tr><td colspan="1"></td>';
						foreach ($oConn->query("SELECT * FROM seat WHERE id_zone = '$zoneid[1]'") as $aRow) {
							$j=$aRow['id_seat'];	
							if($j==9 || $j==25 || $j==41 || $j==57 || $j==73 || $j ==89){echo '<td colspan="2"></td>';}
							if($aRow['id_booking'] == NULL){
								echo '<td id="B">B'.$aRow['id_seat'].'<br><input type="checkbox" value="'.$aRow['id_seat'].'"></td>';
							}   
							else{echo '<td id="Bc">B'.$aRow['id_seat'].'<br></td>';}
							if($j%16==0) {
								if($j == 96) echo '<td colspan="1"></td>';
								else echo '<td colspan="1"></td><tr><td colspan="1"></td>';
							}
                            			}	
                            			echo '</tr>'; break;
                        		case 7:
                            			echo '<tr><td colspan="1"></td>';
                            			foreach ($oConn->query("SELECT * FROM seat WHERE id_zone = '$zoneid[2]'") as $aRow) {
							$j=$aRow['id_seat'];
							if($aRow['id_booking'] == NULL){
								echo '<td id="C">C'.$aRow['id_seat'].'<br><input type="checkbox" value="'.$aRow['id_seat'].'"></td>';
							}
							else{echo '<td id="Cc">C'.$aRow['id_seat'].'<br></td>';}
							if($j%18==0) {
								if($j == 90) echo '<td colspan="1"></td>';
								else echo '<td colspan="1"></td><tr><td colspan="1"></td>';
							}
                            			}
                            			echo '</tr>'; break;                         
                      		}//for switch
			}//for i++;
  		break;
		 case 3:case 7: case 11:
            for($i=1; $i<=8; $i++){
                    		switch ($i) {
                        		case 1:
                            			echo '<tr><td colspan="6"></td><td colspan="8" style="background-color: white;">STAGE</td>
                            			<td colspan="6"></td></tr>'; break;
				case 2:case 4:case 6:case 8:
                            			echo '<tr><td colspan="20"></td></tr>'; break;
                        		case 3:
					     	echo '<tr><td colspan="1"></td>';
					    	foreach ($oConn->query("SELECT * FROM seat WHERE id_zone = '$zoneid[0]'") as $aRow) {
							$j=$aRow['id_seat'];
							if($j==7 || $j==11 || $j==23 || $j==27 || $j==39 || $j==43 || $j==55 || $j==59 || $j==71 || $j==75 || $j==87 || $j==91 || $j==103 || $j==107 || $j==119 || $j==123){
                                echo '<td colspan="1"></td>';}
							if($aRow['$id_booking'] == NULL){
								echo '<td id="A">A'.$aRow['id_seat'].'<br><input type="checkbox" value="'.$aRow['id_seat'].'"></td>';
							} 
						   	else {echo '<td id="Ac">A'.$aRow['id_seat'].'<br></td>';}
							if($j%16==0) {
								if($j == 128) echo '<td colspan="1"></td>';
								else echo '<td colspan="1"></td><tr><td colspan="1"></td>';
							}
						}
					    	echo '</tr>'; break;
                        		case 5:
                            			echo '<tr><td colspan="1"></td>';
						foreach ($oConn->query("SELECT * FROM seat WHERE id_zone = '$zoneid[1]'") as $aRow) {
							$j=$aRow['id_seat'];	
							if($j==9 || $j==25 || $j==41){echo '<td colspan="2"></td>';}
							if($aRow['id_booking'] == NULL){
								echo '<td id="B">B'.$aRow['id_seat'].'<br><input type="checkbox" value="'.$aRow['id_seat'].'"></td>';
							}   
							else{echo '<td id="Bc">B'.$aRow['id_seat'].'<br></td>';}
							if($j%16==0) {
								if($j == 48) echo '<td colspan="1"></td>';
								else echo '<td colspan="1"></td><tr><td colspan="1"></td>';
							}
                            			}	
                            			echo '</tr>'; break;
                        		case 7:
                            			echo '<tr><td colspan="1"></td>';
                            			foreach ($oConn->query("SELECT * FROM seat WHERE id_zone = '$zoneid[2]'") as $aRow) {
							$j=$aRow['id_seat'];
							if($aRow['id_booking'] == NULL){
								echo '<td id="C">C'.$aRow['id_seat'].'<br><input type="checkbox" value="'.$aRow['id_seat'].'"></td>';
							}
							else{echo '<td id="Cc">C'.$aRow['id_seat'].'<br></td>';}
							if($j%18==0) {
								if($j == 72) echo '<td colspan="1"></td>';
								else echo '<td colspan="1"></td><tr><td colspan="1"></td>';
							}
                            			}
                            			echo '</tr>'; break;                         
                      		}//for switch
			}//for i++;
  		break;
        case 4:case 5: case 8:case 9:case 12: case 13:
            for($i=1; $i<=9; $i++){
                    		switch ($i) {
                        		case 1:
                            			echo '<tr><td colspan="6"></td><td colspan="8" style="background-color: white;">STAGE</td>
                            			<td colspan="6"></td></tr>'; break;
                                case 2:case 4:case 6:case 8:case 9:
                            			echo '<tr><td colspan="20"></td></tr>'; break;
                        		case 3:
					     	echo '<tr><td colspan="4"></td>';
					    	foreach ($oConn->query("SELECT * FROM seat WHERE id_zone = '$zoneid[0]'") as $aRow) {
							$j=$aRow['id_seat'];
							if($aRow['$id_booking'] == NULL){
								echo '<td id="A">A'.$aRow['id_seat'].'<br><input type="checkbox" value="'.$aRow['id_seat'].'"></td>';
							} 
						   	else {echo '<td id="Ac">A'.$aRow['id_seat'].'<br></td>';}
							if($j%12==0) {
								if($j == 36) echo '<td colspan="4"></td>';
								else echo '<td colspan="4"></td><tr><td colspan="4"></td>';
							}
						}
					    	echo '</tr>'; break;
                        		case 5:
                            			echo '<tr><td colspan="1"></td>';
						foreach ($oConn->query("SELECT * FROM seat WHERE id_zone = '$zoneid[1]'") as $aRow) {
							$j=$aRow['id_seat'];	
							if($j==9 || $j==25 || $j==41 || $j==57 || $j==73){echo '<td colspan="2"></td>';}
							if($aRow['id_booking'] == NULL){
								echo '<td id="B">B'.$aRow['id_seat'].'<br><input type="checkbox" value="'.$aRow['id_seat'].'"></td>';
							}   
							else{echo '<td id="Bc">B'.$aRow['id_seat'].'<br></td>';}
							if($j%16==0) {
								if($j == 80) echo '<td colspan="1"></td>';
								else echo '<td colspan="1"></td><tr><td colspan="1"></td>';
							}
                            			}	
                            			echo '</tr>'; break;
                        		case 7:
                            			echo '<tr><td colspan="2"></td>';
                            			foreach ($oConn->query("SELECT * FROM seat WHERE id_zone = '$zoneid[2]'") as $aRow) {
							$j=$aRow['id_seat'];
							if($aRow['id_booking'] == NULL){
								echo '<td id="C">C'.$aRow['id_seat'].'<br><input type="checkbox" value="'.$aRow['id_seat'].'"></td>';
							}
							else{echo '<td id="Cc">C'.$aRow['id_seat'].'<br></td>';}
							if($j%16==0) {
								if($j == 96) echo '<td colspan="2"></td>';
								else echo '<td colspan="2"></td><tr><td colspan="2"></td>';
							}
                            			}
                            			echo '</tr>'; break;                         
                      		}//for switch
			}//for i++;
  		break;
	}//for round id		
        echo '</table></div></li>';	
	$oConn = null;
?>
