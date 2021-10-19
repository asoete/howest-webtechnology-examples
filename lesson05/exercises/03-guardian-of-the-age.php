<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Guardian of the age</title>
	<style type="text/css">
		.error {color: darkred; }
	</style>
	
</head>
<body>

<?php

$def_name = "";
if( isset( $_GET['name'] ) ) {
	$def_name = $_GET['name'];
}

$def_age = $_GET['age'] ?? 0;

?>

	<form action="#" method="get">

		<div>
		Name: <input type="text" name="name" value="<?= $def_name ?>">
		</div>
		<div>
		Age: <input type="number" name="age" value="<?= $def_age ?>">
		</div>
		<div>
			<input type="submit" name="submit">
		</div>

	</form>
	
<?php

if(isset( $_GET['submit'] ) ) {

	echo "<hr>";

	$age = $_GET['age'];

	// echo "AGE: $age <br>";

	if( empty( $_GET['name']) ) {

		echo '<div class="error">';
			echo "No name provided";
		echo "</div>";
	}
	elseif( empty( $_GET['age'] ) ) {

		echo '<div class="error">';
			echo "No age provided";
		echo "</div>";
	}
	elseif( $age > 21 ) {

		echo "Hello $_GET[name], ACCESS GRANTED";
	}
	else {

		echo "I'm sorry $_GET[name], ACCESS DENIED<br>";
		echo "Try again in " . ( 21 - $age ) . " years...";
	}
}

?>
	
</body>
</html>
