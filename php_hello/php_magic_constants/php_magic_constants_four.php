<?php
    // __FUNCTION__
    echo "<h3>Example for __FUNCTION__</h3>";

    function test()
    {
        // Print the funtion name
        echo "The fuction name is: ".__FUNCTION__."<br><br>";
    }
    test();

    function test_function()
    {
        echo "hie";
    }
    test_function();

    echo __FUNCTION__."<br><br>";
    //does not work because it is used outside a function
?>