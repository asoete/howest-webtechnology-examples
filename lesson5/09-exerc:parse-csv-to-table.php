
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>csv</title>
   <style type="text/css" media="screen">
   	
		table {
			border-collapse: collapse;
		}
   	td {
   		border: solid grey 1px;
   		padding: 5px;
   	}
   </style>
</head>
<body>
   <form action="#" method="post">

      Please paste <em>CSV</em> here:<br>
      <textarea name="data" cols="50" rows="5"></textarea>

      <br>
      <label>
         <input type="checkbox" name="has_headers" value="1">
         First line are headers.
      </label>

      <br>
      <input type="submit" value="submit" name="submit">
   </form>
   
<?php

echo "<pre>";

if( isset($_POST['submit'] ) ) {

	$datarows = explode( "\n", $_POST['data'] );
	
	echo "<table>";
	foreach( $datarows as $row_index => $row ) {
	
		// echo "\$row = '$row'";
		$datacells = explode(',', $row);
		
		echo "<tr>";
		foreach( $datacells as $tdvalue ) {
		
			$tag = 'td';
			if( isset($_POST['has_headers']) and $row_index === 0 ) {
			
				$tag = "th";
			}
			echo "<$tag>";
				echo $tdvalue;
			echo "</$tag>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

?>
   
</body>
</html>

