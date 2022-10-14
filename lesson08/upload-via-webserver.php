<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Upload a FILE</title>
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

	<input type="file" name="our-file-to-upload" value="">
	<input type="file" name="file-upload-2" value="">

	<input type="submit" value="submit" name="">

	</form>
	
<pre>
<?php

	print_r($_GET);
	print_r($_POST);
	print_r($_FILES);

	echo file_get_contents( $_FILES['our-file-to-upload']['tmp_name'] );

	print_r( file( $_FILES['file-upload-2']['tmp_name'] ) );

	//foreach( $lines ) {
	//	...
	//	foreach(str_split($line))...
	//}

?>
</pre>
	
</body>
</html>
