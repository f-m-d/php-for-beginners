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
 
// Check if the value is the same: 3 == 3 
if ( 3 == 3){
    echo "3 integer is equal to 3 string <br/>";
}


if (3 == "3"){
    echo "3 integer is equal to 3 string <br/>";
}


// Check if it is IDENTICAL (SAME TYPE AND VALUE)
// In this case: first 3 is a INT, the second 3 is a STRING
if (3 === "3"){
    echo "3 integer and 3 string are IDENTICAL in value!! <br/>";
}

if (3 !== "3"){
    echo "3 integer and 3 string are NOT IDENTICAL in value!! <br/>";
}


// The OR operator
if (4 === "4" || 4 < 10){
    echo "OR Operation succed!! <br/>";
}
?>





<h1> Comparision operators </h1>
<ul>
    <li> equal ==</li>
    <li> identical === </li>
    <li> compare > < >= <= <> </li>
    <li> not equal != </li>
    <li> not identical !== </li>
</ul>


<h1>Logical Operators</h1>

<ul>
    <li>And &&</li>
    <li>Or ||</li>
    <li>Not !</li>
</ul>
</body>
</html>