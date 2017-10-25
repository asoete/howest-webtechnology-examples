<form action="#" method="get">
	Text: <input type="text" name="textfield"><br>
	Hidden:<input type="hidden" name="hiddenfield" value="secret-token"><br>
	<input type="submit" name="submit"><br>
	
</form>

<pre>
<?php

	print_r( $_GET );

?>
