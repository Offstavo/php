<?php
    // nested while loop
    $i = 1;

    while($i <= 3){
        $j = 1;

        while($j <= 3){
            echo "$i $j</br>";
            $j++;
        }

    $i++;
    }
    // code worked as expected
?>