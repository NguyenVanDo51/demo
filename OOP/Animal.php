<?php

include_once 'AnimalAbstract.php';

class Animal extends AnimalAbstract
{

    function __construct($name, $color)
    {
        $this->color = $color;
        $this->name = $name;
        $this->isDie = false;
        $this->stomach = [];
    }

    // Goi khi bi an thit
    public function killed()
    {
        // TODO: Implement killed() method.
        $this->isDie = true;
    }

    // An con vat khac
    public function eat(Animal $animal)
    {
        // TODO: Implement eat() method.
        $animal->killed();
        array_push($this->stomach, $animal);
    }

    // Lay nhung con vat da an
    public function getStomach()
    {
        // TODO: Implement stomach() method.
        return $this->stomach;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Name: " . $this->name . ", Color" . $this->color . ", status: " .
            ($this->isDie ? "die" : "alive") .
            ((!empty($this->stomach)) ? ", stomach: " . implode(', ', array_column($this->getStomach(), 'name')) : "") . "\n";
    }
}