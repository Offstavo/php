<?php
    // Global variable 2
    $name = "Sanaya Sharma"; //Global Variable
    function global_var()
    {
        echo "Variable inside the fuction is: ".$name;
        echo "</br>";
        // generates error because variable was not declared inside function using global keyword
    }
    global_var();
?>