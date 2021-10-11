<?php
    // bitwise operators
    $a = 5;
    $b = 3;
    $and = $a & $b;
    echo "the output of a and b is".$and."</br>";
    $or = $a | $b;
    echo "the output of a or b is".$or."</br>";
    $xor = $a ^ $b;
    echo "the output of a xor b is".$xor."</br>";
    $not = ~$a;
    echo "the output of not a ".$not."</br>";
    $sl = $a << $b;
    echo "the output of shift left a << b is".$sl."</br>";
    $sr = $a >> $b;
    echo "the output of shift right a >> b is".$sr."</br>";

?>