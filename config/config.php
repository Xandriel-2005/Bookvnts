<?php
session_start();
//error_reporting(0);
//Database Connection
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='event_bkin_db';

$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
	die('Database not connected!'.mysqli_connect_error());
}
//echo "Database Connected";
?>