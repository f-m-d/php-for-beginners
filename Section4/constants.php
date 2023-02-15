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


// Define a constant value
define("NAME", 1000);

echo $NAME;



// Newer Way of creating a Constant
// Now is possible to create a constant using the keyword "const" but it does not work the same as the define() function but it is very similar.

// From PHP.net = https://www.php.net/manual/en/language.constants.syntax.php

// When using the const keyword, only scalar data (boolean, integer, float and string) can be contained in constants prior to PHP 5.6. From PHP 5.6 onwards, it is possible to define a constant as a scalar expression, and it is also possible to define an array constant. It is possible to define constants as a resource, but it should be avoided, as it can cause unexpected results.



// const CONSTANT = 'Hello World';



// It is possible to assign an array with this method like so.



// const ANIMALS = array('dog', 'cat', 'bird');



// Some examples from the docs below, so you can copy it and try it in your php file.

// // Works as of PHP 5.3.0
 
// const CONSTANT = 'Hello World';
 
 
// echo CONSTANT;
 
 
// // Works as of PHP 5.6.0
 
// const ANOTHER_CONST = CONSTANT.'; Goodbye World';
 
// echo ANOTHER_CONST;
 
 
// const ANIMALS = array('dog', 'cat', 'bird');
 
// echo ANIMALS[1]; // outputs "cat"
 
 
// // Works as of PHP 7
 
// define('ANIMALS', array(
 
// 'dog',
 
// 'cat',
 
// 'bird'
 
// ));
 
// echo ANIMALS[1]; // outputs "cat"


?>

</body>
</html>