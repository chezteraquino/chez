<?php

$num1 = 10;
$num2 = 20;
$num3 = 30;
$num4 = 40;

$add = $num1 + $num2;
$sub = $num3 - $num2;
$multi = $num1 * $num4;
$div = $num4 / $num2;
$total = $add + $sub + $multi + $div;
$ave = $total / 4;

echo "The sum of $num1 and $num2  is $add <br> <br>";
echo "The difference of $num3 and $num2 is $sub  <br> <br>";
echo "The product of $num1 and $num4 is $multi <br> <br>";
echo "The division of $num4 and $num2 is $div  <br> <br>";
echo "The total of all result is $total <br> <br>";
echo "The average of all result is the $ave  <br> <br>";

?>