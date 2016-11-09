<!doctype html>
<html>
<body>

<?php

$array = [1,2,3];

?>

<ol>

<?php
	foreach( $array as $item ) {
	 	echo "<li> $item </li>\n";
	}
?>
</ol>

</body>
</html>
