<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 20.02.19
 * Time: 19:25
 */

class JsonExport extends AbstractExporter
{
    protected $extension = 'json';

    public function generate()
    {
        $this->fileContent = json_encode($this->data);
        return $this;
    }
}