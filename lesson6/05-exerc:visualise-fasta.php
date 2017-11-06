<!DOCTYPE html>
<html>
<head>
	<title>Visualise fasta</title>
	<style type="text/css" media="screen">
		label {
		
			display: block;
			padding: 1em;
		}
		.input-wrap {
		
			margin-left: 2em;
		}
		textarea {
		
			width: 500px;
			height: 150px;
		}
		
		.A { color: darkred; }
		.T { color: darkgreen; }
		.G { color: darkblue; }
		.C { color: orange; }
	</style>
	
</head>
<body>

<form action="#" method="POST" enctype="multipart/form-data">
	<h3>Select a fasta file or paste a valid fasta sequence</h3>
	
	<label>
		<input type="radio" name="upload_type" value="file" checked>
		Select a file
		<div class="input-wrap">
			<input type="file" name="fasta_file">
		</div>
	</label>
	
	<label>
		<input type="radio" name="upload_type" value="paste">
		Paste a sequence
		<div class="input-wrap">
			<textarea name="fasta_paste"></textarea>
		</div>
	</label>
	
	<input type="submit" name="submit" value="Go">
</form>


<?php if( isset( $_POST['submit']) ) {

	// print_r([ '$_POST' => $_POST, '$_FILES' => $_FILES ]);

	$sequence = '';
	
	if( $_POST['upload_type'] === 'file' ) {
	
		$sequence = file_get_contents( $_FILES['fasta_file']['tmp_name']);
	}
	elseif( $_POST['upload_type'] === 'paste' ) {
	
		$sequence = $_POST['fasta_paste']	;
	}
	else {
	
		die("Invalid upload type...");
	}
	
	// Extract headers
	
	$seq_lines = explode( "\n", $sequence );
	
	echo '<ul>';
	$title_counter = 0;
	foreach( $seq_lines as $line ) {
	
		// echo strpos( $line, '>' ) . "\n";
		
		// if( strpos( $line, '>' ) === 0 ) {
		//
		//	echo $line . "\n";
		//}
	
		if( preg_match('/^>/', $line ) ) {
		
			// #fastaheader-1
			$titelcounter++;
			 echo "<li>";
			 	echo '<a href="#fastaheader-'.$titelcounter.'">';
			 	echo $line;
			 	echo '</a>';
			 echo"</li>";
		}
	}
	echo '</ul>';
	echo "<pre>";
	
	// vis nts
	$headercount=0;
	$ntfreq = [];
	$nttot = 0;
	
	foreach( $seq_lines as $line ) {

		// test is header		
		if( preg_match('/^>/', $line ) ) {
		
			if( !empty( $ntfreq ) ) {
			
				print_r( $ntfreq );
				gen_freq_table( $ntfreq );
			}
		
			$headercount++;
			echo "<h3 id=\"fastaheader-$headercount\">";
				echo $line;
			echo "</h3>";
			
			$ntfreq = [];
			$nttot = 0;
		}
		// if not colour nts...
		else {
		
			/* - Styles in head > style tag! -
				.A { color: darkred; }
				.T { color: darkgreen; }
				.G { color: darkblue; }
				.C { color: orange; }
			*/
			// echo "$line\n";
			$nts = str_split( $line );
			foreach( $nts as $nt ) {
			
				echo "<span class=\"$nt\">$nt</span>";
				if( !isset( $ntfreq[$nt] ) ) {
				
					$ntfreq[$nt] = 0;
				}
				$ntfreq[$nt]++;
				$nttot++;
			}
			echo "\n";
		}
	}
	if( !empty( $ntfreq ) ) {
			
		print_r( $ntfreq );
	}
}
?>
</body>
</html>	
