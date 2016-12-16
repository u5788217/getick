<?php
require_once 'config.php';
session_start();
$oConn = connect_db();
if($_GET['fname'] != null){
	$id;
	$Fname = $_GET['fname'];
	$Lname = $_GET['lname'];
	$Email = $_GET['email'];
	$Pwd = $_GET['pwd'];
	$Address = $_GET['address'];
	foreach ($oConn->query("SELECT MAX(idaccount) FROM account") as $aRow) {
		$id = $aRow[0]+1;
	}
	$oConn->query("INSERT INTO account (idaccount,Fname, Lname, email, address, password) 
		VALUES ('$id','$Fname', '$Lname','$Email','$Address','$Pwd')");
}
	foreach ($oConn->query('SELECT * FROM account') as $aRow) {
		if($_GET['email'] == $aRow['email'] && $_GET['pwd'] == $aRow['password']){
			$_SESSION["userid"] = $aRow['idaccount'];
			if($_GET['fname'] != null) echo '<script language="javascript">
			alert("Registration was done, now you are loging in."); </script>';
			header('Location: /index.php');
		}
	}  
$oConn->execute();
?>

	
