<?php

if( isset( $_POST['submit'] ) ) {

	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$has_errors = false;
	
	if( $pass1 != $pass2 ) {
	
		$has_errors = true;
		echo "Passwords are not equal.<br>";
	}
	
	if( strlen( $pass1 ) < 8 ) {
	
		$has_errors = true;
		echo "Password must be at least 8 characters long.<br>";
	}
	
	if( !preg_match('/[a-z]+/', $pass1) or !preg_match('/[0-9]+/', $pass1) ) {
	
		$has_errors = true;
		echo "Password must contain at least one character and number.<br>";
	}


	if( $has_errors === false ) {
	
		echo "Password passed tests.";
	}
	
}

?>

<form action="#" method="post">

	<label>
		Password 1:
		<input type="password" name="pass1">
	</label>
	<br>
	<label>
		Password 2:
		<input type="password" name="pass2">
	</label>
	<br>
	<input type="submit" name="submit">

</form>

