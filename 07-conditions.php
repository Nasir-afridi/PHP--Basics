<?php
 

/*
  find the even and odd number.
  $num = 8;
  if($num % 2 == 0) {
    echo "$num is even number.";
  }else{
    echo "$num is odd number.";
  }
*/
  
  $age = 1088;

  if(($age > 0) and ($age <= 25)) {
    echo "your age is in range of 0 to 25";
  }elseif(($age > 25) and ($age <= 50)) {
    echo "your age is in range of 25 to 50";
  }elseif(($age > 50) and ($age <= 75)) {
    echo "your age is in range of 50 to 75";
  }elseif(($age > 75) and ($age <=  100)) {
    echo "your age is in range of 75 to 100";
  }else{
    echo "Congragulations.....you are over age";
  }
?>