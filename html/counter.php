<html>
<?php

include 'connect.php';


//$sql = "SELECT * from customers";
//$result = $conn->query($sql);

//$row = $result->fetch_assoc();
//$value = $row["customer_count"];


if(isset($_POST["button"])) {
//	$insert = "Insert into customers values ($value++)";
	$insert = "update customers set customer_count = customer_count+1";
//	echo $value;
	$conn->query($insert);
}

if(isset($_POST["subtract"]))	{
	$insert = "update customers set customer_count = customer_count-1";
	$conn->query($insert);
}

if(isset($_POST["reset"]))	{
	$insert = "update customers set customer_count=0";
	$conn->query($insert);
}

//$sql = "insert into customers value (2)";

// if(isset(["inc"])) {
// sql code
// $conn->query($sql code variable)

?>


<form>
	<input type="submit" name = "button" value="ADD">
	<input type="submit" name="subtract" value="subtract">
	<input type="submit" name="reset" value="reset">
</form>

</html>


