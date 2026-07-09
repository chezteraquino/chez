<?php



$num1 = 10;
$num2 = 20;
$num3 = 30;
$num4 = 40;


$sum = $num1 + $num2;
$difference = $num3 - $num2;
$product = $num1 * $num4;
$division = $num4 / $num2;


$total = $sum + $difference + $product + $division;


$average = $total / 4;


echo "The sum of $num1 and $num2 is $sum.<br>";
echo "The difference between $num3 and $num2 is $difference.<br>";
echo "The product of $num1 and $num4 is $product.<br>";
echo "The division of $num4 by $num2 is $division.<br>";
echo "The total of all results is $total.<br>";
echo "The average of all results is $average.<br>";

?>