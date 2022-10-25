<pre>
<?php

print_r( $_POST );
print_r( $_FILES );

$file_path = $_FILES['fasta_file']['tmp_name'];

// $blob = file_get_contents($file_path);
// $lines = explode("\n", $blob);

$lines = file( $file_path );

# print_r( $lines );

foreach( $lines as $line ) {

	if( str_starts_with( $line, ">") ) {
	#if( preg_match("/^>/", $line) ) {

		echo "HEADER!: ";
	}

	echo $line;
}

?>
</pre>
