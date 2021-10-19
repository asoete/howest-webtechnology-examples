hello world

<?php

echo "hello from PHP...\n";


?>

<form action="process-data.php" method="get">

	<label>
		fill in the text field
		<input type="text" name="input-text" value="default data">
	</label>

	<input type="hidden" name="hidden-field">

	<input type="password" name="pass" required>

	<input type="file" name="fasta-file">

	<input type="number" name="number-field">

	<input type="email" name="mail-field">

	<div>
		<input type="checkbox" name="cb-1" value="checked"> Click me
	</div>
	<div>
		<input type="checkbox" name="cb-2" checked> Or me
	</div>

	<div>
		<label>
			<input type="radio" name="radio" value="radio-1" checked>
			Click me
		</label>
	</div>
	<div>
		<input type="radio" name="radio" value="radio-2" id="radio-2">
		<label for="radio-2"> or me </label>
	</div>

	<input type="submit" value="Submit Form" name="submit">
	

</form>
