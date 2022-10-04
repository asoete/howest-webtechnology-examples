<?php

// PHP code
# Comment
/* comment as well */

?>

<?php

$int = 123;
$float = 123.456;
$string = 'some text\n';
$string = "some text\n$int\\n";
$bool = true or false;

$AZaz09_;

echo "print this\n";
print( "print this\n");

$cond = true;

if( $cond == true ) {

	echo "execute this block if $cond is true\n";
}
/* elseif() {} */
else {

	echo "execute this block if $cond is NOT true\n";
}

$counter = 0;
while( $counter < 10 ) {

	echo "Keep executing this as long as cond is true\n";
	// $counter = $counter + 1;
	// $counter += 1;
	$counter++;
}

for( $counter = 0; $counter < 10 ; $counter++ ) {

	echo "$counter\n";
}
?>
