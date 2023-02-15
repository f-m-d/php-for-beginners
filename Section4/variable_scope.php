<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

// Available scopes for variables:
// * GLOBAL SCOPE: variable available inside and outside the function
// * LOCAL SCOPE: variable available only inside the function

$x = "outside"; //Global

function convert(){

    // Now we are editing the variable $x OUTSIDE the function!!
    // Modify this $x will change the $x outside
    global $x;
    $x = "inside";  //Local
}

// Before convert
echo $x;
echo "<br/>";

convert();


// After convert
echo $x;
echo "<br/>";
?>

</body>
</html>