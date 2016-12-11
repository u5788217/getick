<?php 

include 'config.php';
   $oConn = connect_db();
$x = 3; 
while($x <= 56) {
    $r = $x.'A';
    $oConn->query('INSERT INTO seat (id_seat,id_zone) VALUES ($r, 1)');
     echo $r;
    $x++;
} 
$oConn = null;
?>


  
