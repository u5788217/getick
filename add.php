<?php 

include 'config.php';
   $oConn = connect_db();
$x = 109; 
while($x <= 128) {
    $oConn->query("INSERT INTO seat (id_seat,id_zone) VALUES ('$x', '31')");
    $x++;
}

$oConn = null;
?>


  
