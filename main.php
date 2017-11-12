<!DOCTYPE html>
<html>
<body>
<?php
	echo "hello, world!";
	echo "mysql connect begin.";

	$con = mysqli_connect("127.0.0.1", "root", "hbk");
	if(!$con) {
		//die("error".mysql_error());
		echo "error!";
	}
	echo "mysql connect done!";
	if(!mysqli_select_db($con, "my_db"))
	{
		echo "error select db";
	}
	if(!mysqli_query($con, "INSERT INTO person(firstname, lastname, age) VALUES('peter', 'griffin', '35')"))
	{
		echo "error query";
	}
	if(!mysqli_query($con, "DELETE FROM person WHERE firstname='peter'"))
	{
		echo "error delete";
	}

	mysqli_close($con);
?>
<p>lldddddlllll</p>
</body>
</html>
