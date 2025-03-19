<?php 
function add_two(int $first,float $secnd): float{ // we can set return type 
    return $first + $secnd;
}

$resutl = add_two(4,5.6);
echo $resutl;
?>