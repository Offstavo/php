<?php  
    // continue example with optional argument
    for ($i =1; $i<=3; $i++) {  
        for ($j=1; $j<=3; $j++) {  
            if (($i == $j) ) {      
                continue 1;     
            }  
            echo $i.$j;  
            echo "</br>";  
        }  
    }    
    // code worked as expected 
?>  