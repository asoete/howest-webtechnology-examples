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
			color: <?= $_POST['color_a'] ?? 'black' ?>;
		}
		.t, .T {
			color:green;
			color: <?= $_POST['color_t'] ?? 'black' ?>;
		}
		.g, .G {
			color: blue;
			color: <?= $_POST['color_g'] ?? 'black' ?>;
		}
		.c, .C {
			color:orange;
			color: <?= $_POST['color_c'] ?? 'black' ?>;
		}

		.invalid-nt {

			color: darkred;
			border-bottom: solid red 2px;
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

		<div>
			Pick a color
			<div class="input-wrap">
				A:
				<select name="color_a">
					<option value="">none</option>
					<option value="red">Red</option>
					<option value="red">Green</option>
					<option value="red">Blue</option>
					<option value="red">Orange</option>
				</select>
				
			</div>
			<div class="input-wrap">
				T:
				<select name="color_t">
					<option value="">none</option>
					<option value="red">Red</option>
					<option value="green">Green</option>
					<option value="blue">Blue</option>
					<option value="orange">Orange</option>
				</select>
				
			</div>
			<div class="input-wrap">
				C:
				<select name="color_c">
					<option value="">none</option>
					<option value="red">Red</option>
					<option value="green">Green</option>
					<option value="blue">Blue</option>
					<option value="orange">Orange</option>
				</select>
				
			</div>
			<div class="input-wrap">
				G:
				<select name="color_g">
					<option value="">none</option>
					<option value="red">Red</option>
					<option value="green">Green</option>
					<option value="blue">Blue</option>
					<option value="orange">Orange</option>
				</select>
				
			</div>
		</div>
		
		
		<input type="submit" value="submit" name="submit">
		

	</form>
	
<?php

if( isset($_POST['submit']) ) {

	# dump($_POST);

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



	echo "<ul>";
	$header_counter = 0;
	foreach( $fasta_lines as $line ) {

		if( str_starts_with($line, ">") ) {

			echo "<li>";
			echo "<a href=\"#seq-$header_counter\">$line</a>";
			echo "</li>";
			$header_counter++;

		}
	}
	echo "</ul>";

	echo "<pre>";
	$header_counter = 0;
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
			// http://localhost:8080/05-pick-color-fasta.php#seq-0

			$freq = [];
			$tot_count = 0;

			echo "\n<strong id=\"seq-$header_counter\">$line\n</strong>";
			$header_counter++;
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

			$class = $nt;

			if( $nt != "A" and $nt != "T" and $nt != "C" and $nt != "G" ) {

				$class = "invalid-nt";
			}

			echo '<span class="' . $class . '">' . $nt . '</span>';

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
