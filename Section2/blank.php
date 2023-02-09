<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>

<?php

$name = "Frank";
$number = 100;

// PHP is case sensitive! The next variable is different from $number
$NUMBER = 100;
$NUMBeR = 200.5;
echo $name;

// How to concatenate: variable . variable2
echo $name . $NUMBER;


// We can use HTML tags in strings and be processed as tags too!
echo "<h1> Hello World! </h1>";
?>