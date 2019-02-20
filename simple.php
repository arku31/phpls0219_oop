<?php

class Simple
{
    public $publicdata = [];
    protected $data = [];
    private $privatedata = [];

    protected $anydata;

    public function setVariable($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function getPrivateData()
    {
        return $this->privatedata;
    }

    public function getData()
    {
        return array_map(function ($item) {
            return '!!!'.$item;
        }, $this->data);
    }

    /**
     * @return mixed
     */
    public function getAnydata()
    {
        return $this->anydata;
    }

    /**
     * @param mixed $anydata
     */
    public function setAnydata($anydata)
    {
        $this->anydata = $anydata;
    }
}

class Simple2 extends Simple {
    //Все еще доступ к $data
    //нет доступа к private переменной $privatedata

    public function getData()
    {
        return $this->data;
    }
}


$object = new Simple2();
$object->setVariable('a', 1);
$object->setVariable('b', 2);

print_r($object->getData());