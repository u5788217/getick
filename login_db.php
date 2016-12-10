<?php
require_once 'config.php';
session_start();
try {
    $oConn = new PDO('mysql:host='.$sHost.';dbname='.$sDb, $sUsername, $sPassword);
    $oConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	foreach ($oConn->query('SELECT * FROM account') as $aRow) {
        	if($_GET['email'] == $aRow['email'] && $_GET['pwd'] == $aRow['password']){
			$_SESSION["userid"] = $aRow['idaccount'];
			header('Location: /index.php');
		}
    	}
     $oConn = null;
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>

	
