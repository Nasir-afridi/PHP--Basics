<?php
  $a = 299;
  /* 
   $result = ($a % 2 == 0) and ($a >= 0);
   symbol be likh skty and ka or simple and be likh skty.
   $result = ($a % 2 == 0) || ($a >= 0);
   $result = !(($a % 2 == 0) || ($a >= 0));
   */


  // using ternary operator to check the number is even or odd.

  $output = ($a % 2 == 0) ? "$a is even number." : "$a is odd number.";
  echo $output;
?>