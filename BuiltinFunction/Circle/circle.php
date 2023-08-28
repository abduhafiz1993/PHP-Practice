<?php
$area=null;
$circumference=null;

$radius=$_POST['radius'];
$area=pi()*$radius*$radius;
$circumference=2*pi()*$radius;

echo "Area of circle is {$area}<br>";
echo "Circumference of circle is {$circumference}";
?>