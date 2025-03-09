<!-- <?php
    /*
    ************************************indexed array***********************************
    array has two types indexed array assosiative array.
    index array: for printing the array we use print_r instead of echo.
    */


    $even_numbers = [2, 4, 6, 8, 10];
    $colors  = array('red', 'blue', 'green', 'black');


    // if we want that the green is stored in another variable we do it with the help of index.
    $x = $colors[2];
    echo $x;


    /* 
    print_r($even_numbers);
    echo "<br />";
    print_r($colors);
    

    for beauty format we print array like this
    */
    echo "<pre>";
    print_r($colors);
    echo "</pre>";
?> -->





<!-- <?php
    //associative array isky andr key value hoonge isko access krny kk liye be key ka use hoga..

    $students = [
      'firstname' => 'muhammad',
      'lastname' => 'Nasir',
      'phoneNumber' => 03015202722,
      'adress' => 'pakistan'
    ];

    echo "<pre>";
    print_r($students);
    echo "</pre>";
?> -->



<?php
    //Multidimensional array array kkkk andrr dosre array bana skty hain ismein.

    $colors  = array('red', 'blue', [2, 4,[1, 3, 5, 7], 6, 8, 10], 'green', 'black');
    $new = $colors[2][2][3];
    echo $new;

    echo "<pre>";
    print_r($colors);
    echo "</pre>";

?>
