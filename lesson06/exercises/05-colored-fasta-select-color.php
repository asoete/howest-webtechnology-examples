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
		.warning {

			color: orange;
			font-weight: bold;
		}
	</style>
	
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

		<div class="input-wrap">
			<label>
				<input type="radio" name="upload_type" value="file">
				Select fasta file:
			</label>
			<div class="fasta-field">
				<input type="file" name="fasta_file">
			</div>
		</div>
		
		<div class="input-wrap">
			<label>
				<input type="radio" name="upload_type" value="paste">
				paste fasta:
			</label>
			<div class="fasta-field">
				<textarea name="pasted_fasta"></textarea>
			</div>
		</div>

		<div class="input-wrap">
			Pick the color for <b>A</b>
			<select name="color-a">
				<option value="white">None</option>
				<option value="pink">Red</option>
				<option value="yellow">Yellow</option>
				<option value="lightgreen">Green</option>
				<option value="lightblue">Blue</option>
				<option value="orange">Orange</option>
			</select>
		</div>

		<div class="input-wrap">
			Pick the color for <b>T</b>
			<select name="color-t">
				<option value="white">None</option>
				<option value="pink">Red</option>
				<option value="yellow">Yellow</option>
				<option value="lightgreen">Green</option>
				<option value="lightblue">Blue</option>
				<option value="orange">Orange</option>
			</select>
		</div>

		<div class="input-wrap">
			Pick the color for <b>G</b>
			<select name="color-g">
				<option value="white">None</option>
				<option value="pink">Red</option>
				<option value="yellow">Yellow</option>
				<option value="lightgreen">Green</option>
				<option value="lightblue">Blue</option>
				<option value="orange">Orange</option>
			</select>
		</div>

		<div class="input-wrap">
			Pick the color for <b>C</b>
			<select name="color-c">
				<option value="white">None</option>
				<option value="pink">Red</option>
				<option value="yellow">Yellow</option>
				<option value="lightgreen">Green</option>
				<option value="lightblue">Blue</option>
				<option value="orange">Orange</option>
			</select>
		</div>

		<div class="input-wrap">
			<input type="submit" value="format fasta" name="submit">
		</div>
		
	</form>

<?php

if( isset($_POST['submit']) ) {

	$fasta_str = "";

	if( $_POST['upload_type'] == 'paste' ) {
		$fasta_str = $_POST['pasted_fasta'];
		// explode
	}
	elseif( $_POST['upload_type'] == 'file' ) {
		$fasta_str = file_get_contents($_FILES['fasta_file']['tmp_name']);
		// file
	}
	else {
		echo "Error: unknown upload type...";
		exit;
	}

	if( empty($fasta_str) ) {

		echo "<div class=\"warning\">WARNING: Fasta is empty</div>";
	}

	$fasta_arr = explode("\n", $fasta_str);
	$nts_printed  = 0;
	$freq = [];
	$jump_link_counter = 0;
	$jump_links = [];
	$output = [];
	// $output = "";

	$colors = [];
	$colors['A'] = $_POST['color-a'];
	$colors['T'] = $_POST['color-t'];
	$colors['G'] = $_POST['color-g'];
	$colors['C'] = $_POST['color-c'];
	//$colors['a'] = $_POST['color-a'];
	//$colors['t'] = $_POST['color-t'];
	//$colors['g'] = $_POST['color-g'];
	//$colors['c'] = $_POST['color-c'];

	$output[] = "<pre>";
	// $output .= "<pre>";
	foreach( $fasta_arr as $line ) {

		trim( $line );

		if( preg_match('/^>/', $line ) ) {

			if( !empty( $freq ) ) {

				$output[] = "<pre>";
					$output[] = print_r($freq, true);
				$output[] = "</pre>";
			}

			$jump_link_counter++;
			$id = "header-$jump_link_counter";

			$jump_links[$id] = $line;

			$output[] = "<b id=\"$id\">$line</b>\n";

			$nts_printed  = 0;
			$freq = [];
			continue;
		}

		$nts = str_split($line);

		foreach( $nts as $nt ) {

			$output[] = "<span style=\"background: $colors[$nt]\">$nt</span>";

			$nts_printed++;
			if( $nts_printed % 50 == 0 ) {

				$output[] = "\n";
			}

			if( !isset($freq[$nt]) ) {
				$freq[$nt] = 0;
			}
			$freq[$nt]++;
		}
	}
	$output[] = "</pre>";

	echo "<ul>";
	foreach( $jump_links as $id => $seqname ) {

		echo "<li>";
			echo "<a href=\"#$id\">$seqname</a>";
		echo "</li>";
	}
	echo "</ul>";

	echo implode("", $output);
}

?>
</body>
</html>

