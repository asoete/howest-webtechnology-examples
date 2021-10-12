<!DOCTYPE html>
<html>
<head>
   <title>Coloured Triangle</title>
	<style type="text/css">
	.star-0 {color: red;}
	.star-1 {color: orange;}
	.star-2 {color: yellow;}

	span:nth-child(1) { color: blue;}
	span:nth-child(2) { color: violet;}
	span:nth-child(3) { color: indigo;}
	</style>
	
</head>
<body>

<?php

for( $row=1; $row <= 8; $row++ ) {

	echo "<div>";
	for( $star=0; $star < $row; $star++ ) {

		// if( $star == 0 ) {
		// 	$color = "red";
		// }
		// echo "<span style=\"color: $color;\">*</span>";

		// echo "<span class=\"star-$star\">*</span>";
		echo "<span>*</span>";
	}
	echo "</div>";
}

?>

</body>
</html>
