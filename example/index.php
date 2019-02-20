<?php

require_once 'app/Image/ImageHandler.php';
require_once 'app/Image/ImageRotator.php';
require_once 'app/ImageHandler.php';


use app\Image\ImageRotator;
use app\ImageHandler;
use app\Image\imageHandler as ImageImageHandler;

//1
$imageHandler = new ImageHandler('asdasdsad');
echo $imageHandler->getFileName();
//2
$imageRotator = new ImageRotator();

//3
$imageHandler2 = new ImageImageHandler();
//echo $imageHandler2->getFileName(); wrong
