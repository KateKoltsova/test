<?php

namespace Math;

use Psr\Log\LoggerInterface;

class Mathematic
{
    public $logger;

    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }

    public function sayHello(){
        return "Hello! I'm your personal calculator!";
    }
    public function sum($a, $b)
    {
        $this->logger->debug('User call function SUM and take arguments ',[$a, $b]);
        $result = $a + $b;
        $this->logger->info('Function SUM result ', [$result]);
        return $result;
    }

    public function divide($a, $b)
    {
        $this->logger->debug('User call function DIVIDE and take arguments ',['a'=>$a, 'b'=>$b]);
        $result = $a / $b;
        $this->logger->info('Function DIVIDE result ', [$result]);
        return $result;
    }

}