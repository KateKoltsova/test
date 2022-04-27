<?php

require_once __DIR__ . '/vendor/autoload.php';
//$text = 'Hello, World!';
//$message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
$num1 = 10;
$num2 = 5;
$math = new \Math\Mathematic();
$sayHello = $math->sayHello();
$sum = $math->sum($num1, $num2);
$divide = $math->divide($num1, $num2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1><?php echo $sayHello ?></h1>
    <p>Your numbers are <?= $num1 ?> and <?= $num2 ?></p>
    <p>Their sum is <?= $sum ?></p>
    <p>Their divide is <?= $divide ?></p>

</body>
</html>