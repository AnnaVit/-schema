<?php

namespace strategy\service;

echo 'Привет';

class Autoloader
{
    public $expansion = '.php';
    const  ROOT_DIR =  __DIR__ . '/../';

    public function loadClass(string $classname): bool
    {
        $path =  realpath(
            (str_replace('strategy\\', self::ROOT_DIR, $classname))
            . $this->expansion);

        if(file_exists($path)){
            require $path;
            return true;
        }else{
            return false;
        }

    }


}