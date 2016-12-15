<?php
require_once 'config.php';
session_start();
$oConn = connect_db();
if($_GET['fname'] != null){
	$Fname = $_GET['fname'];
	$Lname = $_GET['lname'];
	$Email = $_GET['email'];
	$Pwd = $_GET['pwd'];
	$Address = $_GET['address'];
	$oConn->query("INSERT INTO account (Fname, Lname, email, address, password) VALUES ('$Fname', '$Lname','$Email','$Address','$Pwd')");
}
	foreach ($oConn->query('SELECT * FROM account') as $aRow) {
		if($_GET['email'] == $aRow['email'] && $_GET['pwd'] == $aRow['password']){
			$_SESSION["userid"] = $aRow['idaccount'];
			if($_GET['fname'] != null) echo "<script type='text/javascript'>alert('Registration was done, now you are loging in.'); </script>";
			header('Location: /admin.php');
		}
	}  
$oConn->execute();
?>

	
