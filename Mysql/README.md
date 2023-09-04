# Database
In php mysql can connect to ways by using mysqli and mysql.

###   $conn = mysqli_connect($Host, $user, $pass, $db);

this is a fuction that connect our database to php

### include("database.php");
This fution include another file to php file.

### mysqli_query($conn, $sql);

this function uses to add sql command query in the process.

### $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash')";
this sql code inser data to the database.


### mysqli_close($conn);

This line of code close the connection.
