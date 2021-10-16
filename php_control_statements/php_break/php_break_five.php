<?php
    // using optional argument
    $i = 0;
    while(++$i){
        switch($i){
            case 5:
                echo "At matched condition i=5 </br> \n";
                break 1;
            case 10:
                echo "At matched condition i=10; quiting </br> \n";
                break 2;
            default:
                break;
        }
    }
    // code worked as expected
?>