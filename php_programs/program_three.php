<html>
    <body>
        <form method="post">
            Enter a number:
            <input type = "number" name="number">
            <input type = "submit" value="submit">
        </form>
    </body>
</html>
<?php
    // Even odd program using form in php
    if($_POST){
        $number = $_POST['number'];
        if(($number % 2) == 0){
            echo "$number is an Even number";
        }
        else{
            echo "$number is an Odd number";
        }
    }
    // code worked as expected
?>