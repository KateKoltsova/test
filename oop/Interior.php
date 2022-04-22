<?php
//Композиция
namespace oop;

class Interior
{
    public string $material;
    public const SIZE_CAR = '1100mm * 800mm';
    public const SIZE_TRUCK = '1500mm * 1100mm';
    public const SIZE_MOTORCYCLE = 'equal to the body';

    public function __construct($material)
    {
        $this->material = $material;
    }


}