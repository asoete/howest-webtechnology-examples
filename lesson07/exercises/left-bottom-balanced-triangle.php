<?php

$base = $argv[1] ?? 10;

for($row_count = 1; $row_count <= $base; $row_count++ ) {

	for( $ast_count = 0; $ast_count < $row_count; $ast_count++ ) {

		echo "*";
	}
	echo "\n";

}

?>
