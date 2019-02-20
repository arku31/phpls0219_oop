<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 20.02.19
 * Time: 18:39
 */

class BlackButton implements InterfaceButton
{
    use HexColorTrait;

    protected $colorName;

    public function __construct($colorName)
    {
        $this->colorName = strtoupper($colorName);
    }

    public function abc()
    {
        echo 'asd';
    }

    public function printButton()
    {
        echo $this->colorName;
    }
}