<pre>
<?php

print_r( $_GET );

if( isset( $_GET['submit-button'] )) {

	echo "The provided value was: " . $_GET['text-field'];
}

?>
</pre>

<form action="#" method="get">

	Text:	<input type="text" name="text-field"><br>
	Number: <input type="number" name="number-field"><br>
	Email: <input type="email" name="email-field"><br>
	Checkbox: <input type="checkbox" name="checkbox"><br>
	Radio1 : <input type="radio" name="radio-btn">
	Radio2 : <input type="radio" name="radio-btn"><br>
	Select : 
		<select multiple name="transport[]">
			<optgroup label="Cars">
				<option>Audi</option>
				<option>Volvo</option>
				<option>Porsche</option>
			</optgroup>
			<optgroup label="Planes">
				<option>Boeing</option>
				<option>Airbus</option>
			</optgroup>
		</select><br>
	Textarea: <textarea name="textarea">Some text</textarea>
	<input type="submit" name="submit-button" value="GO">

</form>
