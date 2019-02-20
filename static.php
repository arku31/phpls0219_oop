<?php

class Image
{
    public static $variable = 'asd';
    public static function newImage($image)
    {
//        $this->variable = 123;

        self::$variable;
    }
}


Image::newImage('asd');
echo Image::$variable;

$image = new Image();
$image->newImage('asd');