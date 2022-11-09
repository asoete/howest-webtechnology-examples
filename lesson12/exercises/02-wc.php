<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Cat file</title>
	<style type="text/css">

	table{

		border-collapse: collapse;
	}

	td, th {
		border: solid 1px black;
		padding: 0.5em 1em;
	}

	li {
		display: inline-block;
		padding: 0 1em;
		border-right: solid grey 1px;
	}

	li:last-child {
		border: none;
	}

	</style>
	
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

		<input type="file" name="input-file" value="">

		<input type="submit" name="submit" value="Cat file">

	</form>
	
<?php

if( isset( $_POST['submit']) ) {

	# dump( $_POST );
	# dump( $_FILES );

	echo "<h1>Received file: ". $_FILES['input-file']['name'] . "</h1>";

	//explode
	$lines = file( $_FILES['input-file']['tmp_name']);

	$nr_lines = count($lines);
	// $nr_lines = 0;
	$nr_words = 0;
	$word_freq = [];
	$nr_chars = 0;

	foreach( $lines as $line ) {

		$words = explode(" ", $line);
		foreach( $words as $word ) {

			$word = trim( $word );

			$nr_words++;

			if( ! isset($word_freq[$word]) ) {
				$word_freq[$word] = 0;
			}
			$word_freq[$word]++;
		}
		//count( str_split($line) )
		
		$nr_chars += strlen( $line );
	}

	arsort($word_freq);

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

	echo "<ol>";
	$counter = 1;
	foreach( $word_freq as $word => $count ) {

		echo "<li>$word</li>";

		if( $counter >= 10 ) {
			break;
		}
		$counter++;

	}
	echo "</ol>";

	# dump([
	# 	"nr_lines" => $nr_lines,
	# 	"nr_words" => $nr_words,
	# 	"nr_chars" => $nr_chars,
	# 	"word_freq" => $word_freq,
	# ]);

}

?>
	
</body>
</html>


<?php

function dump( $array ) {
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}





