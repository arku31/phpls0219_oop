<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 20.02.19
 * Time: 19:24
 */

abstract class AbstractExporter implements InterfaceExport
{
    protected $data;
    protected $fileContent;
    protected $extension;

    public function export()
    {
        $this->generate();
        file_put_contents('exported.'.$this->extension, $this->fileContent);
    }

    abstract function generate();

    public function __construct(array $data)
    {
        $this->data = $data;
    }
}