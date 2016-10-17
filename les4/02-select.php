<form action="#" method="get">

	<label>
		Transport
		<!-- <select name="car_type[]" multiple> -->
		<select name="car_type">
		
			<optgroup label="cars">
				<option value="bmw">BMW ...</option>
				<option value="audi">Audi</option>
			</optgroup>
			
			<optgroup label="plane">
				<option value="airbus" selected>Airbus</option>
				<option value="boeing">Boeing</option>
			</optgroup>
			
		</select>
	</label>

	<br>

	<!-- TEXTAREA -->
	
	<textarea name="comment">Default comment</textarea>

	</br>

	<input type="submit" value="submit form" name="submit">

</form>

<?php

if( isset( $_GET['submit'] ) ) {

	echo "<pre>";
		print_r( $_GET );
	echo "</pre>";
}

?>
