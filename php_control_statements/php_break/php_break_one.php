<?php
    // break execution of a loop
    for($i=1; $i<=10; $i++){
        echo "$i </br>";
        
        if($i==5){
            break;
        }

    }
    // code worked as expected
?>