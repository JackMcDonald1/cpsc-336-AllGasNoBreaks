<html>


<?php
include 'connect.php';
//CPSC336 Database Connectivity Demo for PHP
//Professor Kreider
//based one example from https://www.w3schools.com/Php/php_mysql_connect.asp
if ($conn->connect_error) {
	die("connection failed: " .$conn->connect_error);
}
$sql1 = "update customer by adding 1 to the total customer value";
echo $sql1;
if ($conn->query($sql1) === TRUE) {
	echo "record has been updates usccesfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$sql = "delete from customer by subtracting value from total";
if ($conn->query($sql) === TRUE) {
	echo "record deleted successfully";
} else {
  echo "error deleting record: " .$conn->error;
}
$conn->close();
?>
</div>

<form method=post>
	<input type="submit" name="sql1" value="sql1"/>
	<input type="submit" name="sql" value="sql"/>

</form>
</html>

