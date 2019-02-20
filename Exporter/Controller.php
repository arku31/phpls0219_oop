<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 20.02.19
 * Time: 19:34
 */

class Controller
{
    public function handle()
    {
        $data = require "data.php";

        $export = new JsonExport($data);
        $export->export();
    }
}