<style type="text/css">
.a { color:red; }
.t { color:green; }
.g { color:blue; }
.c { color:gold; }
</style>
<?php

if( isset($_POST['submit']) ):

	echo "<pre>";
	print_r($_POST);
	print_r($_FILES);

	echo "We have data!!\n";

	$lines = [];

	if($_POST['upload-type'] == 'paste') {

		$lines = explode("\n", $_POST['paste']);

	}
	elseif($_POST['upload-type'] == 'file') {

		// $data = file_get_contents( $_FILES['fasta']['tmp_name']);
		// $lines = explode( "\n", $data );

		$lines = file( $_FILES['fasta']['tmp_name'] );
	}
	else {

		die("Unknown upload type");
	}


	foreach( $lines as $line ) {

		$line = trim($line);

		if( str_starts_with($line, '>') ) {
			echo "<strong>$line</strong>\n";
			continue;
		}

		$nts = str_split($line);

		foreach($nts as $nt ) {

			echo "<span class=\"$nt\">$nt</span>";
		}

		echo "\n";

	}

	echo "</pre>";

else:
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Upload files</title>
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">

		<div>
			<input type="radio" name="upload-type" value="file">
			Upload File
		</div>
		<input type="file" name="fasta">

		<div class="div">
			<input type="radio" name="upload-type" value="paste">
			Paste
		</div>
		<textarea name="paste"></textarea><br>
		
		
		<input type="submit" value="Upload Fasta" name="submit">

	</form>
	
	
</body>
</html>
<?php endif ?>
