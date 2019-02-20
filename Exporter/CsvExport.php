<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 20.02.19
 * Time: 19:25
 */

class CsvExport extends AbstractExporter
{
    protected $extension = 'csv';

    public function generate()
    {
        $this->fileContent = implode(',', $this->data);
        return $this;
    }
}