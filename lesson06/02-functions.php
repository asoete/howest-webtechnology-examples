<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Functions</title>
</head>
<body>
<?php

html_print_r( $_GET );
html_print_r( $_POST );
html_print_r( $_FILES );

?>
</body>
</html>
<?php

function html_print_r( $array ){

	echo "<pre>";
		print_r( $array );
	echo "</pre>";
}

?>
