<!DOCTYPE html>
<html>
<head>
   <meta>
   <title>Recap I/O</title>
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

		<input type="file" name="our_file">

		<input type="submit" name="submit" value="Upload File">

	</form>

<pre>
	
<?php

if( isset($_POST['submit']) ) {


	print_r( $_POST );

	print_r( $_FILES );

	print( $_FILES['our_file']['tmp_name'] . "\n" );
	$array_of_lines_in_file = file( $_FILES['our_file']['tmp_name'] );
	$string_blob = file_get_contents( $_FILES['our_file']['tmp_name'] );
}

?>

</pre>
	
</body>
</html>
