<?php
  $a = 40;
  $b = 20;

  $your_choice = '-';

  switch($your_choice) {
    case '+' : {  
      $result = $a + $b;
      break;
    }

    case '-' : {  
      $result = $a - $b;
      break;
    }

    case '*' : {  
      $result = $a * $b;
      break;
    }

    case '/' : {  
      $result = $a / $b;
      break;
    }
  }
  echo "you choose $your_choice the result is $result";
?>