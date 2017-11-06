<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Fasta Generator</title>
   <style type="text/css">
      label {

         display: block;
         margin: 5px;
         padding: 5px;
      }

      input[type=submit] {

         display: block;
         width: 100%;
         margin: 15px 0;
      }

/*
      .form {

         box-sizing: border-box;
         padding: 0 2em;
         position: fixed;
         left: 0;
         top: 0;
         width: 550px;
      }

      .fasta {

         margin-left: 600px;
         border-left: solid #eee 5px;
         padding-left: 50px;
      }
*/
      .warning {

         color: orange;
      }

   </style>
</head>
<body>

   <div class="form">

      <h2>Generate a random fasta sequence</h2>
      <form action="#" method="get">
         <label>
            Sequence header:
            <input type="text" value="" name="header">
         </label>

         <label>
            Sequence Alphabet:
            <input type="text" value="" placeholder=" e.g.: ATCG" name="alphabet">
         </label>

         <label>
            Total number of nucleotides:
            <input type="number" name="tot_nt" value="">
         </label>

         <label>
            Number of nucleotides per line:
            <input type="number" name="nt_per_line" value="">
         </label>

         <input type="submit" value="Generate" name="submit">
      </form>
   </div>

<?php

if( isset($_GET['submit']) ) {

	echo "Form submitted, start generating random fasta...<br>";
	
	echo "<pre>";

	//print_r($_GET);
	
	if( isset( $_GET['header']) and !empty( $_GET['header'])) {
		$seq_header = $_GET['header'];
	}
	else {
	
		$seq_header = 'Random Sequence 1';
		echo '<div class="warning">',
			"Sequence was not defined: auto set to $seq_header...",
			"</div>";
	}
	
	if( isset( $_GET['alphabet']) and !empty( $_GET['alphabet'])) {
		$alphabet = $_GET['alphabet'];
	}
	else {
	
		$alphabet = 'ATGC';
		echo '<div class="warning">',
			"Alphabet was not defined: auto set to $alphabet...",
			"</div>";
	}
	
	if( isset( $_GET['tot_nt']) and !empty( $_GET['tot_nt'])) {
		$nt_req = $_GET['tot_nt'];
	}
	else {
	
		$nt_req = 250;
		echo '<div class="warning">',
			"tot_nt was not defined: auto set to $nt_req...",
			"</div>";
	}
	
	if( isset( $_GET['nt_per_line']) and !empty( $_GET['nt_per_line'])) {
		$nt_per_line = $_GET['nt_per_line'];
	}
	else {
	
		$nt_per_line = 50;
		echo '<div class="warning">',
			"nt_per_line was not defined: auto set to $nt_per_line...",
			"</div>";
	}

	//echo "\$seq_header: $seq_header\n";
	
	$alphabet = str_split($alphabet);
	$alphabet_count = count( $alphabet );
	// print_r( $alphabet);
	
	echo "<h3>>$seq_header</h3>";
	
	for( $nt_count = 0; $nt_count < $nt_req; $nt_count++ ) {
	
		if( $nt_count % $nt_per_line === 0 and $nt_count > 0) {
		
			echo "\n";
		}
		echo $alphabet[rand(0, $alphabet_count -1 )];
	}
}

?>

</body>
</html>

