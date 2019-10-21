<?php

$base = 4;
if( isset( $_GET['base'] ) ) {

   $base = $_GET['base'];
}

$symbol = $_GET['symbol'] ?? '*';

?>
<!doctype html5>
<html>
<body>

<form action="#" method="get">

   <input type="number" name="base" value="<?php echo $base ?>"> <br>
   <input type="text" name="symbol" value="<?php echo $symbol ?>"> <br>
   <input type="submit" name="submitted" value="Draw Triangle">

</form>

<?php

### echo "<pre>";
### print_r( $_GET );
### echo "</pre>";

if( isset( $_GET['submitted']) ) {

   echo "<hr>";

   echo "<pre>";
   for( $rows=1; $rows <= $base; $rows++ ) {

      for( $symb=0; $symb < $rows; $symb++ ) {

	 echo "$symbol";
      }

      #echo "<br>";
      echo "\n";
   }
   echo "</pre>";
}

?>
</body>
</html>
