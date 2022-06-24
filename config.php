<?php
// error_reporting(0);
$databaseHost = 'localhost';
$databaseName = 'lab05';
$databaseUsername = 'root';
$databasePassword = '';


function mysql($host, $username, $pass, $dbname){
   $sql = mysqli_connect($host, $username, $pass, $dbname); 
    return $sql ;
}

$mysqli= mysql($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>
