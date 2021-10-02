<?php
    //Static variable
    // Static variables exist only in a local function, 
    //but it does not free its memory after the program 
    //execution
    function static_var()
    {
        static $num1 = 3;
        $num2 = 6;

        $num1++;
        $num2++;

        echo "Static:".$num1."</br>";
        echo "Non-static".$num2."</br>";
    }
    static_var();
    static_var();
?>