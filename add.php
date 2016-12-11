<?php 

include 'config.php';
   $oConn = connect_db();
$x = 1; 
while($x <= 56) {
    $oConn->query("INSERT INTO seat (id_seat,id_zone) VALUES ('$x', '40')");
    $x++;
}
$oConn = null;
?>


  
