<?php
class Kkhs
{
    public $classOne;
    function __construct($classRoll)
    {
        $this->classOne = $classRoll;
    }
    function classSix()
    {
        echo "This is class {$this->classOne}\n";
    }
}
$cls1 = new Kkhs("Six");
$cls2 = new Kkhs("Seven");

$cls1->classSix();
$cls2->classOne = "momin";
$cls2->classSix();
