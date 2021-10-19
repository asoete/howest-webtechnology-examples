<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Password Validation</title>
</head>
<body>

<?php

$errors = [];

if( isset( $_POST['submit']) ) {

	$password = $_POST['password'];
	$confirmation = $_POST['confirmation'];

	if( $password !==  $confirmation ) {

		$errors[] = "Passwords are not equal";
	}

	if( strlen($password) < 8 ) {

		$errors[] = "Password is -lt 8 chars";
	}

	// if( !preg_match('/\w+/', $password) or !preg_match('/\d+/', $password)) {

	// 	$errors[] = "Letter AND number are required..."
	// }

}

if( !empty($errors) ) {

	echo "<p>We found " . count( $errors ) . " errors...</p>";

	echo '<ol style="color: red">';
	foreach( $errors as $error ) {

		echo "<li>$error</l>";
	}
	echo "</ol>";
}
else {

	echo "Valid password!";
}


?>

	<form action="#" method="post">
		<div>
			<input type="password" name="password">
		</div>
		<div>
			<input type="password" name="confirmation">
		</div>
		<div>
			<input type="submit" name="submit" value="Validate Passwords">
		</div>
	</form>
	
	
</body>
</html>
