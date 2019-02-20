<?php

namespace ExportApp\DataProviders;


class DataProvider
{
    private $data;

    public function __construct(int $id)
    {
        $array = [];
        for ($i = 0; $i < $id; $i++) {
            $array[] = 100 + $i;
        } //mysqli query
        $this->data = $array;
    }

    public function getData()
    {
        return $this->data;
    }
}