<?php
    // print associative array using for each loop
    $employee = array(
        "Name" => "Alex",
        "Email" => "alex_jtp@gmail.com",
        "Age" => 21,
        "Gender" => "Male"
    );

    foreach($employee as $key => $element){
        echo $key." : ".$element;
        echo "</br>";
    }
    // code worked as expected
?>