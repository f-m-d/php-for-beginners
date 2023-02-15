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

// Reference: https://www.php.net/manual/en/book.strings.php

$a = "Hello student do you like the class";

// Calculate length of the string, the number of chars within: strlen(string)
// NB: spaces are considered as chars
echo "String \"$a\" length is: " . strlen($a) . "<br/>";


// String to UPPER CASE: strtoupper(string)
echo "String \"$a\" to upper case is: " . strtoupper($a) . "<br/>";

// String to lower case: strtolower(string)
echo "String \"$a\" to lower case is: " . strtolower($a) . "<br/>";

?>

</body>
</html>