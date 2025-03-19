<?php 
define("name","abdur rehman khan "); // constan and can access inside a funtion
//const name = "Abdur rehman"; can access inside a funtion
// $name = "Abdur rehman";  can not be accessed inside a funtion
function add_two(int $first,float $secnd): float{ // we can set return type 
    echo name;
    return $first + $secnd;
}

$resutl = add_two(4,5.6);
echo $resutl;
?>