<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Forms</title>
</head>
<body>

	<form action="handle-data.php" method="get">

		<input type="text" name="text-field" value="">
		<input type="password" name="password" value="">
		<input type="file" name="file" value="">
		<input type="hidden" name="hidden" value="">
		<div>
			<label for="cbx">
				<input type="checkbox" name="checkbox" value="" id="cbx">
				Checkbox
			</label>
		</div>
		
		<div>
			<label>
				<input type="radio" name="radiobtn" value="opt1">
				radio 1
			</label>
			<label>
				<input type="radio" name="radiobtn" value="opt2">
				radio 2
			</label>
		</div>

		<input type="text" name="text-field" value="">
		<input type="number" name="numbers" value="">
		<input type="email" name="mail" value="">

		<textarea name="para"></textarea>

		<select name="dropdown">
			<option value="1">one</option>
			<option value="2">two</option>
			<option value="3">three</option>
		</select>
		

		<select name="dropdown2[]" multiple>
			<option value="1">one</option>
			<option value="2">two</option>
			<option value="3">three</option>
		</select>
		

		<input type="submit" name="submit" value="Submit Form">


	</form>
	

</body>
</html>
