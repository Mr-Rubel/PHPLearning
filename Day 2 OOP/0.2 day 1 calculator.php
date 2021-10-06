<?php
class Calculator{
    private $inputOne;
    private $inputTwo;

    function __construct($input1, $input2){
        $this->inputOne = $input1;
        $this->inputTwo = $input2;
    }
    public function jogCal(){
        $this->one = ( $this->inputOne + $this->inputTwo );
        echo "Calculate addition is = {$this->one}\n";
    }

    public function biyogCal(){
        $this->one = ( $this->inputOne - $this->inputTwo );
        echo "Calculate subtraction is = {$this->one}\n";
    }

    public function gunCal(){
        $this->one = ( $this->inputOne * $this->inputTwo );
        echo "Calculate multiplication is = {$this->one}\n";
    }

    public function vagCal(){
        $this->one = ( $this->inputOne / $this->inputTwo );
        echo "Calculate divide is = {$this->one}\n";
    }
    
    public function percentCal(){
       $this->one = ( $this->inputOne + $this->inputTwo );
        //percentage formulla 1000*20/100
        $this->percentage = (($this->one) * 20 / 100) ;
        echo "Calculate percentage is = {$this->percentage}\n";
    }
}

$calObj = new Calculator(100,300);
$calObj->jogCal();
$calObj->biyogCal();
$calObj->gunCal();
$calObj->vagCal();
$calObj->percentCal();