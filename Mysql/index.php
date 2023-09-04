<?php 
include("database.php");
$username = "admin";
$password = "admin1";
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash')";

try{
    mysqli_query($conn, $sql);
}catch(mysqli_sql_exception){
    echo "Connection Failed"; 
}
mysqli_close($conn);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
</body>
</html>

<?php 

?>