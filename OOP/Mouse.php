<?php

include_once 'Animal.php';

class Mouse extends Animal
{
    function __construct($name, $color)
    {
        parent::__construct($name, $color);
    }

    // Hoi sinh
    private function alive()
    {
        $this->isDie = false;
    }

    // Hoi sinh nhieu con chuot
    static function ComeBack(Mouse...$mouses)
    {
        foreach ($mouses as $mouse) {
            $mouse->alive();
        }

    }
}