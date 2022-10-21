<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Validate Passwords</title>
</head>
<body>

<?php if( !isset($_POST['submit']) ): ?>

	<form action="#" method="post">

		<div>
			Enter password
			<input type="password" name="pass" value="">
		</div>
		
		<div>
			Confirm password
			<input type="password" name="conf" value="">
		</div>

		<div>
			<input type="submit" name="submit" value="submit">
		</div>
	</form>

<?php

else:

$pass = $_POST['pass'];
$conf = $_POST['conf'];

if( $pass != $conf ) {

	echo "Passwords are not equal,";
}
elseif( strlen( $pass ) < 8 )  {

	echo "Password is to short";
}
else {

	echo "Good password!";
}

endif;

?>

	
	
</body>
</html>
