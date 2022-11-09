<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Format fasta</title>
	<link rel="stylesheet" href="06-styles.css">
	<style type="text/css">
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

		.error {

			background: darkred;
			color: white;
			font-weight: bold;
			border: solid white 2px;
			outline: solid darkred 2px;
			padding: 0.5em 1em;
			margin: 0.5em 1em;
		}
	</style>
	
</head>
<body>

	
<?php

include("06-navbar.html");

$errors = [];

if( ! isset($_POST['submit']) ) {

	$errors[] = "No data sent to color.php. Please submit the form";
}

$fasta_lines = [];
if( $_POST['upload-type'] == 'paste' ) {

	if( empty($_POST['fasta-paste']) ) {

		$errors = "Please paste fasta sequences";
	}
	$fasta_lines = explode("\n", $_POST['fasta-paste']);

}
elseif( $_POST['upload-type'] == 'file' ) {

	if( empty($_FILES['fasta-file']['tmp_name']) ) {

		$errors[] = "Please specify a file";
	}
	else {
		$fasta_lines = file($_FILES['fasta-file']['tmp_name']);
	}
}
else {

	$errors[] = "Please choose your fasta upload method: Paste or File.";
}

if( !empty($errors) ) {

	foreach( $errors as $error ) {

		echo '<div class="error">'.$error.'</div>';
		
	}

	echo "<a href=\"06-submit.php\">Please fix your input</a>";
	
	exit;
	die();
}

echo "<pre>";
print_r( $fasta_lines );
echo "</pre>";

?>

</body>
</html>
