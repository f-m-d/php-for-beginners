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

// List of array functions: https://www.php.net/manual/en/book.array.php

$array = [1,4,2,7,3,4,5,2,6,1,8];
print_r($array);
print("<br/>");

// Print the max of the array
echo "The max of the array is: " . max($array) . "<br/>";

// Print the min of the array
echo "The min of the array is: " . min($array) . "<br/>";

// Sort an array
// sort(): sort the array by values, and the key will be changed (index o key dictionary)
sort($array);
print_r($array);

// Sort an array
// asort(): sort the array by value BUT DOESN'T CHANGE THE KEYS!!
//asort($array);
//print_r($array);



?>
</body>
</html>