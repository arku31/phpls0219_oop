<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 20.02.19
 * Time: 18:55
 */

class ButtonFactory
{
    const BUTTON_SIZE = 10;

    public static function create($color)
    { //red => Red
        $class = self::formClass($color);
        if (!class_exists($class)) {
            throw new Exception('Class not exist');
        } else {
            $object = new $class;
            if ($object instanceof InterfaceButton) {
                return $object;
            } else {
                throw new Exception('Class exists but there is no interface button implementation');
            }
        }
    }

    protected static function formClass($color)
    {
        return ucfirst($color). 'Button';
    }
}

