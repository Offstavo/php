<?php
    // Local variables 2
    function mytest()
    {
        $lang = "PHP";
        echo "web development language: ".$lang;
    }
    mytest();
    //Using $lang variable outside the function will generate an error
    echo $lang;
?>