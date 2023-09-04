<?php

session_start();
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
<form action="index.php" method="post">
    <label for="username">username</label>    
    <input type="text" name="username"> <br> <br>
    <label for="password">Password</label>    
    <input type="password" name="password">
        <br> <br>
    <input type="submit" name="submit">
    </form>
    This is login page <br>
    <a href="home.php">this to home page</a> 
</body>
</html>
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        
    }}
?>