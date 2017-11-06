<?php

/*
file -> count => nr lines
	line -> explode on space -> count items
	line -> str_split -> count chars/items
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>wc file</title>
	
	<style type="text/css" media="screen">
		th {
		
			text-align: right;
		}
		th, td {
		
			padding: 5px;
			border: solid grey 1px;
		}
		table {
		
			border-collapse: collapse;
		}
	</style>
	
</head>
<body>

	<form action="#" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="submit" value="Upload"/>
	</form>
	
<?php if( isset( $_POST['submit']) ) {

	echo "<h1>\$(wc ". $_FILES['file']['name'] . "):</h1>";
	
	$lines = file( $_FILES['file']['tmp_name'] );
	
	$linecount = count( $lines );
	$wordcount = 0; // explode( ' ', ... );
	$charcount = 0; // str_split( .... )
	$wordfreq = [];
	
	echo "<pre>";
	foreach( $lines as $line ) {
	
		$words = explode( ' ', $line );
		$wordcount += count( $words );
		
		foreach( $words as $word ) {
		
			$word = trim($word); // strip leading and trailing whitespace
			if( !isset($wordfreq[$word]) ) {
		
				$wordfreq[$word] = 0;
			}
		
			$wordfreq[$word]++;
		}
		
		$charcount += strlen( $line );
	}
	
	/*
	echo "<pre>";
		print_r( $wordfreq );
		print_r([
			'$linecount' => $linecount,
			'$wordcount' => $wordcount,
			'$charcount' => $charcount,			
		]);
	echo "</pre>";
	*/
	
} ?>

<table>
	<tr>
		<th>Line Count</th>
		<td><?= $linecount ?></td>
	</tr>
	<tr>
		<th>Word Count</th>
		<td><?= $wordcount ?></td>
	</tr>
	<tr>
		<th>Character Count</th>
		<td><?= $charcount ?></td>
	</tr>
</table>


<?php

// Print the list of top 10 words

echo '<ol>';
$counter = 1;
foreach( $wordfreq as $word => $freq ) {

	echo "<li>";
		echo "$word";
	echo "</li>";
	
	if( $counter === 10 ) {
	
		break; // Break out of the foreach loop
	}
	$counter++;
}
echo '</ol>';

?>



	
</body>
</html>	
