<?php
    // assignment operators
    $a = 5;
    $b = 3;
    echo 'The original value of a is:'.$a."</br>";
    echo 'The original value of b is:'.$b."</br>";

    $a = $b;
    echo ' After $a = $b the value of $a now is :'.$a."<br>";
    $a += $b;
    echo 'After $a += $b the value of $a now is :'.$a."<br>";
    $a -= $b;
    echo 'After $a -= $b the value of $a now is :'.$a."<br>";
    $a *= $b;
    echo 'After $a *= $b the value of $a now is :'.$a."<br>";
    $a /= $b;
    echo 'After $a /= $b the value of $a now is :'.$a."<br>";
    $a %= $b;
    echo 'After $a %= $b the value of $a now is :'.$a."<br>";
    // code worked as expected
?>