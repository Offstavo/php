<?php
    // Nested if
    $age = 23;
    $nationality = "Indian";

    if($nationality == "Indian"){

        if($age > 18){
            echo "Eligible to give vote";
        }

        else{
            echo "Not eligible to give vote";
        }

    }
    // code worked as expected
?>