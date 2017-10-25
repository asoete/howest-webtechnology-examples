<!--
Create a login form with a

    name field
    age field

Please validate if a user is older than 21.

Print an access granted or denied accordingly.

(Extra: Show error when a field is not filled...)

(Extra II: print how many years the user should wait before resubmitting the form...)
-->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Access Control</title>
   <style>
   	.error { color: darkred; }
   </style>
</head>
<body>

   <form action="#" method="get">
      Name:
      <input type="text" value="" name="name">
      <br>
      
      Age:
      <input type="text" value="" name="age">
      <br>
      
      <input type="submit" value="submit" name="submit">
   </form>

<?php

// if( isset($_REQUEST['submit']) ) {
if( isset($_GET['submit']) ) {

	echo "<hr>";
	$age_cutoff = 21;
	$has_errors = false;
	
	if( !isset( $_GET['name'] ) or empty( $_GET['name'] ) ) {
	
		echo '<p class="error">Please provide name</p>';
		$has_errors = true;
	}
	
	if( !isset( $_GET['age'] ) or empty( $_GET['age'] ) ) {
	
		echo '<p class="error">Please provide age</p>';
		$has_errors = true;
	}
	
	if( $has_erorrs === false ) {

		if( $_GET['age'] >= $age_cutoff ) {
	
			echo "Hello $_GET[name]. Access Granted!";
		}
		else {
	
			echo "<p>I'm sorry $_GET[name]. Access Denied!</p>";
			echo "<p>Please try again in ".
				( $age_cutoff - $_GET['age']).
				" years</p>";
		}
	}
}

?>






</body>
</html>

