<?php

$base = $_GET['base'] ?? 10;
// if( isset($_GET['base']) ) {
// 	$base = $_GET['base'];
// }else{
// 	$base = 10;
// }

$char = $_GET['char'] ?? '*';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Dynamic Triangles</title>
</head>
<body>
	
	<form action="#" method="get">

		<div>
			Base size
			<input type="number" name="base" value="<?= $base ?>">
		</div>
		
		<div>
			Char:
			<input type="text" name="char" value="<?= $char ?>">
		</div>

		<div>
			<input type="submit" name="submit" value="submit">
		</div>

	</form>

<?php

if( isset($_GET['submit']) ) {

	echo "<hr>";

	for( $row = 1 ; $row <= $base; $row++ ) {

		echo "<div>";
			for( $sym = 0; $sym < $row; $sym++ ) {

				echo $char;
			}
		echo "</div>";
	}
}

?>
	
</body>
</html>
