<?php
namespace app;

class ImageHandler
{
    protected $imageName;

    public function __construct($imageName = null)
    {
        $this->imageName = $imageName;
    }

    public function getFileName()
    {
        return $this->imageName;
    }
}