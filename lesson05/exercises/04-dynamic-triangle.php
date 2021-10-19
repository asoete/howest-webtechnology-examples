<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Dynamic Triangle</title>
</head>
<body>

<?php

$def_base = $_GET['base'] ?? 10;
$def_sym = $_GET['symbol'] ?? "*";

?>

	<form action="#" method="get">

		<div>
			Enter base size:
			<input type="number" name="base" value="<?= $def_base ?>">
		</div>

		<div>
			Enter symbol:
			<input type="text" name="symbol" value="<?php echo $def_sym ?>">
		</div>

		<div>
			<input type="submit" name="submit">
		</div>

	</form>

<?php

if( isset( $_GET['submit'] ) ) {

	echo "<hr>";

	$base_width = $_GET['base'];

	for( $row_count=0; $row_count <= $base_width; $row_count++ ) {

		for( $sym_count=0; $sym_count < $row_count; $sym_count++ ) {

			echo $_GET['symbol'];
		}
		echo "<br>";
	}
}

?>
	
	
</body>
</html>
