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

/* class Test{
    public function __construct (public $name){}

    public function show(){
        echo $this->name;
    }
}

$newName = new Test("Abdur Rehman");
//$newName->name = "Abdur Rehman";
$newName->show(); */
class Employee {
    private $id;
    private $name;
    private $designation;

    public function set_employee($id,$name,$designation){
        $this->id = $id;
        $this->name=$name;
        $this->designation=$designation;
    }
    public function get_employee(){
        echo $this->id;
        echo $this->name;
        echo $this->designation;
    }
}
$zahid = new Employee();
$zahid->set_employee(2,"zahid","system engineer");
$zahid->get_employee();
?>