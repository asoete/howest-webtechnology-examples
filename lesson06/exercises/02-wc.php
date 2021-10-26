<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>WC</title>
	<style type="text/css">

		table {

			border-collapse: collapse;
		}

		th, td {

			border: solid black 1px;
			padding: 1em 2em;
		}

	</style>
	
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

		<input type="file" name="input_file">
		<input type="submit" name="submit" value="Go Count">

	</form>
	

<?php

if( isset($_POST['submit']) ) {

	$filename = $_FILES['input_file']['name'];
	$lines = file( $_FILES['input_file']['tmp_name']);

	$nr_lines = count($lines);
	$nr_words = 0;
	$nr_chars = 0;
	$word_freq = [];

	foreach( $lines as $line ) {

		$words = explode(" ", $line );
		$nr_words += count( $words );

		foreach( $words as $word ) {

			$nr_chars += strlen($word);

			if( !isset( $word_freq[$word]) ) {

				$word_freq[$word] = 0;
			}
			$word_freq[$word]++;
		}
	}

	echo "<h1> File: <em>$filename</em> has:</h1>";

	echo "<table>";
		echo "<tr>";
			echo "<th>Nr. Lines</th>";
			echo "<td>$nr_lines</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>Nr. Words</th>";
			echo "<td>$nr_words</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>Nr. Chars</th>";
			echo "<td>$nr_chars</td>";
		echo "</tr>";
	echo "</table>";

	arsort($word_freq);
	$count = 1;

	echo "<ol>";
	foreach( $word_freq as $word => $freq ) {

		echo "<li>$word</li>";

		if( $count >= 10 ) {

			break;
		}
		$count++;
	}
	echo "</ol>";
}

?>

	
</body>
</html>
