<?php

namespace ExportApp\Exporter;

/**
 * Created by PhpStorm.
 * User: private
 * Date: 17.11.18
 * Time: 18:13
 */

final class ExcelExporter extends AbstractExporter implements ExporterInterface
{
    public function export()
    {
        file_put_contents('xls.json', json_encode([$this->headlines, $this->data]));
    }
}