<html>
<?php

include 'connect.php';


$sql = "SELECT * from customers;";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$value = $row["Customer_count"];


if(isset(["increase"])) {
	$sql1="insert into customers values ($result++);"
	$conn->query($sql1)
}




// if(isset(["inc"])) {
// sql code
// $conn->query($sql code variable)
echo $sql;
echo $sql1;

?>
<form method="post">
	<input type="submit" value="increase">
	<input type="submit" value="createname">
	<input type="submit" value="createname">
</form>

</html>


