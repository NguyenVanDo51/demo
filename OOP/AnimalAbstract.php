<?php
abstract class AnimalAbstract
{
    public $name;
    public $color;
    public $isDie;
    public $stomach;

    public abstract function killed();
    public abstract function eat(Animal $animal);
    public abstract function getStomach();
}