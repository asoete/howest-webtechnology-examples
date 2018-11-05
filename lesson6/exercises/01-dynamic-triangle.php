<?php

$char = '*';
if( isset($_GET['char']) ) {

   $char = $_GET['char'];
}

// $char = $_GET['char'] ?? '*';
$base = $_GET['base'] ?? 10;

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Dynamic triangle</title>
   <style type="text/css">
   label {
      display:block;
      padding: 1em;
      font-family: monospace;
   }
   </style>
</head>
<body>

   <form action="#" method="get">
      <label>
         Char:
         <input type="text" class="text" value="<?= $char ?>" name="char">
      </label>

      <label>
         Base:
         <input type="number" class="text" value="<?= $base ?>" name="base">
      </label>

      <input type="submit" class="submit" value="submit" name="submit">
   </form>

<?php if( isset( $_GET['submit']) ) {

   echo "<hr>";

   for( $nr_row=1; $nr_row <= $base; $nr_row++ ) {

      for( $nr_chars=$nr_row; $nr_chars > 0; $nr_chars-- ) {

         echo "$char";
      }
      echo "<br>";
   }

} ?>

</body>
</html>
