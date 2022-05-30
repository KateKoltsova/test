<?php

require_once __DIR__ . '/vendor/autoload.php';

$formatter = new \Logger\Formatter();
$fileWriter = new \Logger\FileWritter($formatter);
$dbWriter = new \Logger\DBWritter($formatter);
$logger = new \Logger\Logger([$fileWriter, $dbWriter]);
$math = new \Math\Mathematic($logger);

$a = 20;
$b = 10;
echo $math->sum($a,$b);