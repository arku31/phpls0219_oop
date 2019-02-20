<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 17.11.18
 * Time: 18:50
 */
namespace ExportApp\Exporter;

abstract class AbstractExporter
{
    protected $data;
    protected $headlines;

    public function __construct($data, $headlines)
    {
        $this->data = $data;
        $this->headlines = $headlines;
    }
}
