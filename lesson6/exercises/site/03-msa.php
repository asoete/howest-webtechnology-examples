<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>MSA</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include('navbar.html') ?>

<form action="#" method="post" enctype="multipart/form-data">

   <div>
      <input type="file" name="msa" value="">
   </div>

   <div>
      <textarea name="scores"></textarea>
      
   </div>

   <input type="submit" name="submit" value="submit">

</form>

<?php

$NT_PER_LINE = 50;

if ( isset( $_POST['submit'] ) ) {

   $lines = file( $_FILES['msa']['tmp_name']);
   $scores = explode( "\n", $_POST['scores'] );
   /* print_r( $scores ); */

   // Get seqname => nts list / array
   
   $header_key = '';
   $sequences = [];
   foreach( $lines as $line ) {

      $line = trim( $line );
      if( preg_match('/^>/', $line) ) {

         $header_key = $line ;
         $sequences[ $header_key ] = [];
         continue;
      }

      foreach( str_split( $line ) as $nt ) {

         $sequences[$header_key][] = $nt;
      }
   }

   echo "<pre>";

   $max_nt = count($sequences[$header_key]);
   $blocks = $max_nt / $NT_PER_LINE;
   echo "$blocks";

   for( $j = 0; $j <= $blocks; $j++ ) {

      echo"<table style=\"margin: 1em;\">";
      foreach( $sequences as $header => $nts_list ) {
         echo "<tr style=\"text-align: right\">";
         echo "<th>$header</th>";

         echo "<td>";
         for( $i= ($j * $NT_PER_LINE); $i < ($j +1 ) * $NT_PER_LINE; $i++ ) {

            echo $nts_list[$i];
         }
         echo "</td>";
         echo "<tr>";
      }
      echo "<tr>";
         echo "<td>";
         echo "</td>";
         echo "<td>";
         echo "<div style=\"position: relative; height: 20px;\">";
         for( $i= ($j * $NT_PER_LINE); $i < ($j +1 ) * $NT_PER_LINE; $i++ ) {

            $hp = $scores[$i] * 100;
            echo "<span style=\"display: inline-block; height: " . $hp ."%; background:lightgrey; position: relative; bottom: 0;\"> </span>";
         }
         echo "</div>";
         echo "</td>";
      echo "</tr>";
      echo"<table>";
   }
   echo "</pre>";

   echo "<pre>";
      #print_r( $sequences );
   echo "</pre>";
}
?>


</body>
</html>
