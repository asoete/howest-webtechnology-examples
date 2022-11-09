<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Cat file</title>
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

		<input type="file" name="input-file" value="">

		<input type="submit" name="submit" value="Cat file">

	</form>
	
<?php

if( isset( $_POST['submit']) ) {

	# dump( $_POST );
	# dump( $_FILES );

	echo "<h1>Received file: ". $_FILES['input-file']['name'] . "</h1>";

	echo "<pre>";
	echo file_get_contents( $_FILES['input-file']['tmp_name']);
	echo "</pre>";
}

?>
	
</body>
</html>


<?php

function dump( $array ) {
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}





