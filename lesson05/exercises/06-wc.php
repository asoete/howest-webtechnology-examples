<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Word Count</title>
	<style type="text/css">
		textarea {
			width: 250px;
			height: 150px;
		}

		th { text-align: right;}
	</style>
	
</head>
<body>

	<p>
		Count lines, words and characters in text.
	</p>

	<form action="#" method="post">
		<div>
			<textarea name="text"></textarea>
		</div>
		<input type="submit" name="submit" value="submit text">
	</form>
	
<?php

if( isset($_POST['submit']) ) {

	echo "<pre>";
	var_dump($_POST['text']);

	$input = $_POST['text'];

	$lines = explode("\r\n", $input );
	// $nr_lines = count( $lines );
	$nr_lines = 0;
	$nr_words = 0;
	$nr_chars = 0;

	var_dump( $lines );

	foreach( $lines as $line ) {

		$nr_lines++;

		$words = explode(" ", $line);

		foreach( $words as $word ) {

			$nr_words++;

			// $chars = str_split( $word );
			// $nr_chars += count( $chars );
			$nr_chars += strlen( $word );
			// $nr_chars = $nr_chars + strlen( $word );
		}
	}
}
 ?>

<table>
	<tr>
		<th>#Lines</th>
		<td><?= $nr_lines ?></td>
	</tr>
	<tr>
		<th>#Words</th>
		<td><?= $nr_words ?></td>
	</tr>
	<tr>
		<th>#Chars</th>
		<td><?= $nr_chars ?></td>
	</tr>
</table>

?>
	
</body>
</html>
