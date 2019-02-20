<?php
require "button.class.php";

class ButtonFactory
{
    public static function createButton($type) //red
    {
        $baseClass = 'Button';
        $targetClass = ucfirst($type) . $baseClass; //RedButton

        if (class_exists($targetClass) && is_subclass_of($targetClass, $baseClass)) {
            return new $targetClass;
        } else {
            throw new \Exception("У нас нет такой кнопки: '$type'");
        }
    }
}