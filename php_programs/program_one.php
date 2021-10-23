<?php
    // find the sum of digits
    $num = 14597;
    $sum = 0; $rem = 0;
    for ($i=0; $i<=strlen($num); $i++){
        $rem = $num%10;
        $sum = $sum + $rem;
        $num = $num/10;
    }
    echo "sum of digits 14597 is $sum";
    // code worked as expected
?>