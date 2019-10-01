<?php
header('Access-Control-Allow-Origin: *'); // allow hosts to access the api
header('Content-Type: application/xml; charset=utf-8'); //xml data

if(isset($_GET['num1']) &&
isset($_GET['num2']) &&
isset($_GET['num3'])
)
{
    $number1 = $_GET['num1'];
    $number2 = $_GET['num2'];
    $number3 = $_GET['num3'];

    
    $product = $number1 * $number2 * $number3;
    $subtraction = $number1 - $number2 - $number3;

    $result = "<?xml version='1.0' encoding='UTF-8'?>
    <results>
    <product>$product</product>
    <subtraction>$subtraction</subtraction>
    </results>";

   echo $result;
}
else
{
    $result = "<?xml version='1.0' encoding='UTF-8'?>
    <results>
     <error>'Wrong GET parameters! Refer to api documentation'</error>
    </results>";

    echo $result;
}
?>