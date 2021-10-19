<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Send data to self</title>
</head>
<body>

<?php // if( ! isset($_GET['submit']) ) { ?>

<?php if( ! isset($_GET['submit']) ): ?>

	<!-- <form action="send-data-to-self.php" method="get"> -->
	<form action="#" method="get">

		<input type="text" name="data" value="">
		
		<input type="submit" value="Send data" name="submit">

	</form>

<?php // } else { ?>
<?php else:

	print_r( $_GET );

endif;

// if( $cond ):
// 	// $cond === true
// else:
// 	// $cond === false
// endif;


?>
	
</body>
</html>
