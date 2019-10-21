<!DOCTYPE html>
<html>

<head>
	<title>Forms</title>
</head>

<body>

	<!-- <form action="https://example.com/script.php" method="" > -->
	<!-- <form action="#" method="" > -->
	<!-- <form action="02-forms.php" method="" > -->

	<!-- <form action="script.php" method="post" > -->

	<form action="03-script.php" method="get" >

		<input type="text" name="firstname"> <br>
		<input type="password"> <br>
		<input type="email"> <br>
		<input type="number"> <br>
		<input type="file"> <br>
		<input type="radio" name="gender" value="male"> Radio 1 <br>
		<input type="radio" name="gender" value="female"> Radio 2 <br>
		<input type="radio" name="gender" value="other"> Radio 3 <br>

		<input type="checkbox" name="subscribe"> CBX 1 <br>
		<input type="checkbox" name="remember_me"> CBX 2 <br>
		<input type="checkbox" name="yes_or_no"> CBX 3 <br>
		
		<input type="submit" value="submitted" name="submit">

		<textarea name="sequence"></textarea>
	
		<br>
		<select name="select_value[]" multiple>
			<optgroup label="Group 1">
				<option value="Text sent to backend scipt">Visible Text</option>
				<option value="1">Option A</option>
			</optgroup>
			<optgroup label="Group 1">
			<option value="2">Option B</option>
			<option value="3">Option C</option>
			</optgroup>
		</select>

		<button>
			Click Me
		</button>


		<br>
		<br>
		<br>

		<input type="checkbox" id="cbx1">
		<label for="cbx1">
			Click me
		</label>

		<br>

		<label>
			<input type="checkbox">
			Click me
		</label>

		<br>
		<br>
		<br>


	</form>

</body>
</html>
