<?php

// START webserver: php -S localhost:8080
// webroot == current working dir
// server searches index.html or index.php

/*
	<!-- types:
		- text
		- password
		- checkbox
		- radio
		- file
		- submit
		- hidden
	-->
*/

if( isset( $_GET['username']) ) {

	$username = $_GET['username'];
}
else {

	$username = 'hello';
}

?>

<h1> recap HTML and PHP </h1>

<form action="#" method="get">

	<label>
		Username:
		<input type="text" name="username" value="<?php echo $username ?>">
	</label>
	<br>
	<label>
		Remember me:
		<input type="checkbox" name="remme" checked>
	</label>
	
	<br>
	
	Male:
	<input type="radio" name="gender" value="male">
	Female:
	<input type="radio" name="gender" value="female" checked>
	
	<br>
	
	<input type="submit" value="Submit form" name="submit">
	
</form>
<?php


// http://localhost:8080/?username=hello&remme=on&gender=male&submit=Submit+form#

if( isset( $_GET['submit']) ) {

	echo $_GET['username'];
}

?>


