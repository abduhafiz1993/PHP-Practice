<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="number">Age: <input type="number" id="number" name="number"></label>
        <br>
        <label for="number">Number: <input type="number" id="numbers" name="numbers"> </label>
        <br>
        <label for="grade">Grade: <input type="text" id="grade" name="grade"></label>
        <br> <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
$age=$_GET['number'];

if($age>=18){
    echo "You are eligible to vote";
}elseif($age<=0){
    echo "invalid age";
}
else{
    echo "You are not eligible to vote";
}

$grade =$_GET['grade'];

switch ($grade){
    case 'A':
        echo "Excellent";
        break;
    case 'B':
        echo "Good";
        break;
    case 'C':
        echo "Average";
        break;
    case 'D':
        echo "Poor";
        break;
    case 'F':
        echo "Fail";
    default:
        echo "Invalid grade";
}

echo "<br> By using  for loop";
$numbers=$_GET['numbers'];
for ($i=0; $i<=10; $i++){
    echo $numbers++;
}
echo "<br> By using for each";

foreach ($numbers as $number){
    echo $number;
}

?>