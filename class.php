<?php
class Image
{
    protected $filename;
    public $publicl;
    private $private;

    public function showFileName()
    {
        return rand(0,100).'.jpg'.PHP_EOL;
    }

    public function setFileName($filename) {
        $this->filename = $this->getPath() . $filename;
    }

    protected function callProtected()
    {

    }

    private function callPrivate()
    {

    }

    public function publicF() //всегда можно (извне)
    {
        $this->callProtected();  // только изнутри
        $this->callPrivate(); //только в ТЕКУЩЕМ классе
    }

    protected function getPath()
    {
        return __DIR__.'/';
    }

    public function getFileName() {
        $this->getImageData();
        return $this->filename;
    }

    protected function getImageData()
    {
        return 'smth';
    }
}

class Picture extends Image
{
    public function getPictureInfo()
    {
        return $this->getImageData().'Super picture';
    }

    public function getFileName()
    {
        return basename($this->filename);
    }
}

$image = new Image();
$image->setFileName('asd');
echo $image->getFileName();
echo PHP_EOL;

$image = new Picture();
$image->setFileName('asd');
echo $image->getPictureInfo();
echo $image->getFileName();
echo PHP_EOL;

