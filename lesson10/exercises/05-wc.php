<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>WC</title>
	<style type="text/css">

		textarea {
			width: 500px;
			height: 128px;
		}

		th {

			text-align: right;
		}

	</style>
	
</head>
<body>

	<form action="#" method="post">

		<div>
			Please paste text here:
			<textarea name="text"><?= $_POST['text']?></textarea>
		</div>
		
		<div>
			<label>
				<input type="checkbox" name="lines" checked>
				show lines
			</label>
			<label>
				<input type="checkbox" name="words" checked>
				show words
			</label>
			<label>
				<input type="checkbox" name="chars" checked>
				show chars
			</label>
			
		</div>
		
		<div>
			<input type="submit" name="submit" value="submit">
		</div>


	</form>
	
<?php

if( isset( $_POST['submit']) ):

	$text = $_POST['text'];

	$lines = explode("\n", $text);
	$nr_lines = count($lines);
	$nr_words = 0;
	$nr_chars = 0;

	foreach( $lines as $line ) {
		$words = explode(" ", $line);
		$nr_words += count($words);

		foreach($words as $word ) {

			$chars = str_split($word);
			$nr_chars += count($chars);
		}
	}

	//$chars = str_split($text);
	//$count = count($chars);
	$chars_with_spaces = count( str_split($text) );

	echo "</pre>";
?>

<table>
	<?php if( isset($_POST['lines']) ): ?>
		<tr>
			<th>Lines:</th>
			<td><?= $nr_lines ?></td>
		</tr>
	<?php endif ?>
	<?php if( isset($_POST['words']) ): ?>
		<tr>
			<th>Words:</th>
			<td><?= $nr_words ?></td>
		</tr>
	<?php endif ?>
	<?php if( isset($_POST['chars']) ): ?>
		<tr>
			<th>Chars (naive):</th>
			<td><?= $nr_chars ?></td>
		</tr>
		<tr>
			<th>Chars:</th>
			<td><?= $chars_with_spaces ?></td>
		</tr>
	<?php endif ?>
</table>

<?php endif; ?>

</body>
</html>
