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
        <label for="arraycontent"><input type="text" name="arraycontent">Array content[0]</label> <br>
        <label for="arraycontent1"><input type="text" name="arraycontent1">Array content[1]</label> <br>
        <label for="arraycontent2"><input type="text" name="arraycontent2">Array content[2]</label> <br>
        <label for="arraycontent3"><input type="text" name="arraycontent3">Array content[3]</label> <br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <form action="index.php" method="post">
        <label for="arrkey"><input type="text" name="arrkey">key[0]</label>
    <label for="arrcontent"><input type="text" name="arrcontent">Array content[0]</label> <br>
    <label for="arrkey1"><input type="text" name="arrkey1">key[1]</label>    
    <label for="arrcontent1"><input type="text" name="arrcontent1">Array content[1]</label> <br>
    <label for="arrkey2"><input type="text" name="arrkey2">key[2]</label>    
    <label for="arrcontent2"><input type="text" name="arrcontent2">Array content[2]</label> <br>
    <label for="arrkey3"><input type="text" name="arrkey3">key[3]</label>
    <label for="arrcontent3"><input type="text" name="arrcontent3">Array content[3]</label> <br>
        <input type="submit" value="Submit" name="submit2">
    </form>
    
</body>
</html>
<?php
if(isset($_POST['submit'])){

    if(isset($_POST['arraycontent']) && isset($_POST['arraycontent1']) && isset($_POST['arraycontent2']) && isset($_POST['arraycontent3'])){
    $arraycontent = $_POST['arraycontent'];
    $arraycontent1 = $_POST['arraycontent1'];
    $arraycontent2 = $_POST['arraycontent2'];
    $arraycontent3 = $_POST['arraycontent3'];

    $array = [$arraycontent, $arraycontent1, $arraycontent2, $arraycontent3];

    foreach ($array as $value) {
        echo $value . "<br>";
}
}
else{
    echo "Please fill all the fields";
}
}

if(isset($_POST['submit2'])){
    $arrkey = $_POST['arrkey'];
    $arrkey1 = $_POST['arrkey1'];
    $arrkey2 = $_POST['arrkey2'];
    $arrkey3 = $_POST['arrkey3'];
    $arrcontent = $_POST['arrcontent'];
    $arrcontent1 = $_POST['arrcontent1'];
    $arrcontent2 = $_POST['arrcontent2'];
    $arrcontent3 = $_POST['arrcontent3'];
    $arrays = [ "$arrkey" => $arrcontent, "$arrkey1" => $arrcontent1, "$arrkey2" => $arrcontent2, "$arrkey3" => $arrcontent3 ];
    foreach ($arrays as $key => $value) {
        echo $key . " " . $value . "<br>";
    }
}
?>