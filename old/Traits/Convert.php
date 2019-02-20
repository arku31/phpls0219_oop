<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 17.11.18
 * Time: 19:09
 */

namespace ExportApp\Traits;

trait Convert
{
    public function convert($letter)
    {
        return strtoupper($letter);
    }
}
