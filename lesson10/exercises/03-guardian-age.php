<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Access Control</title>
</head>
<body>

	<form action="#" method="post">

	<div>
		Name:
		<input type="text" name="name" value="">
	</div>
	
	<div>
		Age:
		<input type="number" name="age" value="">
	</div>

	<div>
		<input type="submit" name="submit" value="submit">
	</div>
	</form>
	
<?php

if(isset($_POST['submit'])) {

	echo "<hr>";

	$name = $_POST['name'];
	$age = $_POST['age'] ?? 0;

	if( $age >= 21 ) {

		echo "<div>";
			echo "ACCESS GRANTED";
		echo "</div>";
		echo "<div>";
			echo "Welcome $name.";
		echo "</div>";
	}
	else {

		echo "<div>";
			echo "ACCESS DENIED";
		echo "</div>";
		echo "<div>";
			echo "I'm sorry $name, please try again in " . 21 - $age . " years";
		echo "</div>";
	}
}

?>
	
</body>
</html>
