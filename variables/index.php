<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>Variables</h1> 
    <p>In PHP, variables are containers for storing data.</p>
</body>
</html>

<?php
$variabel1 = "String";
$variabel2 = 10; // Integer
$variabel3 = 10.5; // Float
$variabel4 = true; // Boolean
$variabel5 = array(1, 2, 3); // Array

echo "This are variables\n";
echo "variables use \$  sign ";

echo "<br>Sting variable: name={$variabel1}<br> intger variable: num={$variabel2}<br> float variable: price={$variabel3}<br> boolean variable: online={$variabel4}<br> Array variable: <br>{$variabel5[0]}<br>{$variabel5[1]}<br>{$variabel5[2]}<br>{$variabel4}<br>"; // {$variabel1}, {$variabel2}, {$variabel3}, {$variabel4}, {$variabel5}";

?>