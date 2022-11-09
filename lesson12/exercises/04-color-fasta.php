<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Format fasta</title>
	<style type="text/css">
		textarea {
			width: 500px;
			height: 175px;
		}
		.input-wrap {
			margin-left: 3em;
			margin-bottom: 2em;
		}

		.a, .A {
			color:red;
		}
		.t, .T {
			color:green;
		}
		.g, .G {
			color: blue;
		}
		.c, .C {
			color:orange;
		}

		.barplot {

			border-left: solid black 1px;
			border-bottom: solid black 1px;
			padding: 1em;
		}
		.bar {
			border: solid grey 1px;
		}
		.fill {
			background: lightblue;
			text-align: right;
		}
	</style>
	
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

		<div>
			<label>
				<input type="radio" name="upload-type" value="file">
				Select fasta file:
			</label>
			<div class="input-wrap">
				<input type="file" name="fasta-file" value="">
			</div>
			
		</div>
		
		<div>
			<label>
				<input type="radio" name="upload-type" value="paste">
				Paste fasta:
			</label>
			<div class="input-wrap">
				<textarea name="fasta-paste"></textarea>
				
			</div>
		</div>
		
		<input type="submit" value="submit" name="submit">
		

	</form>
	
<?php

if( isset($_POST['submit']) ) {

	$fasta_lines = [];

	if( $_POST['upload-type'] == 'paste' ) {

		if( empty($_POST['fasta-paste']) ) {

			die("Please paste fasta sequences");
		}
		$fasta_lines = explode("\n", $_POST['fasta-paste']);

	}
	elseif( $_POST['upload-type'] == 'file' ) {

		if( empty($_FILES['fasta-file']['tmp_name']) ) {

			die("Please specify a file");
		}

		$fasta_lines = file($_FILES['fasta-file']['tmp_name']);
	}
	else {

		// handle invalid upload type
	}

	$freq = [];
	$tot_count = 0;

	echo "<pre>";
	foreach( $fasta_lines as $line ) {

		$line = trim( $line );

		if( str_starts_with($line, ">") ) {

			// print de barplot

			if( ! empty($freq) ) {
				echo '<div class="barplot">';
					foreach( $freq as $nt => $count ) {
						$p = round( $count / $tot_count * 100 );
						echo '<div class="bar">';
							echo '<div class="fill" style="width: ' .$p. '%">';
								echo "$p%";
							echo '</div>';
						echo '</div>';
					}
				echo '</div>';
			}

			// reset the world

			$freq = [];
			$tot_count = 0;

			echo "\n<strong>$line\n</strong>";
			continue;
		}

		$nts = str_split($line);
		foreach( $nts as $nt ) {

			$tot_count++;
			if( !isset( $freq[$nt] ) ) {
				$freq[$nt] = 0;
			}
			$freq[$nt]++;

			// if( $nt == "A" ) {
			// 	echo "<span style=\"color: red\">$nt</span>";
			// }
			// elseif( $nt == "T" ) {
			// 	echo "<span style=\"color: orange\">$nt</span>";
			// }
			// else {

			// 	echo $nt;
			// }

			echo $nt;

			echo '<span class="' . strToLower($nt) . '">' . $nt . '</span>';

			if( $tot_count % 10 == 0 ) {

				echo " ";
			}

			if( $tot_count % 80 == 0 ) {

				echo "\n";
			}
		}

	}
	echo '<div class="barplot">';
		foreach( $freq as $nt => $count ) {
			$p = round( $count / $tot_count * 100 );
			echo '<div class="bar">';
				echo '<div class="fill" style="width: ' .$p. '%">';
					echo "$p%";
				echo '</div>';
			echo '</div>';
		}
	echo '</div>';

	echo "</pre>";

	// dump([
	// 	"gc_count" => $gc_count,
	// 	"tot_count" => $tot_count,
	// ]);

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
