<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Upload files</title>
</head>
<body>

<form action="#" method="post" enctype="multipart/form-data">

	<input type="file" name="file_to_process">
	<input type="file" name="file2">
	<input type="submit" value="Process file" name="submit">

</form>

<pre>
<?php

if( isset( $_POST['submit']) ) {

	echo "Start processing the file\n";

	print_r( $_POST );
	print_r( $_FILES );

	print_r( file( $_FILES['file_to_process']['tmp_name'] ) );
}

?>
</pre>

</body>
</html>
