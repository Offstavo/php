<?php
    // Global variable
    $name = "Sanaya Sharma"; //Global Variable
    function global_var()
    {
        global $name;
        echo "Variable inside the fuction is: ".$name;
        echo "</br>";
    }
    global_var();
    echo "Variable ouside the fuction is ".$name;
?>