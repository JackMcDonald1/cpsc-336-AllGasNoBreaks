<?php
//CPSC336 Database Connectivity Demo for PHP
//Professor Kreider
//based one example from https://www.w3schools.com/Php/php_mysql_connect.asp
echo("hello world, this is from php<br>");
$servername = "192.168.158.2";
$username   = "total";
$password   = "password";
$dbname     = "customercount";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed: ". $conn->connect_error);
}
echo "connected successfully <br>";
?>
