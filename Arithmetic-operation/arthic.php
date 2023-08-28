<?php
$Addition=null;
$Subtraction=null;
$Multiplication=null;
$Division=null;
$Powerof=null;
$Modulus=null;

$number1=$_POST['num1'];
$number2=$_POST['num2'];
 $Addition=$number1+$number2;
 $Subtraction=$number1-$number2;
 $Multiplication=$number1*$number2;
 $Division=$number1/$number2;
 $Modulus=$number1%$number2;
 $Powerof=$number1**$number2;
 echo "Addition of number1 and number2 is {$Addition} <br>";
 echo "Subtraction of number1 and number2 is {$Subtraction} <br>";
 echo "Multiplication of number1 and number2 is {$Multiplication} <br>";
 echo "Division of number1 and number2 is {$Division} <br>";
 echo "Modulus of number1 and number2 is {$Modulus} <br>";
 echo "Power of number1 and number2 is {$Powerof} <br>";

?>
