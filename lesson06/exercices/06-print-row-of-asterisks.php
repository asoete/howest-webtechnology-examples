<?php

// isset...

$base = $argv[1] ?? 10;

echo "print a line of $base asterisks\n";

for( $count=0; $count < $base ; $count++ ) {

	//echo "$count\n";
	echo "*";
}
echo "\n";

?>
