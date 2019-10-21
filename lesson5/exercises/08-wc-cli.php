<?php

if( !isset( $argv[1]) ) {

   die("No file provided.
   USAGE:
      php $argv[0] <file>
");
}

$file = $argv[1];

$lines = file( $file );

$line_count = 0;
$word_count = 0;
$chr_count = 0;

foreach( $lines as $line ) {

   $chr_count += strlen( $line );

   $line = trim( $line );
   $line_count++;

   if( empty( $line ) ) {

      continue;
   }

   // get word count

   $line_words = explode( " ", $line );
   $word_count += count( $line_words );
}

echo "\n";
echo "Number of Lines in file: $line_count\n";
echo "Number of Words in file: $word_count\n";
echo "Number of Chars in file: $chr_count\n";

