<?php

if(isset($_POST["submit"])){

        define("USERNAME_LENGTH", 5);
        $username = $_POST["username"];
        $password = $_POST["password"];

        //echo USERNAME_LENGTH;
        if(strlen($username) < USERNAME_LENGTH){
            echo "Username has to be longer than" . USERNAME_LENGTH;
        }

}


?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="form_external_page.php" method="post">
    <input type="text" name="username" placeholder="Insert username"> <br>
    <input type="password" name="password" placeholder="Insert password"> <br>
    <input type="submit" value="Send" name="submit">
</form>

</body>
</html>