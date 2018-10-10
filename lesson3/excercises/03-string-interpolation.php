<?php

$some_variable = 'Contens of $some_variable';

echo "Single Quotes:\n";
echo "\t" .
   'Show variable $some_variable: "$some_variable"' .
   "\n";

echo "Double Quotes:\n";
echo "\t Show variable \$some_variable: \"$some_variable\"\n";

echo "Single Quotes BIS:\n";
echo "\t" . 'Show variable $some_variable: "' ; #. $some_variable. "\"\n";
echo "\n";

echo "\t" . 'Show variable $some_variable: "' . $some_variable . '"' . "\n";


exit;
echo "Single Quotes:\n";
echo "\t" . 'Show variable $some_variable: "$some_variable"' . "\n";
echo "Double Quotes:\n";
echo "\tShow variable \$some_variable: \"$some_variable\"" . "\n";
