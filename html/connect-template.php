<?php
//CPSC336 Database Connectivity Demo for PHP
//Professor Kreider
//based one example from https://www.w3schools.com/Php/php_mysql_connect.asp
echo("hello world, this is from php<br>");
$servername = "";
$username   = "";
$password   = "";
$dbname     = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed: ". $conn->connect_error);
}
echo "connected successfully <br>";
$sql = "SELECT user,pass FROM users";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
		echo "user: ".$row["user"]." password: ".$row["pass"]."<br>";
	}
}else{
	echo "no username or login was bad<br>";
}

?>
