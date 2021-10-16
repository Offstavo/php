<?php
    // continue example in while loop
    echo "Even numbers between 1 to 20: </br>";
    $i = 1;
    while($i <= 20){
        if($i%2 == 1){
            $i++;
            continue;
        }
        echo $i;
        echo "</br>";
        $i++;
    }
    // code worked as expected
?>