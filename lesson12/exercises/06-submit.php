<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Format fasta</title>
	<link rel="stylesheet" href="06-styles.css">
	
	<style type="text/css">
		textarea {
			width: 500px;
			height: 175px;
		}
		.input-wrap {
			margin-left: 3em;
			margin-bottom: 2em;
		}

	</style>
	
</head>
<body>

	<?php include("06-navbar.html"); ?>

	<form action="06-color.php" method="post" enctype="multipart/form-data">

		<div>
			<label>
				<input type="radio" name="upload-type" value="file">
				Select fasta file:
			</label>
			<div class="input-wrap">
				<input type="file" name="fasta-file" value="">
			</div>
			
		</div>
		
		<div>
			<label>
				<input type="radio" name="upload-type" value="paste">
				Paste fasta:
			</label>
			<div class="input-wrap">
				<textarea name="fasta-paste"></textarea>
			</div>
		</div>

		<div>
			Pick a color
			<div class="input-wrap">
				A:
				<select name="color_a">
					<option value="">none</option>
					<option value="red">Red</option>
					<option value="red">Green</option>
					<option value="red">Blue</option>
					<option value="red">Orange</option>
				</select>
				
			</div>
			<div class="input-wrap">
				T:
				<select name="color_t">
					<option value="">none</option>
					<option value="red">Red</option>
					<option value="green">Green</option>
					<option value="blue">Blue</option>
					<option value="orange">Orange</option>
				</select>
				
			</div>
			<div class="input-wrap">
				C:
				<select name="color_c">
					<option value="">none</option>
					<option value="red">Red</option>
					<option value="green">Green</option>
					<option value="blue">Blue</option>
					<option value="orange">Orange</option>
				</select>
				
			</div>
			<div class="input-wrap">
				G:
				<select name="color_g">
					<option value="">none</option>
					<option value="red">Red</option>
					<option value="green">Green</option>
					<option value="blue">Blue</option>
					<option value="orange">Orange</option>
				</select>
				
			</div>
		</div>
		
		
		<input type="submit" value="submit" name="submit">
		

	</form>
	

</body>
</html>
