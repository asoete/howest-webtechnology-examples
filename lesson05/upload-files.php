<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Upload Files</title>
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

		<input type="file" name="file_1">

		<!-- <input type="file" name="file_2"> -->

		<input type="submit" name="submit" value="Upload files">
		

	</form>

<pre>
<?php

if( isset($_POST['submit']) ) {

	print_r($_POST);
	print_r($_FILES);

	$tmp_filename = $_FILES['file_1']['tmp_name'];
	echo file_get_contents( $tmp_filename );
	print_r( file( $tmp_filename ) );

	move_uploaded_file( $tmp_filename, '.../my.new/location');
}
	
?>
	
</pre>
</body>
</html>
