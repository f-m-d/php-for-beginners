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

function return_sum($num1, $num2){
    return $num1+$num2;
}

$result = return_sum(5, 10);
echo $result;

$result = return_sum(100, $result);
echo $result;
?>

</body>
</html>