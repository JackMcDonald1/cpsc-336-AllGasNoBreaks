<html>
<?php

include 'connect.php';


$sql = "SELECT * from customers";
$result = $conn->query($sql);

//$row = $result->fetch_assoc();
//$value = $row["customer_count"];


if(isset($_POST["INSERT"])) {
//	$insert = "Insert into customers values ($value++)";
//	$sql = "SELECT * from customers";
//	$result = $conn->query($sql);
	$insert = "INSERT INTO customers (customers_count) VALUES (1)";
	$conn->query($insert);
}

if(isset($_POST["subtract"]))	{
	$insert = "UPDATE customers SET customer_count = customer_count-1";
	$conn->query($insert);
}

if(isset($_POST["reset"]))	{
	$insert = "UPDATE customers SET customer_count=0";
	$conn->query($insert);
}

//$sql = "insert into customers value (2)";

// if(isset(["inc"])) {
// sql code
// $conn->query($sql code variable)

?>


<form>
	<input type="submit" name = "INSERT" value="ADD">
	<input type="submit" name="subtract" value="SUBTRACT">
	<input type="submit" name="reset" value="RESET">
</form>

</html>


