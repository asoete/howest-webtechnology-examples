<?php

ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Include and Require</title>
</head>
<body>

   <h1>Main</h1>

   <?php

      // include file, warn on failure
      include("part1.php");

      // include file, error in failure
      require("part1xx.php");

   ?>

</body>
</html>
