<?php

$number1=$_POST["number1"];
$number2=$_POST["number2"];

$sum=$number1+$number2;
$differanse=$number1-$number2;
$produkt=$number1*$number2;
$kvotient=$number1/$number2;
print ("$number1 + $number2 = $sum <br />");
print ("$number1 - $number2 = $differanse <br />");
print ("$number1 * $number2 = $produkt <br />");
print ("$number1 / $number2 = $kvotient <br />");
?>