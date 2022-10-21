<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>CSV to HTML</title>
	<style type="text/css">
		textarea {
			width: 500px;
			height: 128px;
		}
	</style>
	
</head>
<body>
	
	<form action="#" method="post">

		<div>
			Please paste CSV here:
			<textarea name="csv"><?= $_POST['csv']?></textarea>
		</div>
		
		<div>
			<input type="checkbox" name="headers">
			First row are headers
		</div>

		<div>
			Seperator
			<input type="text" name="sep" value=",">
		</div>

		<div>
			<input type="submit" name="submit" value="submit">
		</div>

	</form>

<?php

if( isset($_POST['submit']) ) {

	echo "<hr>";

	$csv = [];
	$lines = explode( "\n", $_POST['csv'] );
	$nr_fields = 0;

	foreach( $lines as $line ) {

		$fields = explode($_POST['sep'], $line);

		if( $nr_fields == 0 ) {
			$nr_fields = count($fields);
		}

		if( count($fields) != $nr_fields ) {

			echo "Error parsing CSV, invalid fieldcount.";
			exit;
		}

		$csv[] = $fields;
	}

	/* echo "<pre>"; */
	/* print_r($csv); */

	echo "<table>";

	if( isset($_POST['headers']) ) {

		$header_row = array_shift($csv);

		echo "<tr>";
		foreach($header_row as $header ) {
			echo "<th>$header</th>";
		}
		echo "</tr>";
	}

	foreach( $csv as $row ) {

		echo "<tr>";
		foreach($row as $data ) {
			echo "<td>$data</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

?>

</body>
</html>
