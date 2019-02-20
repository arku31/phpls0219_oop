<?php
$a = Session::getInstance()->getChanges();


$b = Session::getInstance()->getChanges();
$b = Session::getInstance()->getChanges();
$b = Session::getInstance()->getChanges();
$b = Session::getInstance()->getChanges();
$b = Session::getInstance()->getChanges();
$b = Session::getInstance()->getChanges();
$b = Session::getInstance()->getChanges();
$b = Session::getInstance()->getChanges();
$b = Session::getInstance()->getChanges();
echo $a.PHP_EOL.$b.PHP_EOL;

//$c = new Session();
//echo 'c:'.$c->getChanges().PHP_EOL;
//$d = new Session();
//echo 'd:'.$d->getChanges().PHP_EOL;


class Session
{
    protected $changes;
    private static $instance;

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getChanges()
    {
        $this->changes++;
        return $this->changes;
    }

    protected function __construct()
    {
        //
    }

    private function __clone()
    {
        //Клонирование запрещено
    }

}

// get a session instance
$session = Session::getInstance();
