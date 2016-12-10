<?php
function connect_db(){
    $host = 'ap-cdbr-azure-southeast-b.cloudapp.net';
    $database_name = 'getick_database';
    $user = 'b10af5bf5dcca9';
    $pass = '65a62b24';
    try{
        $conn = new PDO("mysql:host=$host;dbname=$database_name;charset=utf8", $user, $pass);
        $conn->exec("set names utf8");
        return $conn;
    }
    catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
?>
