<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Combine HTML and PHP</title>
	<style type="text/css">
		p{ color: darkred; }
	</style>
	
</head>
<body>

	<h1>Combine HTML and PHP</h1>
	
	<?php

		for( $count=0; $count < 10 ; $count++ ) {
			echo "<p>";
				echo "Hello from <strong>PHP</strong>!!\n";
			echo "</p>";
		}

	?>
	
</body>
</html>
