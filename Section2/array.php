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

// Create an array with function
// like an uncommon method
$numberList = array();
$numberList0 = array(1,2,3,4,5, "name", "surname", "<h1>Hello World!!</h1>");

// Most common method to create an array
$numberList2 = [];
$numberList3 = [1,2,3,4];

// You can print an element from array
echo $numberList0[0];

// To print an array: we can user print_r() function
// it prints in a human readable way and print array element by element
// Something like: [0] => item [1] => item1 etc.
print_r($numberList0);

?>


</body>
</html>