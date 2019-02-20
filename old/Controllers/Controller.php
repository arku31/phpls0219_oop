<?php

namespace ExportApp\Controllers;

use ExportApp\DataProviders\DataProvider;
use ExportApp\Exporter\ExporterInterface;
use ExportApp\Transformers\DataTransformer;


class Controller
{
    public function export($exporterType)
    {
        //http://localhost/export
        $dataProvider = new DataProvider(12);
        $dataToExport = $dataProvider->getData();

        $transformedDataToExport = (new DataTransformer)->transform($dataToExport);
        /** @var ExporterInterface $exporter */
        $exporter = new $exporterType(
            $transformedDataToExport,
            \ExportApp\Transformers\DataTransformer::getHeadlines()
        );

        $exporter->export();
    }
}
