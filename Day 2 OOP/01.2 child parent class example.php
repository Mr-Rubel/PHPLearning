<?php
class ParentClass{
    protected $classNumber;
    function __construct($clsNumber){
        $this->classNumber = $clsNumber;
        $this->classNumberSix();
    }
    function classNumberSix(){
        echo "I read in class {$this->classNumber}\n";
    }
}
class ChildClass extends ParentClass {
    function classNumberSix(){
        parent::classNumberSix();
        echo "I read in class six,m";
    }
}
$getClass = new ChildClass("ACDF");