<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Coloured triangle</title>
   <style type="text/css">
      .col-1 { color: red; }
      .col-2 { color: orange; }
      .col-3 { color: yellow; }
      .col-4 { color: green; }
      .col-5 { color: blue; }
      .col-6 { color: indigo; }
      .col-7 { color: violet; }
   </style>
</head>
<body>

<?php

for( $row=1; $row<=7; $row++ ) {

   for( $stars=1; $stars <= $row; $stars++ ) {
      echo "<span class=\"col-$stars\">";
         echo "*";
      echo "</span>";
   }
   echo "<br>";
}

?>

</body>
</html>
