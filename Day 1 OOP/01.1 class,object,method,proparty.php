<?php
//Define class
class Biodata{
    //Define proparty of this class
    public $name;
    public $age;
    public $hobby;
    public $education;
    function mijan(){
        echo "Hi, My name is {$this->name}. I'm {$this->age} years old. My hobby is {$this->hobby}. I'm studying in {$this->education}. Thanks For read !!";
    }
}

//Object creation
$creat_object_1 = new Biodata();

//set object value
$creat_object_1 -> name = "Mijanur Rahman";
$creat_object_1 -> age = 21;
$creat_object_1 -> hobby = "programming";
$creat_object_1 -> education = "Honours";

//geting object value
$creat_object_1->mijan();