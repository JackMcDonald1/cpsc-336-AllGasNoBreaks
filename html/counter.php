<html>
<?php

include 'connect.php';


//$sql = "SELECT * from customers";
//$result = $conn->query($sql);

//$row = $result->fetch_assoc();
//$value = $row["customer_count"];


if(isset($_POST["button"])) {
	//$insert = "Insert into customers values ($value++)";
	$insert = "update customers set customer_count = customer_count+1";
//	echo $value;
	$conn->query($insert);
}




// if(isset(["inc"])) {
// sql code
// $conn->query($sql code variable)

?>
<form method="POST">
	<input type="submit" name = "button" value="ADD">
	<input type="submit" value="createname">
	<input type="submit" value="createname">
</form>

</html>


