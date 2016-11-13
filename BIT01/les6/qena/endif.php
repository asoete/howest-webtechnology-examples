<?php

if( true ) {

	echo "do this\n";
}

if( true ):

	echo "do this\n";
	$error = true;
	
endif;
?>

Before if

<?php if( $error === true ): ?>

	<h1>If was true</h1>
	
	<p>
		somer text
	</p>

<?php else: ?>

	sdghg
	
<?php endif; ?>

after if
