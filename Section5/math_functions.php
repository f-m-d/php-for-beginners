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

// Some math functions
// List: https://www.php.net/manual/en/ref.math.php

// Power(base, exponent)
$power = pow(5, 3);
echo "The 5 with power 3 is: " . $power . "<br/>";

// Randomness: rand(min,max)
$random = rand(0, 100);
echo $random . "<br/>";

// Square root: sqrt(number)
$square = sqrt(81);
echo "The square root of 81 is: " . $square . "<br/>";

// Ceil: round decimal numbers to closest integer
// Round to the upper always (ceil = up rounding): like 4.1 -> 5
$values = [4.6, 4.5, 4.4, 4.1, 4];

echo "Ceil: <br/>";
echo ceil($values[0]) . "<br/>"; // Result: 5
echo ceil($values[1]) . "<br/>"; // Result: 5
echo ceil($values[2]) . "<br/>"; // Result: 5
echo ceil($values[3]) . "<br/>"; // Result: 5
echo ceil($values[4]) . "<br/>"; // Result: 4


//Floor: roun decimal to closest integer
// Round to lower value always (floow = down rounding) like 4.9 -> 4
echo "Floor: <br/>";
echo floor($values[0]) . "<br/>"; // Result: 4
echo floor($values[1]) . "<br/>"; // Result: 4
echo floor($values[2]) . "<br/>"; // Result: 4
echo floor($values[3]) . "<br/>"; // Result: 4
echo floor($values[4]) . "<br/>"; // Result: 4
echo floor(5) . "<br/>";          // Result: 5


// Round: round the number to closest int (still return a float)
// Care the .5 value is rounded to ceiling! E.G. 4.5 -> 5
echo "Round: <br/>";
echo round($values[0]) . "<br/>"; // Result: 5
echo round($values[1]) . "<br/>"; // Result: 5
echo round($values[2]) . "<br/>"; // Result: 4
echo round($values[3]) . "<br/>"; // Result: 4
echo round($values[3]) . "<br/>"; // Result: 4

?>

</body>
</html>