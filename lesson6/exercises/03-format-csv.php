<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Parse and Format CSV</title>
   <style type="text/css">
      label {

         padding: 1em 0;
         display: block;
      }
   </style>
</head>
<body>

   <form action="#" method="post">
      <label>
         Paste CSV<br>
         <textarea name="csv" cols="40" rows="10"></textarea>
      </label>

      <label>
         <input type="checkbox" value="" name="fli_header">
         The first row are headers...
      </label>

      <input type="submit" value="parse csv" name="submit">
   </form>

<?php

if( isset($_POST['submit']) ) {

   echo "<pre>";
   print_r( $_POST );


   if( !empty( $_POST['csv'] ) ) {
      $raw_csv = $_POST['csv'];
   }
   else {

      echo("No CSV provided");
      exit;
   }
   $rows = explode( "\n", $raw_csv );

   // print_r( $rows );
   echo "<table>";
   # $is_first_row = true; // is_first_row bool flag OR use row_index as first row indicator...

   foreach( $rows as $row_index => $row ) {

      echo "<tr>";
      $fields = explode( ",", $row );

      foreach( $fields as $field ) {

         $field = trim( $field );

         // if( $is_first_row and isset( $_POST['fli_header'] ) ) {
         if( $row_index === 0  and isset( $_POST['fli_header'] ) ) {

            echo "<th>$field</th>";
         }
         else {

            echo "<td>$field</td>";
         }
      }

      echo "</tr>";
      # if( $is_first_row ) {

      #    $is_first_row = false;
      # }
   }
   echo "</table>";
}

?>

</body>
</html>
