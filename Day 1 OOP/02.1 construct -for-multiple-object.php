<?php
//Define class
class Biodata{
    //Define proparty of this class
    public $name;
    public $age;
    public $hobby;
    public $education;
    function __construct( $personName = 0 ,$personAge = 0, $personHobby = 0, $personEducation = 0){
        $this->name = $personName;
        $this->age = $personAge;
        $this->hobby = $personHobby;
        $this->education = $personEducation;
        
    }

    function Biodata(){

        echo "Hi, My name is {$this->name}. I'm {$this->age} years old. My hobby is {$this->hobby}. I'm studying in {$this->education}. Thanks For read !!\n";
    }
}

//Object creation
$creat_object_1 = new Biodata("Mijanur Rahman",21,"programming","Honours");
$creat_object_2 = new Biodata("Rubel",21,"Honours");

//geting object value
$creat_object_1->Biodata();
$creat_object_2->Biodata();