<?php
    // if-else-if
    $mark = 69;

    if($mark < 33){
        echo "Fail";
    }
    else if($mark >= 33 && $mark <= 50){
        echo "Grade D";
    }
    else if($mark > 50 && $mark < 65 ){
        echo "Grade C";
    }
    else if($mark >= 65 && $mark < 80){
        echo "Grade B";
    }
    else if($mark >= 80 && $mark < 90){
        echo "Grade A";
    }
    else if($mark >= 90 && $mark < 100){
        echo "Grade A+";
    }
    else{
        echo "Invalid input";
    }
    // code worked as expected
?>