<?php //enthält nur php, daher kein closing-tag

$dbServername = "localhost"; 
$dbUsername = "root";
$dbPassword = "";
$dbName = "arbeitszeiterfassung";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); 

if (!$conn) { //wenn die connection failed
    die("Die Verbindung konnte nicht aufgebaut werden: " . mysqli_connect_error());
}