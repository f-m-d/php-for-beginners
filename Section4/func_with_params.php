<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem natus numquam mollitia voluptatibus iure doloremque recusandae voluptate, fugit dignissimos, corporis ipsa qui veritatis et! Culpa, perspiciatis. Excepturi architecto quae eius!</p>

<?php

function greeting($message){
    echo $message;
}


function calculate_with_params($num1, $num2){
    $sum = $num1 + $num2;
    echo $sum;
}

greeting("Hello World");
calculate_with_params(3,5);
?>


</body>
</html>