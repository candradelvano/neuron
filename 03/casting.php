<?php

    
    $var1 = 19; // type integer
    $var2 = "18"; // type string
    $nilai = 18.5; // type float
    $boolean = true; // type boolean
    $string2 = "14.5";

    echo gettype($string2);
    echo gettype($nilai);

    // casting from decimal to integer
    echo (integer) $nilai;
    echo "\n";

    // casting from integer to decimal
    echo (double) $var1;
    echo "\n";

    // casting from string to integer
    echo (integer) $var2;
    echo "\n";

    echo $boolean;
    echo "\n";
    
    echo (float) $string2;
    echo "\n";

?>