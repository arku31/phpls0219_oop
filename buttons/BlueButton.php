<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 20.02.19
 * Time: 18:33
 */

class BlueButton extends AbstractButtonClass implements InterfaceButton
{
    use HexColorTrait;
    protected $color = 'blue';
}