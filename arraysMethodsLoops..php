<?php
// array -map()
$nmber = [2,3,4];
/* $power_nmber =array_map(fn($val)=>$val*$val,$nmber);

foreach($power_nmber as $power){
    echo "$power <br/>";
} */

//filter
/* $filter_array = array_filter($nmber,fn($val)=>$val % 2 == 0);

foreach($filter_array as $power){
    echo "$power <br/>";
} */
//reducer method 
$reduce_array = array_reduce($nmber,fn($cary,$val)=>$cary + $val,0);
echo $reduce_array; 
?>