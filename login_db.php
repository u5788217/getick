<?php

require_once 'config.php';

try {
    $oConn = new PDO('mysql:host='.$sHost.';dbname='.$sDb, $sUsername, $sPassword);
    $oConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	foreach ($oConn->query('SELECT * FROM account') as $aRow) {
        if($_GET['email'] == $aRow['email'] && $_GET['pwd'] == $aRow['password'])
		echo "Login done ".$aRow['Fname'];
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>

	
