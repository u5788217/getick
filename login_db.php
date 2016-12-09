<?php

require_once 'config.php';

try {
	$_GET['email'];
	$_GET['pwd'];
    $oConn = new PDO('mysql:host='.$sHost.';dbname='.$sDb, $sUsername, $sPassword);
    $oConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	foreach ($oConn->query('SELECT * FROM account') as $aRow) {
        echo $aRow['userid'].$aRow['name']."<br>";
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>

	