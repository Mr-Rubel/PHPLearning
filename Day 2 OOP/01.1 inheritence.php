<?php
//regular class
class Mijan{
    protected $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function khay(){
        echo "{$this->name} khay\n";
    }
    public function ghumay(){
        echo "{$this->name} ghumay\n";
    }
    public function boi_porchi(){
        echo "{$this->name} Boi pore\n";
    }
    public function greet(){}
}

//extends class
class Rubel extends Mijan {
    public function tv_dekhe(){
        echo "{$this->name} TV dekhe\n";
    }
    public function greet(){
        echo "{$this->name} said, Hi\n";
    }
}

class Momin extends Mijan {
    public function cycle_chalay(){
        echo "{$this->name} cycle chalay\n";
    }
    public function greet(){
        echo "{$this->name} said, Hello\n";
    }
}

//$mijan_features = new Mijan();
//$mijan_features->ghumay();
$rubel_features = new Rubel("Rubel");
$rubel_features->boi_porchi();
$rubel_features->greet();
$momin_features = new Momin("momin");
$momin_features->cycle_chalay();
$momin_features->greet();