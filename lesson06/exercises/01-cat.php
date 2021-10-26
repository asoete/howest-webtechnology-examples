<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Cat File</title>
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

		<input type="file" name="input_file">

		<input type="submit" name="submit" value="Upload File">
	
	</form>
	

<?php

if( isset($_POST['submit']) ) {

	// print_r( $_FILES );
	$filename = $_FILES['input_file']['name'];

	echo "<h1> File: <em>$filename</em> has contents:</h1>";

	echo "<pre>";
		echo file_get_contents( $_FILES['input_file']['tmp_name']);
	echo "</pre>";
}

?>

	
</body>
</html>
