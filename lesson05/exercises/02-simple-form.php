<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Simple Form</title>
	<style type="text/css">
	form div {

		padding: 0.5em;
	}
	</style>
	
</head>
<body>

<?php if( isset( $_POST['submit']) ):

echo "<pre>";
	print_r( $_POST );
echo "</pre>";

	echo "<h2>The following data was submitted:</h2>";

	echo "<ul>";
		echo "<li> <b>First name:</b> $_POST[fname] </l>";
		echo "<li> <b>Last name:</b> $_POST[lname] </l>";
		echo "<li> <b>Gender:</b> $_POST[gender] </l>";
		echo "<li> <b>Email:</b> $_POST[email] </l>";
		echo "<li> <b>Password:</b> $_POST[pass] </l>";
		echo "<li> <b>receive newsletter:</b> $_POST[receive_newsletter] </l>";
	echo "</ul>";

	echo '<a href="02-simple-form.php">Resubmit form</a>';

else:
?>

	<!-- <li> <b>First name:</b> <?= $_POST['fname'] ?> </li> -->
	

	<h1>Fill in the form to subscribe to the service</h1>

	<form action="#" method="post">

	<div>
		First Name:
		<input type="text" name="fname">
	</div>
	
	<div>
		Last Name:
		<input type="text" name="lname">
	</div>

	<div>
		Male:
		<input type="radio" name="gender" value="male">
		Female:
		<input type="radio" name="gender" value="female">
	</div>

	<div>
		Email
		<input type="email" name="email">
	</div>

	<div>
		Password
		<input type="password" name="pass">
	</div>

	<div>
		<input type="checkbox" name="receive_newsletter">
		I want to receive newsletter updates 
	</div>

	<div>
		<input type="submit" name="submit" value="Submit Simple Form">
	</div>

	</form>

<?php endif ?>
	
	
</body>
</html>
