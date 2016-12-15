<?php
include 'config.php';
$oConn = connect_db();
   echo '<li><div style="width:940px">
                        <h3>All concert lists</h3>
                        <h4>click concerts name to show available seat</h4>
                        <table border="1" style="width:850px; margin-left:50px;"><tr><th>ID</th><th>Name</th><th>Date</th><th>Time</th></tr>';
                        foreach ($oConn->query("SELECT * FROM concert INNER JOIN round ON concert.id_concert = round.id_concert") as $aRow) {
                            echo '<tr><td>'.$aRow['id_round'].'</td><td><a href="#">'.$aRow['name_concert'].'</a></td><td> '
                               .$aRow['date'].'</td><td>'.$aRow['time'].'</td></tr>';
                        }
                  echo'</table></div></li>';
$oConn = null;
?>
