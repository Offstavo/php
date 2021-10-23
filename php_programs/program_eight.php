<html>
    <head>
        <title>Factorial Program using loop in PHP</title>
    </head>
    <body>
        <form method = "post">
            Enter the number:</br>
            <input type = "number" name = "number" id = "number">
            <input type = "submit" name = "submit" value = "Submit"/>
        </form>

        <?php
            if($_POST){
                $fact = 1;
                $number = $_POST['number'];
                echo "Factorial of $number:<br><br>";

                for($i=1; $i<=$number; $i++){
                    $fact = $fact * $i;
                }
                echo $fact."</br>";
            }
            // code worked as expected
        ?>
    </body>
</html>