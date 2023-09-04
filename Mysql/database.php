<?php
$user="root";
$Host="localhost";
$pass="";
$db="mydba";
$conn ="";

try{
    $conn = mysqli_connect($Host, $user, $pass, $db);
}
catch(mysqli_sql_exception){
    echo "Connection Failed"; 
}





?>