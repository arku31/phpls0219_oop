<?php

use PetyaDevelop\Image;
use VasyaDevelop\Image as Image2;
//namespace Loftschool/Meetings/Youtube/VideoManager
//namespace Loftschool/Meetings/Vimeo/VideoManager
require "InterfaceButton.php";
require "HexColorTrait.php";
require "AbstractButtonClass.php";
require "BlueButton.php";
require "RedButton.php";
require "GreenButton.php";
require "BlackButton.php";
require "Image.php";
require "ImageNew.php";
require "ButtonFactory.php";


try {
    ButtonFactory::create('red')->printButton();
    ButtonFactory::create('asd')->printButton();
} catch (Exception $e) {
    echo $e->getMessage().PHP_EOL;
}

$black = new BlackButton('BlackBtn'.PHP_EOL);
$black->printButton();
