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

### mysqli_fetch_assoc($result);

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
    }
}

to retrive data from the database
