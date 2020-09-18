<?php

include_once 'Animal.php';

class Cat extends Animal
{
function __construct($name, $color)
{
parent::__construct($name, $color);
}
}