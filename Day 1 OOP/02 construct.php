<?php
//Define class
class Biodata{
    //Define proparty of this class
    public $name;
    public $age;
    public $hobby;
    public $education;
    function __construct( $personName ,$personAge, $personHobby, $personEducation){
        $this->name = $personName;
        $this->age = $personAge;
        $this->hobby = $personHobby;
        $this->education = $personEducation;
        
    }

    function Biodata(){
        echo "Hi, My name is {$this->name}. I'm {$this->age} years old. My hobby is {$this->hobby}. I'm studying in {$this->education}. Thanks For read !!";
    }
}

//Object creation
$creat_object_1 = new Biodata("Mijanur Rahman",21,"programming","Honours");

//geting object value
$creat_object_1->Biodata();