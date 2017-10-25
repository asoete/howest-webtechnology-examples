<!DOCTYPE html>
<html>
<head>
	<title>About forms</title>
</head>
<body>
	
	<form action="process.php" method="get">
		
		<input type="text" name="textfield" value="default text"><br>
		
		<input type="text" name="textfield" placeholder="example text"><br>
		
		email:
		<input type="email" name="email"><br>
		
		required
		<input type="text" name="textfield" required><br>
		
		number:
		<input type="number" name="number"><br>
		
		<input type="password" name="passfield"><br>
		
		<input type="file" name="filefield"><br>
		
		cbox1 :<input type="checkbox" name="cbox1" checked>
		cbox2 :<input type="checkbox" name="cbox2"><br>
		
		<label>
			radio1 :
			<input type="radio" name="radio" value="radio1">
		</label>
		
		<label for="radio2"> radio2 : </label>
		<input type="radio" name="radio" value="radio2" id="radio2"><br>
		
		
		<select name="select">
			<option value="1">Value 1</option>
			<option value="abc123">Value 2</option>
			<option value="3">Value 3</option>
		</select><br>
		
		<textarea name="textarea"></textarea><br>
		
		<br>
		<input type="submit" name="submit"
			value="Submit data to process.php"
		>
		
		
	</form>
	
</body>
</html>
