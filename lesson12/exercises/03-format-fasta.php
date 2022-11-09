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
	table{

		border-collapse: collapse;
	}

	td, th {
		border: solid 1px black;
		padding: 0.5em 1em;
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


	$gc_count = [];
	$tot_count = [];
	$cur_seq = "";

	echo "<pre>";
	foreach( $fasta_lines as $line ) {

		$line = trim( $line );

		if( str_starts_with($line, ">") ) {

			$cur_seq = $line;

			$tot_count[$cur_seq] = 0;
			$gc_count[$cur_seq] = 0;

			echo "\n<strong>$line\n</strong>";
			continue;
		}

		$nts = str_split($line);
		foreach( $nts as $nt ) {

			$tot_count[$cur_seq]++;

			if( $nt == "C" or $nt == "G" ) {
				$gc_count[$cur_seq]++;
			}

			echo $nt;

			if( $tot_count[$cur_seq] % 10 == 0 ) {

				echo " ";
			}

			if( $tot_count[$cur_seq] % 80 == 0 ) {

				echo "\n";
			}
		}

	}
	echo "</pre>";

	// dump([
	// 	"gc_count" => $gc_count,
	// 	"tot_count" => $tot_count,
	// ]);


?>

	<table>
		<tr>
			<th>Header</th>
			<td>% GC</td>
		</tr>
		<?php foreach( $tot_count as $header => $tot_count ): ?>
		<tr>
		<th><?= $header ?></th>
			<td><?= round( ($gc_count[$header] / $tot_count ) * 100 ) ?></td>
		</tr>
		<?php endforeach ?>
	</table>

<?php

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
