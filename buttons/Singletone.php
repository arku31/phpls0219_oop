<?php
/**
 * Created by PhpStorm.
 * User: private
 * Date: 20.02.19
 * Time: 19:13
 */

class Session
{
    protected static $instance;
    protected $data;

    public static function init()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setSeasonValue($key, $value)
    {
        $this->data[$key] = $value;
    }

    protected function __construct()
    {

    }

    public function getValue($key)
    {
        return $this->data[$key];
    }
}

$session = Session::init();
$session->setSeasonValue('user_id', 1);

//
$session = Session::init();
echo $session->getValue('user_id');
