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
		th { text-align: right;}
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
				<textarea name="scores"></textarea>
			</div>
		</div>

		<div class="input-wrap">
			<input type="submit" value="Align" name="submit">
		</div>
		
	</form>

<?php

if( isset($_POST['submit']) ) {

	echo "<pre>";

	$lines = file( $_FILES['input_text']['tmp_name'] );
	//print_r($lines);

	$cur_header = "";
	$sections = [];
	$block_index = 0;
	$nts_count = 0;

	$scores_str = $_POST['scores'];

	if( empty($scores_str) ) {

		die("No scores provided");
	}

	$scores = explode("\n", $scores_str);

	foreach( $lines as $line ) {

		$line = trim($line);

		if( preg_match('/^>/', $line ) ) {

			$block_index = 0;
			$cur_header = $line;
			$sections[$block_index][$cur_header] = "";
			continue;
		}

		$nts = str_split( $line );

		foreach( $nts as $nt ) {

			$sections[$block_index][$cur_header] .= $nt;

			$nts_count++;

			if( $nts_count % 50 == 0 ) {
				$block_index++;
			}

		}

	}

	// print_r( $sections );

	$nt_index = 0;
	foreach( $sections as $block_index => $seqs ) {

		echo "<table>";
		echo "<caption>Section: $block_index</caption>";

		foreach( $seqs as $header => $nts ) {

			echo "<tr>";
				echo "<th>$header</th>";
				echo "<td>$nts</td>";
			echo "</tr>";

		}

		$nr_nts = strlen($nts);

		// print_r( $scores );
		// echo $nr_nts;

		echo "<tr>";
				echo "<th>TEST</th>";
				echo "<td>";
		for($i=0; $i< $nr_nts; $i++ ){

			echo trim($scores[$i]);
		}
				echo "</td>";
			echo "</tr>";
		echo "</table>";
	}

	echo "<pre>";
}

?>
</body>
</html>

