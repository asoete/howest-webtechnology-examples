<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>CSV to HTML</title>
</head>
<body>

	<form action="#" method="post">
		Paste CSV:
		<br>
		<textarea name="csv" cols="40" rows="10"></textarea>
		<br>
		<input type="checkbox" name="first_row_as_th">
		First line as header
		<br>
		<input type="submit" name="submit" value="CSV to HTML">
	</form>
	
<?php

if( isset( $_POST['submit'] ) ) {

	$lines = explode( "\r\n", $_POST['csv']);
	$cur_line = 0;
	$nr_fields = 0;

	/* print_r($lines); */

	echo "<table>";

	foreach( $lines as $line ) {

		$cur_line++;

		$fields = explode(",", $line);

		if( $cur_line == 1 ) {

			$nr_fields = count($fields);
		}

		if( $nr_fields !== count($fields) ) {

			// echo "<caption>invalid number of fields<caption>";
			// exit(1);
			 die("<caption>invalid number of fields<caption>");
		}

		echo "<tr>";


		/* print_r( $fields ); */
		foreach( $fields  as $field ) {

			if( $cur_line == 1 and isset($_POST['first_row_as_th']) ) {

				echo "<th>";
					echo "$field";
				echo "</th>";
			}
			else {

				echo "<td>";
					echo "$field";
				echo "</td>";
			}
		}

		echo "</tr>";
	}
	echo "</table>";
}

?>
	
</body>
</html>
