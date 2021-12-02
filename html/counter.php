<html>
<?php

include 'connect.php';
$sql = "select customer_count from customers";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<br>Total customer count is: " .$row["customer_count"]. "<br>";
	
if(isset($_POST["INSERT"])) {
	$insert = "update customers set customer_count = customer_count+1";
	$ins = $conn->query($insert);
//	echo "<br> Total customer count is: " .$row["customer_count"]."<br>";
}
			

if(isset($_POST["subtract"]))	{
	$subtract = "UPDATE customers SET customer_count = customer_count-1";
	$sub = $conn->query($subtract);
				
//	echo "<br> Total customer count is: " .$row["customer_count"]."<br>";
}

if(isset($_POST["reset"]))	{
	$reset = "UPDATE customers SET customer_count=0";
	$res = $conn->query($reset);
//	echo "<br> Total customer count is: " .$row["customer_count"]."<br>";
}

//if(isset($_POST["INSERT"]) || isset($_POST["subtract"]) || isset($_POST["reset"])) {
//	echo "<br> Total customer count is: " .$row["customer_count"]."<br>";
//}
?>


<form method="post">
	<input type="submit" name = "INSERT" value="ADD"/>
	<input type="submit" name="subtract" value="SUBTRACT"/>
	<input type="submit" name="reset" value="RESET"/>
</form>

</html>


