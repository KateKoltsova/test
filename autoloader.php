<?php


function autoload($classFullName)
{
    $classFullNameArray = explode('\\', $classFullName);
    $className = $classFullNameArray[count($classFullNameArray) - 1];
    $filename = __DIR__ . '/oop/' . $className . '.php';
    if (file_exists($filename)) {
        require_once $filename;
    }
}

spl_autoload_register('autoload');

