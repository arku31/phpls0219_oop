<?php

use ExportApp\Controllers\Controller;
use ExportApp\Exporter\ExcelExporter;
require "Traits/Convert.php";

require "Controllers/Controller.php";
require "Exporter/ExporterInterface.php";
require "Exporter/AbstractExporter.php";
require "DataProviders/DataProvider.php";
require "Transformers/DataTransformer.php";
require "Exporter/ExcelExporter.php";
require "Exporter/CsvExporter.php";

$controller = new Controller();
$controller->export(ExcelExporter::class);