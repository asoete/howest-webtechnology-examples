<form action="#" method="get">

	<div>
		<label>
			name:
			<input type="text" name="name">
		</label>
	</div>

	<div>
		<label>
			age:
			<input type="number" name="age">
		</label>
	</div>
	
	<div>
		<input type="submit" name="submit">
	</div>

</form>

<?php

if( isset( $_GET['submit'] ) ) {

	if( $_GET['age'] >= 21 ) {
	
		echo "Welcome $_GET[name], please enter...";
	}
	else {
		
			echo "Access denies for $_GET[name].<br>";
			echo "Please try again in ".( 21 - $_GET['age'] ) . " years...");
	}
}

?>
