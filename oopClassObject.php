<?php
/* class Dog {
    public $name;
    public $age;
    public $sound;
}

$boltair = new Dog();
$boltair->name = 'papi';
$boltair->age = 5;
$boltair->sound="wo wo";
var_dump($boltair) */

class Test{
    public function __construct (public $name){}

    public function show(){
        echo $this->name;
    }
}

$newName = new Test("Abdur Rehman");
//$newName->name = "Abdur Rehman";
$newName->show();

?>