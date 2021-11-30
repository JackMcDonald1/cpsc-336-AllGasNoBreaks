<html>
<?php

include 'connect.php';


$sql = "SELECT * from customers;";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$value = $row["Customer_count"];

// if(isset(["inc"])) {
// sql code
// $conn->query($sql code variable)


?>
<form method="post">
	<input type="submit" value="createname">
	<input type="submit" value="createname">
	<input type="submit" value="createname">
</form>
</html>


