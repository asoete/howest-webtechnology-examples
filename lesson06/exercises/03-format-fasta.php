<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Format Fasta</title>
	<style type="text/css">
		
		.input-wrap {
			margin-bottom: 1em;
		}
		.fasta-field {
			margin-left: 1em;
		}
		textarea {
			width: 250px;
			height: 50px;
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
		echo "Error: unkown upload type...";
		exit;
	}

	$fasta_arr = explode("\n", $fasta_str);
	$nt_printed = 0;
	$gc_count = [];
	$tot_nt = [];
	$curr_head = "";

	echo "<pre>";
	foreach( $fasta_arr as $line  ) {

		$line = trim($line);

		if( preg_match('/^>/', $line) ) {

			// current line == fasta header
			echo "\n<strong>$line</strong>\n";

			$curr_head = $line;
			$nt_printed = 0;
			$gc_count[$curr_head] == 0;
			$tot_nt[$curr_head] == 0;

			continue;
		}

		$nts = str_split( $line );

		foreach( $nts as $nt ) {

			echo "$nt";
			$nt_printed++;
			$tot_nt[$curr_head]++;

			if( $nt == "G" or $nt == "C" or $nt == "g" or $nt == "c") {

				$gc_count[$curr_head]++;
			}

			if( $nt_printed % 50 == 0 ) {

				echo "\n";
			}
		}
	}

	// print_r( $gc_count );
	// print_r( $tot_nt );
	echo "</pre>";

	echo "<table>";
		echo "<tr>";
			echo "<th>SEQ</th>";
			echo "<th>%</th>";
		echo "</tr>";

		foreach( $tot_nt as $head_key => $tot_nt_for_head ) {

			echo "<tr>";
				echo "<th>$head_key</th>";
				echo "<td>".(( $gc_count[$head_key] / $tot_nt_for_head ) * 100 )."</td>";
			echo "</tr>";
		}
	echo "</table>";
}

?>
	
</body>
</html>

