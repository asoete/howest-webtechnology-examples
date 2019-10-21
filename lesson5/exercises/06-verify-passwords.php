<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Validate Passwords</title>
</head>
<body>

<?php

if( isset($_POST['submit'] ) ) {

	// Handle user input
	echo "<pre>";
	print_r( $_POST );
	echo "</pre>";

	$errors = [];

	echo "<ul>";
	if( empty($_POST['password']) ) {

		echo "<li>Password is empty</li>";
		$errors[] = "Pass is empty";
	}

	if( $_POST['password'] !== $_POST['confirm']) {

		echo "<li>Passwords don't match.</li>";
		$errors[] = "Passwords don't match";
	}

	#$pass_arr = str_split( $_POST['password']);
	#$length = count( $pass_arr );
	$length = strlen( $_POST['password'] );

	if( $length < 8 ) {

		echo "<li>Password is to short. Should be at least 8 chars.</li>";
		$errors[] = "Pass to short";
	}


	if( !preg_match( '/[a-zA-Z]/', $_POST['password']) or !preg_match('/[0-9]/', $_POST['password']) ) {

		$errors[] = "Password must have letters and numbers";

	}

	echo "</ul>";

	/* print_r( $errors ); */

	if( !empty($errors) ) {
		echo "<ul>";
		foreach( $errors as $error ) {

			echo "<li>$error</li>";
		}
		echo "</ul>";
	}

}
else {
?>

	<form action="#" method="post">

		<input type="password" value="" name="password"> <br>
		<input type="password" value="" name="confirm"> <br>
		<input type="submit" value="Verify Passwords" name="submit">

	</form>
<?php
}
?>


</body>
</html>
