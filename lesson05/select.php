<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Send data to self</title>
</head>
<body>

<?php if( isset($_GET['submit']) ):

	echo "<pre>";
	print_r($_GET);
;

else: ?>

	<!-- <form action="send-data-to-self.php" method="get"> -->
	<form action="#" method="get">

		<select name="my_choice[]" multiple>
			<optgroup label="numbers">
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
			</optgroup>
			<optgroup label="letters">
				<option value="a">Option A</option>
				<option value="b">Option B</option>
				<option value="c">Option C</option>
			</optgroup>
		</select>

		
		<br>

		<textarea name="multiline_text"></textarea>

		
		<input type="submit" value="Send data" name="submit">

	</form>

<?php endif; ?>

</body>
</html>
