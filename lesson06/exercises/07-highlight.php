<?php

if( isset($_POST['submit']) ) {

	// echo "<pre>";
	// print_r( $_POST );
	// print_r( $_FILES );

	$word_list = explode("\n", $_POST['keywords'] );
	// print_r($word_list);

	$word_to_color = [];
	foreach( $word_list as $word_color_pair ) {

		$word_color_arr = explode("|", $word_color_pair);

		// print_r( $word_color_arr );

		$word_to_color[$word_color_arr[0]] = $word_color_arr[1];
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Colored fasta</title>
	<style type="text/css">
	
		.input-wrap {
			margin-bottom: 1em;
		}
		.fasta-field {
			margin-left: 1em;
		}
		textarea {
			width: 400px;
			height: 150px;
		}
<?php

		foreach( $word_to_color as $word => $color ) {

			echo ".$word { background: $color; }";
		}

?>
	</style>
	
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

		<div class="input-wrap">
			<label>
				Select file:
			</label>
			<div class="fasta-field">
				<input type="file" name="input_text">
			</div>
		</div>
		
		<div class="input-wrap">
			<label>
				Paste words to highlight
			</label>
			<div class="fasta-field">
				<textarea name="keywords"></textarea>
			</div>
		</div>

		<div class="input-wrap">
			<input type="submit" value="Highlight" name="submit">
		</div>
		
	</form>

<?php

if( isset($_POST['submit']) ) {

	$lines = file( $_FILES['input_text']['tmp_name'] );
	// print_r($lines);

	foreach( $lines as $line ) {

		$line = trim($line);

		$words = explode(" ", $line);

		echo "<div>";

		foreach( $words as $word ) {

			if( isset( $word_to_color[strToLower($word)] ) ) {

				//echo "<span style=\"background: $word_to_color[$word]\">";
				echo "<span class=\"$word\">";
				echo "$word";
				echo "</span> ";
			}

			echo "$word ";
		}

		echo "</div>";
	}

	//echo "<pre>";
}

?>
</body>
</html>

