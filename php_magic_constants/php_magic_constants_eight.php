<?php   
    // __NAMESPACE__
    echo "<h3>Example for __NAMESPACE__</h3>";  
    class name {    
        public function __construct() {    
            echo 'This line will print on calling namespace.';     
        }     
    }    
    $class_name = __NAMESPACE__ . '\name';    
    $a = new class_name;   
    // code dint work as expected
?>  