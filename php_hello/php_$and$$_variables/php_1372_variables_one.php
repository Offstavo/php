<?php
    // php $and$$ Variables 1
    $x = 'abc';
    $$x = 200;
    echo $x."</br>"; //outputs abc
    echo $$x."</br>"; //outputs 200
    echo $abc; //outputs 200
?>