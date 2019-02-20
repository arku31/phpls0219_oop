<?php
/**
 * В кратце: Возмжоно прятать часть кода в "капсулы"
 */
$capsule = new Capsule();
$capsule->setHidden('123123');
echo $capsule->getHidden();

class Capsule
{
    private $hidden = 123;
    protected $partiallyhidden = 'abc';
    protected $changes = 0;
    public $open = 'OPEN';
    public $idea;

    /**
     * Возвращает значение. Так называемый геттер
     * @return int
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Выставляет значение. Так называемый сеттер
     * @param $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
        $this->changes++;
    }

    public function getChanges()
    {
        echo $this->changes;
    }

    /**
     * @return string
     */
    public function getPartiallyhidden()
    {
        return $this->partiallyhidden;
    }

    /**
     * @param string $partiallyhidden
     */
    public function setPartiallyhidden($partiallyhidden)
    {
        $this->partiallyhidden = $partiallyhidden;
    }
}

$object = new Capsule();
$asd = $object->getHidden();
$asd = 2;
$again = $object->getHidden();
$object->setHidden(25);
$object->setHidden(25);
$object->setHidden(25);
$object->setHidden(25);
$object->setHidden(25);
$object->setHidden(25);
$object->getChanges();
