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
    public $id;
    public $name;
    public $designation;

    public function __construct($id,$name,$designation){
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
$zahid = new Employee(2,"zahid","system engineer");
$aslam = new Employee(3,"aslam","system engineer");
//$zahid->set_employee(2,"zahid","system engineer"); old code
//$zahid->get_employee();
foreach(get_object_vars($zahid) as $key=>$value){
    echo "$key:$value <br/>";
}
?>