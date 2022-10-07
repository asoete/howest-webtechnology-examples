<?php

$firstname = $_GET['firstname'] ?? "enter value";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Forms</title>
</head>
<body>

	<h5>Let's talk about forms...</h5>
	
	<form action="06-forms.php" method="GET">

		Firstname:
		<!-- <?php echo "" ?> -->
		<!-- <?= "" ?> -->
		<input type="text" name="firstname" value="<?= $firstname; ?>">

		<div>
			Text:
			<input type="text" name="" value="">
		</div>
		
		<div>
			password:
			<input type="password" name="" value="">
		</div>

		<div>
			email:
			<input type="email" name="" value="">
		</div>

		<div>
			number:
			<input type="number" name="" value="">
		</div>

		<div>
			checkbox:
			<input type="checkbox" name="cb1" value="on">
			<input type="checkbox" name="cb2" value="on">
		</div>
		
		<div>
			radio:
			<input type="radio" name="rb" value="one">
			<input type="radio" name="rb" value="two">
			<input type="radio" name="rb" value="three">
		</div>
		
		<div>
			hidden:
			<input type="hidden" name="im_hidden" value="bo">
		</div>


		<div>
			select:
			<select name="color">
				<optgroup label="primary">
					<option value="r">red</option>
					<option value="g">green</option>
					<option value="b">blue</option>
				</optgroup>
				<optgroup label="secondary">
					<option value="lr">lightred</option>
					<option value="lg">lightgreen</option>
					<option value="lb">lightblue</option>
				</optgroup>
			</select>
			
			select:
			<select name="colors[]" multiple>
				<option value="r">red</option>
				<option value="g">green</option>
				<option value="b">blue</option>
			</select>
		</div>

		<div>
			textarea
			<textarea name="text"></textarea>
		</div>
		
		<div>
			labels: 
			<label>
				CB1
				<input type="checkbox" name="cb1" value="on">
			</label>

			<label for="cb2">CB2</label>
			<input type="checkbox" name="cb2" value="on" id="cb2">
		</div>

		<div>
			submit:
			<input type="submit" name="submit" value="Go submit the form">
		</div>

	</form>

<pre>
<?php

	if( isset($_GET['firstname']) ) {

		print_r($_GET);
		print_r($_POST);
		print_r($_REQUEST);
		// print_r($_FILES);

		echo "the firstname is: $_GET[firstname]\n";
	}
?>
</pre>

</body>
</html>
