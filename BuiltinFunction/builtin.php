<?php
$abs1=null;
$abs2=null;
$round=null;
$round1=null;
$floor=null;
$floor1=null;
$ceil=null;
$ceil1=null;
$pow=null;
$max=null;
$min=null;
$rand=null;
$sqrt=null;



$num1=$_POST['num1'];
$num2=$_POST['num2'];
$abs1=abs($num1);
$abs2=abs($num2);
$round=round($num1);
$round1=round($num2);
$floor=floor($num1);
$floor1=floor($num2);
$ceil=ceil($num1);
$ceil1=ceil($num2);
$pow=pow($num1,$num2);
$max=max($num1,$num2);
$min=min($num1,$num2);
$rand=rand($num1,$num2);
$sqrt=sqrt($num1);

echo "abs() of number1 is {$abs1}<br>";
echo "abs() of number2 is {$abs2}<br>";
echo "round() of number1 is {$round}<br>";
echo "round() of number2 is {$round1}<br>";
echo "floor() of number1 is {$floor}<br>";
echo "floor() of number2 is {$floor1}<br>";
echo "ceil() of number1 is {$ceil}<br>";
echo "ceil() of number2 is {$ceil1}<br>";
echo "pow() of number1 by number2 is {$pow}<br>";
echo "max() of number1 and number2 is {$max}<br>";
echo "min() of number1 and number2 is {$min}<br>";
echo "rand() of number1 and number2 is {$rand}<br>";
echo "sqrt() of number1 is {$sqrt}<br>"; 
?>