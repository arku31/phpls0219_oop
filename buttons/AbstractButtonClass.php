<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 20.02.19
 * Time: 18:32
 */

abstract class AbstractButtonClass implements InterfaceButton
{
    protected $color;

    public function printButton()
    {
        echo $this->color.PHP_EOL;
    }
}