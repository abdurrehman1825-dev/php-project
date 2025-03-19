<?php 
/* define("name","abdur rehman khan "); // constan and can access inside a funtion
//const name = "Abdur rehman"; can access inside a funtion
// $name = "Abdur rehman";  can not be accessed inside a funtion
function add_two(int $first,float $secnd): float{ // we can set return type 
    echo name;
    return $first + $secnd;
}

$resutl = add_two(4,5.6);
echo $resutl; */

//anonymous  function
/*  $function_na = function ($a, $b){
    return $a + $b;
 };
 $ret_valu = $function_na(4,5);
 echo $ret_valu; */
/* 
 $test = 20;
 $fnc_use_outside_variable = function($num) use($test){
    echo $num + $test;
 }; // use semicolon for anonymous  function
$fnc_use_outside_variable(50); */
 //Arro function

 /* $arrow_func = fn() => "this is an arrow function";
 echo $arrow_func(); */

 //access outside variable without use key words
 $nam1 = 40;
 $num2 = 20;
 $add_number = fn()=>$nam1 + $num2;

 echo $add_number();
?>