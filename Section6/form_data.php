<?php

// To get values, get the values from POST superglobal variable directly!
if(isset($_POST["submit"])){

//print_r($_POST);
//echo "Username is set?: " . isset($_POST["username"]) . "<br>";
//echo "Password is set?: " . isset($_POST["password"]) . "<br>";

$username = $_POST["username"];
$password = $_POST["password"];
echo $username;
echo $password;


}


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

<form action="form_data.php" method="post">
    <input type="text" placeholder="Insert username" name="username"> <br>
    <input type="password" placeholder="Insert password" name="password"> <br>
    <input type="submit" placeholder="Submit" name="submit">
</form>

</body>
</html>