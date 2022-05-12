<?php

require_once __DIR__ . '/vendor/autoload.php';

$logger = new \Logger\Logger(['File', 'Im']);
$math = new \Math\Mathematic($logger);

$a = 20;
$b = 10;
echo $math->sum($a,$b);