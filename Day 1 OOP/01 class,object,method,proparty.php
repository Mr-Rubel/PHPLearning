// Introduction OOP
<?php

//creation Class
class Human{
    //define an proparty of Human class
    public $name;
    public $age;
    
    function sayHi(){
        echo "salam\n";
    }

    function sayName(){
        echo "My name is {$this->name}I'm {$this->age}years old\n";
    }
}


class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}


class Dog{
    function sayHi(){
        echo "Woof\n";
    }
}

//creation object
$human1 = new Human();
$cat1 = new Cat();
$dog1 = new Dog();

//accessing objects proparty
$human1->sayHi();
$cat1->sayHi();
$dog1->sayHi();

//Asign and set public proparty
$human1->name = "Mijanur. ";
$human1->age = 21;

$human1->sayName();
//geting public proparty
$human1->sayHi();
echo $human1->name;