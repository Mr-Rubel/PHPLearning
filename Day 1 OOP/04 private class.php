<?php

//user can't access internal private proparty
//A class can use its in-house private and public properties.
class Fund{
    private $fund;
    function __construct($initialFund = 0){
        $this ->fund = $initialFund;
    }

    public function addFund($money){
        $this ->fund += $money;
    }
    public function deductFund($money){
        $this ->fund -= $money;
    }
    public function getTotal(){
        echo "Toal Fund is {$this->fund}\n";
    }
}
$ourFund = new Fund(100);
$ourFund->getTotal();
$ourFund->addFund(10);
$ourFund->deductFund(5);
$ourFund->getTotal();
