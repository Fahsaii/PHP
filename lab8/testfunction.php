<?php


function add($n1,$n2){
    echo "<br><br>num1 = ",$n1," + num2 = ",$n2;
    $result=$n1+$n2;
    echo "<br><br>Result Add : ".$result;
}
function subtract($n1,$n2 =50){
    echo "<br><br>num1 = ",$n1," - num2 = ",$n2;
    $result=$n1-$n2;
    echo "<br><br>Result Add : ".$result;
}
function Multiply($n1,$n2){
    echo "<br><br>num1 = ",$n1," * num2 = ",$n2;
    $result=$n1*$n2;
    return $result;
}
function Divide($n1,$n2,&$result){
    echo "<br><br>num1 = ",$n1," / num2 = ",$n2;
    $result = $n1/$n2;
}

$num1=10;
$num2=20;

subtract($num1);
add($num1,$num2);
$resultMultiply = Multiply($num1,$num2);
echo "<br><br>Result Add : ".$resultMultiply;
Divide($num1,$num2,$resultDivide);
echo "<br><br>Result Add : ".$resultDivide;
?>