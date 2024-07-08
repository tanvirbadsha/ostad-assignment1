<?php 
$num1 =4;
$num2 =5;
$num3 =6;

$largestNumber = $num1;
if($num2 > $largestNumber && $num2 > $num3){
    $largestNumber = $num2;
}else if($num3 > $largestNumber && $num3 > $num2){
    $largestNumber = $num3;
}
echo $largestNumber;