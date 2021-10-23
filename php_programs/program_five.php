<form method="post">
    Enter a number: <input type="text" name="input"><br><br>
    <input type = "submit" name = "submit" value = "Submit">
</form>
<?php
// determine if input is prime
if($_POST){
    $input = $_POST['input'];
    for($i=2; $i<=$input-1;$i++){
        if($input % $i == 0){
            $value = $True;
        }
    }
    if(isset($value) && $value){
        echo 'The Number '.$input.' is not prime';
    }
    else{
        echo 'The Number '.$input.' is prime';
    }
}
// code worked as expected
?>