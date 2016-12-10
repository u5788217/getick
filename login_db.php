<?php
require_once 'config.php';
session_start();
$oConn = connect_db();
	foreach ($oConn->query('SELECT * FROM account') as $aRow) {
		if($_GET['email'] == $aRow['email'] && $_GET['pwd'] == $aRow['password']){
			$_SESSION["userid"] = $aRow['idaccount'];
			header('Location: /index.php');
		}
	}  	
?>

	
