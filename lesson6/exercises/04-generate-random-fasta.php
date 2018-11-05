<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Generate Random Sequence</title>
   <style type="text/css">
   .col {

      width: 45%;
      margin: 0;
      padding: 1em;
      display: inline-block;
      vertical-align: top;
      border: solid red 1px;
   }
   label {
      margin: 1em 0;
      display: block;
   }
   input[type=submit] {

      width: 100%;
   }
   </style>
</head>
<body>

   <h2>Generate a random fasta sequence</h2>

   <div class="col">
      <form action="#" method="get">
         <label>
            Seq Header
            <input type="text" value="" name="header">
         </label>

         <label>
            Seq Alphabet
            <input type="text" value="" name="alphabet">
         </label>

         <label>
            Tot Nr NTs
            <input type="number" value="" name="tot_nr_nts">
         </label>

         <label>
            NTs per line
            <input type="number" value="" name="nts_per_line">
         </label>

         <input type="submit" value="Generate" name="submit">
      </form>
   </div>
   <pre class="col">
<?php

if( isset($_GET['submit']) ) {

   # print_r( $_GET );

   if( !empty( $_GET['header']) ) {

      $header = $_GET['header'];
   }
   else {

      echo "[WARN] Empty header, fall back to Rand Seq #1";
      $header = "Rand Seq #1";
   }
   // $header = $_GET['header'];

   $alphabet = str_split( $_GET['alphabet'] );
   $tot_nr_nts = $_GET['tot_nr_nts'];
   $nts_per_line = $_GET['nts_per_line'];

   # print_r( $alphabet );

   echo "<h4> > $header</h4>";

   for( $nt_count=1; $nt_count <= $tot_nr_nts; $nt_count++ ) {

      $alphabet_index = rand(0, count($alphabet) - 1 );

      echo $alphabet[ $alphabet_index];

      // if( ( $nt_count % $nts_per_line ) === 0 and $nt_count !== 0 ) {
      if( ( $nt_count % $nts_per_line ) === 0 ) {

         echo "\n";
      }
   }
}
?>

   </pre>

</body>
</html>
