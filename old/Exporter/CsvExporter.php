<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 17.11.18
 * Time: 18:13
 */
namespace ExportApp\Exporter;

final class CsvExporter extends AbstractExporter implements ExporterInterface
{
    public function export()
    {
        file_put_contents('csv.json', json_encode([$this->headlines, $this->data]));
    }
}