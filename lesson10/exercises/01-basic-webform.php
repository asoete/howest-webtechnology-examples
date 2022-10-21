<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Web Form</title>
	<style type="text/css">
		div {
			padding: 0.5em 1em;
		}
	</style>
	
</head>
<body>

<?php if(!isset($_POST['submit'])): ?>

<h1>Fill in the form to subscribe to the service</h1>

	<form action="#" method="post">
		<div>
			Firstname:
			<input type="text" name="firstname">
		</div>
		
		<div>
			Lastname:
			<input type="text" name="lastname">
		</div>
		
		<div>
			<input type="radio" name="gender" value="male">
			Male
			<input type="radio" name="gender" value="female">
			Female
		</div>

		<div>
			Email:
			<input type="email" name="email">
		</div>

		<div>
			Password:
			<input type="password" name="password">
		</div>

		<div>
			<input type="checkbox" name="newsletter" value="">
			Receive newsletter.
		</div>
		
		<div>
			<input type="submit" value="Submit" name="submit">
		</div>
	</form>

<?php

else:

	echo "<h2>Data:</h2>";

	echo "<ul>";

		echo "<li> $_POST[firstname] </li>";
		echo "<li> $_POST[lastname] </li>";

		foreach( $_POST as $name => $value ) {

			echo "<li> <strong>$name</strong>: $value </li>";
		}

	echo "</ul>";

	echo '<a href="01-basic-webform.php">Refill form</a>';

endif;

?>

	
</body>
</html>
