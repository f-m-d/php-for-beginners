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
// Standard array
$number = [];

// Associative arrays (aka Dictionaries I guess)
$names = array("first_name"=> "Frank", "second_name" => "D'Auria", "middle_name" => "Maria");


// Print the array
print_r($names);

// Print the element by key
echo $names["first_name"] . "" . $names["second_name"];


?>

</body>
</html>