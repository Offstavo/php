<?php
    // Global variable 3
    // Using $GLOBALS array
    $num1 = 5;
    $num2 = 13;
    function global_var()
    {
        $sum = $GLOBALS['num1']+$GLOBALS['num2'];
        echo "sum of global variables is".$sum;
    }
    global_var();
?>