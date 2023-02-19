<?php


// THIS PHP CODE IS NOW BEFORE HTML CODE:
// SHOULD BE EXECUTED 

// Global variable: $_POST will pick the POST HTTP request

// Check with: isset() if the POST variable is set
// fr the name="submit_form" of the submith button
if(isset($_POST["submit_form"])){
    echo "Submit!" . "<br>";
}

if(isset($_POST["username"])){
    echo "Username!" . "<br>";
}

if(isset($_POST["password"])){
    echo "Password!" . "<br>";
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

<!-- action= the file where to sent the request-->
<!-- In our case, to ourself file and parse the HTTP POST request-->
<form action="form.php" method="POST">
    <input type="text" placeholder="Insert name" name="username"> <br>
    <input type="password" placeholder="Insert password" name="password"> <br>
    <input type="submit" name="submit_form" >
</form>



</body>
</html>