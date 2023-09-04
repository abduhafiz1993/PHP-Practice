<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="username">username</label>    
    <input type="text" name="username"> <br> <br>
    <label for="password">Password</label>    
    <input type="password" name="password">
        <br> <br>
    <input type="submit" name="submit">
    </form>
</body>
</body>
</html>
<?php 
$password = "123";
$hash = password_hash($password, PASSWORD_DEFAULT);

if(password_verify($password, $hash)){
    echo "Password is correct";
}else {
    echo "Password is not correct";
}
?>