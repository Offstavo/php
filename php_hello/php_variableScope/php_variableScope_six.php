<?php
    //If both global and local variables have the same name...
    //the local variable has hiegher priority inside the fuction
    $x = 5;
    function mytest()
    {
        $x = 7;
        echo "value of x is: ".$x;
    }
    mytest();
?>