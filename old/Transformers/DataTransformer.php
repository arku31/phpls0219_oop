<?php

namespace ExportApp\Transformers;


use ExportApp\Traits\Convert;

/**
 * Created by PhpStorm.
 * User: private
 * Date: 17.11.18
 * Time: 18:34
 */

class DataTransformer
{
    use Convert;

    public function transform($data)
    {
        return array_map(function ($item) {
            return $this->convert(chr($item)); //or ord
        }, $data);
    }

    public static function getHeadlines()
    {
        return ['word'];
    }

}