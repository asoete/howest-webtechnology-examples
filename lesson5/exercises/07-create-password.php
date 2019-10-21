<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Create Random  password</title>
</head>
<body>

<pre>
<?php

	$input_str = "0123456789abcdefghijklmnopqrstuvwxyzA-Z$%";
	$input_arr = str_split($input_str);
	print_r( $input_arr );
	$nrof_chars_in_pass = 12;
	echo count( $input_arr ) . "\n";
	$max_index = count( $input_arr ) - 1; // zero based index

	for( $i=0; $i < $nrof_chars_in_pass; $i++ ) {

		$index = rand( 0, $max_index );
		echo $input_arr[ $index ];
	}
?>

</pre>
</body>
 </html>
