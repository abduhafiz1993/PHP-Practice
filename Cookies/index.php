<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play with cookies</title>
</head>
<body style="display: flexbox; justify-content: space-around; align-items: center; background-color: cadetblue; flex-direction: column; ">
<form action="index.php" method="post">
    <label for="username">username</label>    
    <input type="text" name="username"> <br> <br>
    <label for="password">Password</label>    
    <input type="password" name="password">
        <br> <br>
    <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
setcookie("username", "admin", time() + (86400 * 30), "/");
setcookie("password", "admin", time() + (86400 * 30), "/");

// display cookies

foreach ($_COOKIE as $name => $value) {
    echo "$name = $value <br>";
}

?>