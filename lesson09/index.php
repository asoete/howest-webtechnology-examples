<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Forms</title>
</head>
<body>

	<form action="#" method="get">

		<input type="text" name="input1" value="">
	
		<input type="submit" value="Submit form" name="submit">

	</form>
	
<?php

	print_r( $_GET );
	print_r( $_POST );
	print_r( $_FILES );

?>
	
</body>
</html>
