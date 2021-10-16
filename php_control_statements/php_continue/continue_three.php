<?php  
    // continue example with array of string
    $number = array ("One", "Two", "Three", "Stop", "Four");  
    foreach ($number as $element) {  
        if ($element == "Stop") {  
            continue;  
        }  
        echo "$element </br>";  
    }  
?>  