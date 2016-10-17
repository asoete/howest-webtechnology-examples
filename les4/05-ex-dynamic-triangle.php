<?php

if( isset( $_GET['base']) and !empty( $_GET['base']) ) {
	
	$base = $_GET['base'];
}
else {

	$base = 7;
}

// -----------------------------------------------------------------------------

if( isset( $_GET['char']) and !empty( $_GET['char']) ) {
	
	$char = $_GET['char'];
}
else {

	$char = '*';
}

// -----------------------------------------------------------------------------

?>

<form action="#" method="get">

	<div>
		Base:
		<input type="number" name="base" value="<?= $base ?>">
	</div>
	
	<div>
		Character:
		<input type="text" name="char" value="<?= $char ?>">
	</div>

	<div>
		<input type="submit" name="submit">
	</div>
	
</form>

<?php

if( isset($_GET['submit']) ) {

	for( $row=1; $row <= $_GET['base']; $row++ ) {
	
		for( $col=0; $col < $row; $col++ ) {
		
			echo $_GET['char'];
		}
		echo "<br>";
	}

}


?>
