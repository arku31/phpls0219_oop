<?php

abstract class Tovar
{
    protected $tovar;

    abstract public function sell();
}

class Auto extends Tovar
{
    use Discount;
    public function sell()
    {
        echo 'asd';
    }
}

class asd extends Tovar implements driveable, colorable
{
    use Discount;
    public function sell()
    {

    }

    public function canDrive()
    {
        echo 'I can drive';
    }

    public function canHaveColor()
    {
        // TODO: Implement canHaveColor() method.
    }
}

interface driveable {
    public function canDrive();
}

interface colorable {
    public function canHaveColor();
}

trait Discount
{
    public function makeDiscount()
    {

    }
}