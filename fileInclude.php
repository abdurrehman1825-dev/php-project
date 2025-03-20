<?php
require_once('oopClassObject.php');
$obj = new Employee(2,"inlucde file","cricket");
$obj->show();

echo __FILE__;
 function showMessage(){
    echo "<br/>". __FUNCTION__;
}

showMessage();

echo "<br/>" .__DIR__;
?>