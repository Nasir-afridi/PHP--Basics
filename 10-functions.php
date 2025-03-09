<!-- <?php
    /* 
     two types of function predefined and user defined
     predefined functions are already defined in php
     user defined functions are defined by the user
     

     // Predefined function for round off the value.
     $x = 5.6;
     $x = round($x);
     echo "$x <br>";
    */
   ?>  -->



    <?php
    //user defined functions.

    function info($name, $age) {
       echo "my name is $name <br> my age is $age <br><br><br><br>";
    }

    info('nasir', 20);
    info('waqas', 2);

    function name($adress, $country) {
        $result = "$adress $country";
        return $result;
    }

   $output = name('wah cantt', 'pakistan');
   echo $output;
    ?> 